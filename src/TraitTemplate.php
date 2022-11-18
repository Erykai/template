<?php

namespace Erykai\Template;

trait TraitTemplate
{

    public function nav(string $index, string $pathFile)
    {
        $this->setPage(file_get_contents(TEMPLATE_DIR . "/{$this->getTheme()}/$pathFile.{$this->getExt()}"));
        $this->setIndex(file_get_contents(TEMPLATE_DIR . "/{$this->getTheme()}/$index.{$this->getExt()}"));
        $this->page();
    }

    private function page(): void
    {
        $regexGlobal = '/{{([A-Z_]+)}}/';
        preg_match($regexGlobal, $this->getIndex(), $matches);
        $match = $matches[0];
        if($match === '{{PAGE}}'){
            $this->setIndex(str_replace($match, $this->getPage(), $this->getIndex()));
        }
    }

}