<?php

$captcha = isset($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : null;

if(!is_null($captcha)){
	$res = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LcvlTgdAAAAAN0VxUkohbcdDx7S0AnhlOg8ZXkf&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']));
	if($res->success === true){
		//CAPTCHA validado!!!
		echo 'Formulario enviado com sucesso';
	}
	else{
		echo 'Erro ao validar o captcha, por favor assinale o captcha';
	}
}
else{
	echo 'Captcha não preenchido!';
}
