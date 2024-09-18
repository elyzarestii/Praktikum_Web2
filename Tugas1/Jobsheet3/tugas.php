<?php

// Kelas Person
class Person {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function getRole() {
        return "Person";
    }
}

// Kelas Dosen
class Dosen extends Person {
    private $nidn;

    public function __construct($name, $nidn) {
        parent::__construct($name);
        $this->nidn = $nidn;
    }

    public function getNIDN() {
        return $this->nidn;
    }

    public function getRole() {
        return "Dosen";
    }
}

// Kelas Mahasiswa
class Mahasiswa extends Person {
    private $nim;

    public function __construct($name, $nim) {
        parent::__construct($name);
        $this->nim = $nim;
    }

    public function getNIM() {
        return $this->nim;
    }

    public function getRole() {
        return "Mahasiswa";
    }
}

// Kelas Abstrak Jurnal
abstract class Jurnal {
    abstract public function pengajuanJurnal();
}

// Kelas JurnalDosen
class JurnalDosen extends Jurnal {
    public function pengajuanJurnal() {
        return "Pengajuan jurnal oleh Dosen.";
    }
}

// Kelas JurnalMahasiswa
class JurnalMahasiswa extends Jurnal {
    public function pengajuanJurnal() {
        return "Pengajuan jurnal oleh Mahasiswa.";
    }
}

// Fungsi untuk menampilkan informasi
function displayInfo() {
    $dosen = new Dosen("Dr. Mail", "12345");
    $mahasiswa = new Mahasiswa("Ayunia", "67890");

    echo $dosen->getName() . " adalah " . $dosen->getRole() . " dengan NIDN: " . $dosen->getNIDN() . "\n";
    echo "<br>";
    echo $mahasiswa->getName() . " adalah " . $mahasiswa->getRole() . " dengan NIM: " . $mahasiswa->getNIM() . "\n";
    echo "<br>";

    $jurnalDosen = new JurnalDosen();
    $jurnalMahasiswa = new JurnalMahasiswa();

    echo $jurnalDosen->pengajuanJurnal() . "\n"; // Output: Pengajuan jurnal oleh Dosen.
    echo "<br>";
    echo $jurnalMahasiswa->pengajuanJurnal() . "\n"; // Output: Pengajuan jurnal oleh Mahasiswa.
    echo "<br>";
}

// Memanggil fungsi untuk menampilkan informasi
displayInfo();

?>
