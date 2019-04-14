<?php
    function random($length){
        $alphabet = "azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";
        return substr(str_shuffle(str_repeat($alphabet, $length)), 0, $length);
    }

	require('avatar.php');
	require('class.avatar.php');

	$str = random(5);
	create($str);
	create($str, 3);
	create($str, 10, 600);

	$grafikart = new Avatar($str);
	echo '<img src="' . $grafikart->base64() . '" />';
	$grafikart->save(''.$str.'.png');
	$grafikart->display();
