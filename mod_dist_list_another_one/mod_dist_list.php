<?php
defined('_JEXEC') or die;

require_once dirname(__FILE__) . '/helper.php';

$dir = __DIR__ . '/tmpl';
$view  = $dir. '/default.php';
$imagepath = $params->get('imagepath') ?: './modules/mod_company_select/images';

$method = 'getList';

if (isset($_GET['edit_dist'])) {
    $editId = intval($_GET['edit_dist']);

    $method = 'editDist';
    $view = $dir . '/edit.php';

    $params['edit_dist'] = $editId;
}

if (isset($_GET['delete_dist'])) {
    $deleteId = intval($_GET['delete_dist']);

    $method = 'deleteDist';

    $params['delete_dist'] = $deleteId;
}

$dists = modDistList::$method($params);
$images = './modules/mod_company_select/images/';

require $view;
