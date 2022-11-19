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
        $this->setPage(file_get_contents(TEMPLATE_PATH . "/{$this->getTheme()}/$pathFile.{$this->getExt()}"));
        $this->setIndex(file_get_contents(TEMPLATE_PATH . "/{$this->getTheme()}/$index.{$this->getExt()}"));
        $this->page();
        $this->route();
        $this->text($this->getTheme(). '_'. str_replace("/","_", $pathFile));
    }
}