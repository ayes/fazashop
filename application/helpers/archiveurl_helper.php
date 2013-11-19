<?php

function archive_url() {
    $root = "http://".$_SERVER['HTTP_HOST'];
$root .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
$config['base_url']    = $root;
    $archive_url = $root.'fx-archive/';
    return $archive_url;
}
?>
