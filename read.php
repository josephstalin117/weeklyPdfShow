<?php

header( "Content-type:application/pdf ");

$name=$_GET["name"];

readfile("/srv/ftp/weekly/".$name);

?>