<?php

namespace Erykai\Template;

class Template extends Resource
{
    /**
     * @param string $index
     * @param string $pathFile
     */
    public function nav(string $index, string $pathFile)
    {

        $this->setPage(file_get_contents(TEMPLATE_PATH . "/{$this->getThemePage()}/$pathFile.{$this->getExt()}"));
        $this->setIndex(file_get_contents(TEMPLATE_PATH . "/{$this->getThemeIndex()}/$index.{$this->getExt()}"));
        $this->page();
        $this->route();
        $this->text($this->getThemeIndex(). '_'. str_replace("/","_", $pathFile));
        $this->text($this->getThemePage(). '_'. str_replace("/","_", $pathFile));
    }
}