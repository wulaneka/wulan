<?php 



class Produk {

	 public $JUDUL = "Judul", 
	 		$PENULIS = "Penulis",
	 		$PENERBIT = "Penerbit",
	 		$HARGA = 0; 

	 public function getLabel() {
	 	return "$this->JUDUL, $this->PENULIS, $this->PENERBIT, $this->HARGA";
	 }
	 
}


// $produk1 = new Produk();
// $produk1->Judul = "Doraemon";
// var_dump($produk1);


// $produk2 = new Produk();
// $produk2->Judul = "Uncharted";
// var_dump($produk2->Judul);

$produk3 = new Produk();
$produk3->JUDUL = "Naruto";
$produk3->PENULIS = "Masashi Kishimoto";
$produk3->PENERBIT = "Shonen Jump";
$produk3->HARGA = 30000;


$produk4 = new Produk();
$produk4->JUDUL = "Uncharted";
$produk4->PENULIS = "Neil Druckmann";
$produk4->PENERBIT = "Sony Computer";
$produk4->HARGA = 250000;


echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
