<?php

namespace Erykai\Template;

abstract class Resource
{
    use TraitTemplate;

    protected string $index;
    protected string $main;
    protected string $page;
    protected string $ext;
    protected string $themeIndex;
    protected string $themePage;


    public function __construct(string $themeIndex, string $themePage, string $ext = "html")
    {
        $this->setThemeIndex($themeIndex);
        $this->setThemePage($themePage);
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
    protected function getThemeIndex(): string
    {
        return $this->themeIndex;
    }

    /**
     * @param string $theme
     */
    protected function setThemeIndex(string $theme): void
    {
        $this->themeIndex = $theme;
    }

    protected function getThemePage(): string
    {
        return $this->themePage;
    }

    /**
     * @param string $theme
     */
    protected function setThemePage(string $theme): void
    {
        $this->themePage = $theme;
    }


}