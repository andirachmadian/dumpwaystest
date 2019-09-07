<?php

function drawImage($s) {
	if ($s % 2 == 0)
		return false;
	for ($i = 0; $i < $s; $i++) {
		for ($j = 0; $j < $s; $j++ ) {
			if ($i == 0 || $i == $s - 1) {
				if ($j == 0 || $j == floor($s / 2) || $j == $s - 1)
					echo "* ";
				else
					echo "= ";
			} else if ($i == floor($s / 2)) {
				echo "* ";
			} else {
				if ($j == floor($s / 2)) {
					echo "* ";
				} else {
					echo "= ";
				}
			}
		}
		echo "<br>";
	}
}

drawImage(5);
