
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Forms</title>
	<meta http-equiv="content-type" content="text/html; charset=windows-1251">
	
	<link href="css/reset.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div>
	<a href="index.html">BACK</a>
</div>
<?php

//var_dump($_POST);
extract($_POST);
if (!empty($f_name) && !empty($l_name) && !empty($email) && !empty($radio) && !empty($date)) {
	$email_validate = filter_var($email, FILTER_VALIDATE_EMAIL); 

		  function translit($str) {
		    $rus = array('А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я', 'і');
		    $lat = array('A', 'B', 'V', 'G', 'D', 'E', 'E', 'Gh', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'C', 'Ch', 'Sh', 'Sch', 'Y', 'Y', 'Y', 'E', 'Yu', 'Ya', 'a', 'b', 'v', 'g', 'd', 'e', 'e', 'gh', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh', 'sch', 'y', 'y', 'y', 'e', 'yu', 'ya', 'i');
		    return str_replace($rus, $lat, $str);
		  }


		$name_file = translit("$f_name".'_'."$l_name");
		chdir('users_info');
		$file = "$name_file.txt";
		
		if ($handle = fopen($file, 'w')) {
			fwrite($handle, "$f_name, $l_name, $email, $radio, $date");

			fclose($handle);
			
		}else{
			echo "dont";
		}
	
	

}	else{
		echo "Не заполнены все поля";
	}

?>
<div>
	<ul>
		<li><span>Вы ввели:</span></li>
		<li>
			<span>Имя:	<?php echo $f_name ?></span>
		</li>
		<li>
			<span>Фамилия:	<?php echo $l_name ?></span>
		</li>
		<li>
			<span>email:	<?php echo $email ?></span>
		</li>
		<li>
			<span>Дата рожжения:	<?php echo $date ?></span>
		</li>



	</ul>
</div>


</body>
</html>
