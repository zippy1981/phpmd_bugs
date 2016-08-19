<?php

function a() {
	$a = 'letter a';
	$b = 'letter b';
	$c = 'letter c';
	$d = 'leter d';

	$letters = compact("a", 'b', "c");

	var_dump($letters);
}
