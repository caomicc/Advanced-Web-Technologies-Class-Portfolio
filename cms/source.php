<?php

/**
* CSCI.373 - Advanced Web Technologies
* This package is for the Advanced Web Technologies class at 
* Framingham State University
*
* @author 		Nathan Dentzau
* @date   		01/21/2015
* @file   		source.php
* @description 	This file retrieves the contents of a selected file
*				and displays the source code for viewing pleasures
*/

require "includes/constants.php";
require "includes/template.php";

// Initiate the template class
$template = new template(STYLE_DIRECTORY, STYLE_SELECTED);

// File location via
$file_location = ($_GET['i']) ? $_GET['i'] : '';

// Check if the file exists, if not throw an error
if (!file_exists($file_location))
{
	trigger_error("Unable to find '{$file_location}' on the server", E_USER_ERROR);
}

// Highlight the PHP code to be displayed
$template->file_location = $file_location;
$template->php_source_code = highlight_file($file_location, true);
$template->display('source.html');

?>