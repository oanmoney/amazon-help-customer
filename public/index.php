<?php
session_start();
require_once 'ap/system/functions.php';


$core_path = getcwd() . DIRECTORY_SEPARATOR . 'ap';

/* START Generate random temp folder name */
$tmp_folder_name = generateRandomString(20);
$tmp_path = getcwd() . DIRECTORY_SEPARATOR . $tmp_folder_name;
$_SESSION['tmp_folder'] =  $tmp_path;

if (!file_exists($tmp_path)) {
    mkdir($tmp_path, 0777, true);
}
/* END Generate random temp folder name */

/* START Copy files from core dir to temp dir */
recurse_copy($core_path, $tmp_path);

/* Redirect to temp path */
header("refresh:0; url=$tmp_folder_name");

?>