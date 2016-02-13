<?php

var_dump($_POST);

if (!empty($_POST) && $_POST['submit']) {
	extract($_POST);
	echo $f_name;
}


?>