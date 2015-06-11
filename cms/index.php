<?php

/**
* CSCI.373 - Advanced Web Technologies
* This package is for the Advanced Web Technologies class at 
* Framingham State University
*
* @author 		Nathan Dentzau
* @date   		01/21/2015
* @file   		index.php
* @description 	This is the main php file called for this package.
*				All classes are loaded and initiated here.
*/

require "includes/constants.php";
require "includes/template.php";

// Initiate the template class
$template = new template(STYLE_DIRECTORY, STYLE_SELECTED);

// Scan labs directory for uploaded labs
$directory = scandir(LABS_DIRECTORY);
$direcory_ary = array();

// Build the directory ary with only folders
for ($i = 0; $i < count($directory); $i++)
{
	if (is_dir(LABS_DIRECTORY . '/' . $directory[$i]))
	{
		if ($directory[$i] === '.' || $directory[$i] === '..')
		{
			continue;
		}

		$directory_ary[] = $directory[$i];
	}
}

// Sort labs in acending order by name
if (!empty($directory_ary))
{
	asort($directory_ary);
}

$template->directory_ary = $directory_ary;

$template->display('index.html');

?>