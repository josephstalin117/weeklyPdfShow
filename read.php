<?php

header( "Content-type:application/pdf ");

$name=$_GET["name"];

readfile("pdfs/".$name);

?>