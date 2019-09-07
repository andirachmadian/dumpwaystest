<?php

function count_handshake($count) {
	$total = 0;
	for ($i = 0; $i < $count; $i++) {
		for ($j = $i + 1; $j < $count; $j++)
			$total++;
	}
	return $total;
}

echo count_handshake(3);
echo "<br>";
echo count_handshake(6);