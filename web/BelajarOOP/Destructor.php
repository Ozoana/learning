<?php
//Destructor
//Constructor kan adalah function yang akan dipanggil ketika object dibuat
//Destructor adalah function yang akan digunakan ketika object dihapus
//biasa nya ketika object tersebut sudah tidak lagi digunakan
//untuk membuat function Destructor, kita bisa menggunakan nama function lalu __destruct()
// khusus untuk Destructor, kita tidak boleh menambahkan argument
// biasa nya cocok untuk menutup koneksi databases atau menutup proses menulis ke file, sehingga tidak terjadi memort leak

class Maling {
    public $nama;

    public function __construct($name) {
        $this->nama = $name;
        echo "Maling $this->nama muncul!\n";
    }

    public function __destruct() {
        echo "Maling $this->nama ketangkap polisi!\n";
    }
}

$m1 = new Maling("joko");


