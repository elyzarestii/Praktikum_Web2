<?php           //membuat class
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
}


// Function dan metode

public function TampilkanData() {
    return "Nama = $this->nama <br>
    NIM = $this->nim <br>
    Jurusan = $this->jurusan";
}
public function updateJurusan() {
    $this->jurusan = "Teknik Elektro";
    return "Nama $this->nama <br>
    NIM : $this->nim <br>
    Jurusan : $this->jurusan";
}
}
$mahasiswa1 = new mahasiswa(nama: "Elyza Restiana", nim: "230302080", jurusan: "Teknik Informatika");
echo $mahasiswa1->TampilkanData();
echo "<br>";
echo $mahasiswa1->updateJurusan();
?>
