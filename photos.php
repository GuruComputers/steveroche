<?php

$album_id = isset($_GET['album_id']) ? $_GET['album_id'] : die('Album ID not Specified.');
$album_name = isset($_GET['album_name']) ? $_GET['album_name'] : die("Album Name not Specified.");

$page_title = "{album_name} Photos";

?>