<?php

/**
 * @version     3.0.0
 * @package     com_imc
 * @subpackage  mod_imc
 * @copyright   Copyright (C) 2014. All rights reserved.
 * @license     GNU AFFERO GENERAL PUBLIC LICENSE Version 3; see LICENSE
 * @author      Ioannis Tsampoulatidis <tsampoulatidis@gmail.com> - https://github.com/itsam
 */
defined('_JEXEC') or die;

// Check for component
if (!JComponentHelper::getComponent('com_imc', true)->enabled)
{
	echo '<div class="alert alert-danger">Improve My City component is not enabled</div>';
	return;
}
/* @var $params Joomla\Registry\Registry */
//$filter = JFilterInput::getInstance($safe_htmltags);
//echo $filter->clean($params->get('html_content'));
?>

<h1>Default filters</h1>