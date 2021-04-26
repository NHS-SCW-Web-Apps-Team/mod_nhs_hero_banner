<?php
/**
 * @copyright	Copyright © 2021 - All rights reserved.
 * @license		GNU General Public License v2.0
 * @generator	http://xdsoft/joomla-module-generator/
 */
defined('_JEXEC') or die;

$doc = JFactory::getDocument();
/* Available fields:"hero_image","alt_text","title","subtitle","color", */
// Include assets
/*
$doc->addStyleSheet(JURI::root()."modules/mod_nhs_hero_banner/assets/css/style.css");
$doc->addScript(JURI::root()."modules/mod_nhs_hero_banner/assets/js/script.js");
*/
$hero_image = $params->get("hero_image");
$alt_text = $params->get("alt_text");
$title = $params->get("title");
$subtitle = $params->get("subtitle");
$color = $params->get("color");
$herotype = $params->get("herotype");

/**
	$db = JFactory::getDBO();
	$db->setQuery("SELECT * FROM #__mod_nhs_hero_banner where del=0 and module_id=".$module->id);
	$objects = $db->loadAssocList();
*/
require JModuleHelper::getLayoutPath('mod_nhs_hero_banner', $params->get('layout', 'default'));