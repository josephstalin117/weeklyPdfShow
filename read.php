<?php

header( "Content-type:application/pdf ");

$name=$_GET["name"];

echo $name;

readfile("pdfs/".$name);

?>