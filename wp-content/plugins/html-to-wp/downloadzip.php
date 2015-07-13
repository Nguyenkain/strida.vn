<?php

include('includes.php');
include('functions.php');


ksm_html_download_zip($_GET['file'].'_theme.zip');
unlink($_GET['file'].'_theme.zip');
exit;

?>