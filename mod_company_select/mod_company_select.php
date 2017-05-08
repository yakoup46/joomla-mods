<?php
   // No direct access
   defined('_JEXEC') or die;

   // Include the syndicate functions only once
   require_once dirname(__FILE__) . '/helper.php';

   $countries = modCompanySelect::getCountries();
   $imagepath = $params->get('imagepath') ?: './modules/mod_company_select/images';
   require JModuleHelper::getLayoutPath('mod_company_select');
?>