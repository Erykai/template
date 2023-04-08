<?php

namespace Erykai\Template;

use Erykai\Translate\Translate;
use stdClass;

/**
 * TraitTemplate
 */
trait TraitTemplate
{
    abstract public function getIndex(): string;
    abstract public function getMenu(): string;
    abstract protected function getPage(): string;
    /**
     * navigation
     */
    protected function page(): void
    {
        preg_match_all(TEMPLATE_REGEX_GLOBAL, $this->getIndex(), $matches);
        foreach ($matches[0] as $match) {
            $this->globals($match);
        }

        preg_match_all(TEMPLATE_REGEX_GLOBAL, $this->getMenu(), $matches);
        foreach ($matches[0] as $match) {
            $this->globals($match);
        }

        preg_match_all(TEMPLATE_REGEX_GLOBAL, $this->getPage(), $page);

        foreach ($page[0] as $match) {
            $this->globals($match);
        }
    }
    /**
     * translate links {{#/dashboard#}}
     */
    protected function route(): void
    {
        preg_match_all(TEMPLATE_REGEX_ROUTE, $this->getIndex(), $matches);
        foreach ($matches[0] as $key => $match) {
            $route = str_replace(['{{#', '#}}'], "", $matches[0][$key]);
            $data = new stdClass();
            $data->file = 'route';
            $data->text = $route;
            $text = (new Translate())->data( $data)->target()->response();
            $this->setIndex(str_replace($matches[0][$key], $text->translate, $this->getIndex()));
        }
    }
    /**
     * @param $fileTranslator
     * translate text {{Hello world}}
     */
    protected function text($fileTranslator, string $module = null): void
    {
        preg_match_all(TEMPLATE_REGEX_TEXT, $this->getIndex(), $matches);

        foreach ($matches[0] as $key => $match) {
            $data = new stdClass();
            $data->file = $fileTranslator;
            $data->text = $matches[1][$key];
            $text = (new Translate())->data($data)->target(null, $module)->response();
            $this->setIndex(str_replace($matches[0][$key], $text->translate, $this->getIndex()));
        }
    }


    /**
     * @param string $match
     */
    private function globals(string $match): void
    {
        switch ($match) {
            case '{{PAGE}}':
                $this->setIndex(str_replace($match, $this->getPage(), $this->getIndex()));
                break;
            case '{{MENU}}':
                $this->setIndex(str_replace($match, $this->getMenu(), $this->getIndex()));
                break;
            case '{{LANG}}':
                $this->setIndex(str_replace($match, (new Translate())->lang(), $this->getIndex()));
                break;
            case '{{TEMPLATE_URL}}':
                $this->setIndex(str_replace($match, TEMPLATE_URL, $this->getIndex()));
                break;
            case '{{TEMPLATE_CLIENT}}':
                $this->setIndex(str_replace($match, TEMPLATE_CLIENT, $this->getIndex()));
                break;
            case '{{TEMPLATE_DEFAULT}}':
                $this->setIndex(str_replace($match, TEMPLATE_DEFAULT, $this->getIndex()));
                break;
            case '{{TEMPLATE_DASHBOARD}}':
                $this->setIndex(str_replace($match, TEMPLATE_DASHBOARD, $this->getIndex()));
                break;
        }
    }

}