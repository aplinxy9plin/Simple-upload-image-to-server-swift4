<?php
$uploads_dir = 'img';
$tmp_name = $_FILES["picture"]["tmp_name"];
$name = basename($_FILES["picture"]["name"]);
move_uploaded_file($tmp_name, "$uploads_dir/$name");
?>