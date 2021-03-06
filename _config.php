<?php
/**
 * Skitter config file
 * You can setup per slide animation effect.
 * @package maxskitter - silverstripe module for slides management and presentation with jQuery skitter plugin
 * @link skitter http://www.thiagosf.net/projects/jquery/skitter/
 * @link maxskitter https://github.com/Silvermax/maxskitter/
 * @author Pali Ondras
 */

// Default decorators and extensions, for more info check corresponding files stored in maxskitter/code folder
DataObject::add_extension("Page", "MaxSkitterDecorator");
Object::add_extension("Page_Controller", "MaxSkitterExtension");
DataObject::add_extension("Page", "MaxSkitterConfigExtension");
DataObject::add_extension("SiteConfig", "MaxSkitterConfigExtension");

// Creating croppedResize slide image
Object::add_extension("Image", "MaxSkitterImageDecorator");

// Per page specific drag & drop for sorting slides
//SortableDataObject::add_sortable_many_many_relation('Page','MaxSkitterSlides');

/** Skitter Configuration Example (mysite/_config.php) **/
//MaxSkitterDefaults::$debugSkitter = true;
//MaxSkitterImageDecorator::$SkitterSlideWidth = 850;
//MaxSkitterImageDecorator::$SkitterSlideHeight = 250;
/*
MaxSkitterDefaults::set_staticConfig(array(
	"animation" => "cube",
	"easing_default" => "easeOutBack",
	"animateNumberActive" => "{backgroundColor:'#004581', color:'#fff'}",
	"navigation" => "false",
	"label" => "false"
));
*/

// EOF
