<?php
   // No direct access
   defined('_JEXEC') or die;

   // Include the syndicate functions only once
   require_once dirname(__FILE__) . '/helper.php';

   $countries = modDistList::getDistList();

   require JModuleHelper::getLayoutPath('mod_dist_list');
?>