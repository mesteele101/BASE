<?php

$BASE_path = dirname(__FILE__);
$BASE_path = preg_replace("/\/tests.*/", "", $BASE_path);
define( '_BASE_INC', 1 );
$BASE_VERSION = '0.0.0 (Joette)';
$BASE_urlpath = '';
$BASE_installID = 'Test Runner';
$base_style = 'base_style.css';
$debug_mode = 0;
$debug_time_mode = 1;
$html_no_cache = 0;
$refresh_stat_page = 1;
$refresh_all_pages = 0;
$stat_page_refresh_time = 180;
$debug_mode = 0;

print "   Testing with: $BASE_installID $BASE_VERSION\n";
print "Testing code in: $BASE_path\n";

# include("$BASE_path/includes/base_constants.inc.php");
include("$BASE_path/includes/base_include.inc.php");
include_once("$BASE_path/base_db_common.php");
include_once("$BASE_path/base_common.php");

?>