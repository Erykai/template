<?php

namespace Erykai\Template;

class Resource
{
    use TraitTemplate;

    private string $index;
    private string $main;
    private string $page;
    private string $ext;
    private string $theme;


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
    public function setIndex(string $index): void
    {
        $this->index = $index;
    }

    /**
     * @return string
     */
    public function getMain(): string
    {
        return $this->main;
    }

    /**
     * @param string $main
     */
    public function setMain(string $main): void
    {
        $this->main = $main;
    }

    /**
     * @return string
     */
    public function getPage(): string
    {
        return $this->page;
    }

    /**
     * @param string $page
     */
    public function setPage(string $page): void
    {
        $this->page = $page;
    }

    /**
     * @return string
     */
    public function getExt(): string
    {
        return $this->ext;
    }

    /**
     * @param string $ext
     */
    public function setExt(string $ext): void
    {
        $this->ext = $ext;
    }

    /**
     * @return string
     */
    public function getTheme(): string
    {
        return $this->theme;
    }

    /**
     * @param string $theme
     */
    public function setTheme(string $theme): void
    {
        $this->theme = $theme;
    }


}