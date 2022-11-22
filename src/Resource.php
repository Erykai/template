<?php

namespace Erykai\Template;

class Resource
{
    use TraitTemplate;

    protected string $index;
    protected string $main;
    protected string $page;
    protected string $ext;
    protected string $theme;


    public function __construct(string $theme, string $ext = "html")
    {
        $this->setTheme($theme);
        $this->setExt($ext);
    }

    /**
     * @return string
     */
    public function getIndex(): string
    {
        return $this->index;
    }

    /**
     * @param string $index
     */
    protected function setIndex(string $index): void
    {
        $this->index = $index;
    }

    /**
     * @return string
     */
    protected function getMain(): string
    {
        return $this->main;
    }

    /**
     * @param string $main
     */
    protected function setMain(string $main): void
    {
        $this->main = $main;
    }

    /**
     * @return string
     */
    protected function getPage(): string
    {
        return $this->page;
    }

    /**
     * @param string $page
     */
    protected function setPage(string $page): void
    {
        $this->page = $page;
    }

    /**
     * @return string
     */
    protected function getExt(): string
    {
        return $this->ext;
    }

    /**
     * @param string $ext
     */
    protected function setExt(string $ext): void
    {
        $this->ext = $ext;
    }

    /**
     * @return string
     */
    protected function getTheme(): string
    {
        return $this->theme;
    }

    /**
     * @param string $theme
     */
    protected function setTheme(string $theme): void
    {
        $this->theme = $theme;
    }


}