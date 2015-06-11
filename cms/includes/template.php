<?php

/**
* CSCI.373 - Advanced Web Technologies
* This package is for the Advanced Web Technologies class at 
* Framingham State University
*
* @author       Nathan Dentzau
* @date         01/21/2015
* @file         includes/template.php
* @description  A simple template engine which allows HTML markup
*               to be handled seperately from the controller file.
*/

class template
{
    public $styles_dir = '';
    public $style = '';

    private $vars = array();

    public function __construct($styles_dir, $selected_style)
    {
        $this->styles_dir = $styles_dir;
        $this->select_style($selected_style);
    }

    public function __set($index, $value)
    {
        $this->vars[$index] = $value;
    }

    private function check_style_exists($style)
    {
        $directory = $this->style_dir . '/' . $this->style;
        return is_dir($directory);
    }

    public function display($template_file)
    {
        $this->include_file($template_file);
    }

    private function include_file($template_file)
    {
        $template_file = $this->styles_dir . '/' . $this->style . '/' . $template_file;

        if (file_exists($template_file))
        {
            $template_contents = file_get_contents($template_file);

            if (empty($template_contents))
            {
                trigger_error("The template file '{$template_file}' is empty");
            }

            $template =& $this;
            include $template_file;
        }
        else
        {
            trigger_error("The template file '{$template_file}' does not exist", E_USER_WARNING);
        }
    }

    public function select_style($selected_style)
    {
        if ($this->check_style_exists($selected_style))
        {
            $this->style = $selected_style;
        }
        else
        {
            trigger_error("The selected style '{$selected_style}' does not exist.", E_USER_WARNING);
        }
    }
}
