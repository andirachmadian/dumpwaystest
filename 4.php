<?php

function hitungKembalian($totalBelanja, $jumlahUang) {
	$stockUang = array(50000, 20000, 10000, 5000, 2000, 1000, 500);
	$jumlahStockUang = array(0, 0, 0, 0, 0, 0, 0);
	$kembalian = $jumlahUang - $totalBelanja;
	$i = 0;

	while ($i < count($stockUang)) {
		$val = $kembalian - $stockUang[$i];
		if ($val >= 0) {
			$kembalian = $val;
			$jumlahStockUang[$i]++;
		} else
			$i++;
	}
	for ($j = 0; $j < count($jumlahStockUang); $j++) {
		if ($jumlahStockUang[$j] != 0) {
			echo $jumlahStockUang[$j] . " x " . $stockUang[$j];
			echo "<br>";
		}
	}
}

hitungKembalian(15500, 50000);
