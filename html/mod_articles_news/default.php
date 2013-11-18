<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<div class="panel-block newsflash<?php echo $moduleclass_sfx; ?>">
	<h2><?php echo $module->title; ?></h2>
<?php
foreach ($list as $item) :
	require JModuleHelper::getLayoutPath('mod_articles_news', '_item');
endforeach;
?>
</div>
