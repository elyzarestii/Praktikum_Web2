<?php       //membuat class


class dosen {
    public $nama;
    public $nip;
    public $matakuliah;

    public function __construct($nama, $nip, $matakuliah){
        $this->nama = $nama;
        $this->nip = $nip;
        $this->matakuliah = $matakuliah;
    }


public function TampilkanDosen() {            //menampilkan data dosen
    return "Nama = $this->nama <br>
    NIP = $this->nip <br>
    Matakuliah = $this->matakuliah";
}
}


$dosen = new dosen("Elyza Restiana", "987654321", "Basis Data");
echo $dosen->TampilkanDosen();
echo "<br>";
?>