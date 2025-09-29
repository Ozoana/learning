<?php
//Constructor.php
//saat kita membuat object, maka kita seperti memanggil sebuah function, karena kita menggunakan kurung ()
//didalam class, kita bisa membuat yang nama nya constructor adalah function yang akan dipanggil saat pertama kali object dibuat
//mirip seperti function kita bisa memberikan parameter pada construktor 
//(argumen/Parameter adalah variabel yang ditulis di dalam tanda kurung () ada di pelajaran php dasar) 
// Constructor pada Property :
class maling{
    var string $nama;
    var string $barang;

    public function __construct(string $name, string $benda = "tidak ada\n")
    {
        $this->nama=$name;
        $this->barang=$benda;
    }
}

$orang1 = new maling("budi","TV"."\n");
echo "$orang1->nama, barang: $orang1->barang";//nah jadi saat memanggil nya, tinggal panggil variable nama, karena menggunakan $this 
//$this = benda. misal di sini, this nya itu $orang1

$orang2 = new maling("agus");
echo "$orang2->nama, barang: $orang2->barang";
// sedangkan di sini $this nya itu adalah $orang2
// jadi $this menentukan instance (objek) yang sedang dipanggil.