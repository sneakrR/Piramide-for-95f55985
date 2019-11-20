<?php

echo ("Hoeveel stapels wil je hebben?") . PHP_EOL;

$stack = readline("");

for ($i = 0; $i < $stack; $i++) {
	for ($j = 0; $j <= $i; $j++) {
		echo "*";
	}
	echo "" . PHP_EOL;
}