<?php
// 1. Membuat class Mahasiswa
class Mahasiswa {
    // Atribut privat
    private $nama;
    private $nim;
    private $jurusan;

    // Konstruktor
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

//2. (Encapsulation)
    // Getter untuk nama
    public function getNama() {
        return $this->nama;
    }

    // Setter untuk nama
    public function setNama($nama) {
        $this->nama = $nama;
    }

    // Getter untuk nim
    public function getNim() {
        return $this->nim;
    }

    // Setter untuk nim
    public function setNim($nim) {
        $this->nim = $nim;
    }

    // Getter untuk jurusan
    public function getJurusan() {
        return $this->jurusan;
    }

    // Setter untuk jurusan
    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }

    // Menampilkan data Mahasiswa
    public function TampilkanData() {
        return "Nama: " . $this->getNama() . " <br> NIM: " . $this->getNim() . " <br> Jurusan: " . $this->getJurusan();
    }
}

// 3. Membuat class Pengguna_A
class Pengguna_A {
    protected $nama;

    // Konstruktor
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Metode get
    public function getNama() {
        return $this->nama;
    }
}

    

// Membuat class Dosen yang mewarisi Pengguna_A
class Dosen extends Pengguna_A {
    private $matakuliah;

    // Konstruktor
    public function __construct($nama, $matakuliah) {
        parent::__construct($nama);
        $this->matakuliah = $matakuliah;
    }

    // Getter untuk matakuliah
    public function getMatakuliah() {
        return $this->matakuliah;
    }

    public function tampilkanDataDosen() {
        echo "Nama: " . $this->getNama() . "<br>";
        echo "Mata Kuliah: " . $this->getMataKuliah() . "<br>";
    }
}
 // 4. polymorphism 
class penggunaB {
    //metode akses fitur
    public function aksesFitur() {
        echo "fitur pengguna";
    }
}
    
// Membuat class MahasiswaB yang mewarisi PenggunaB
class MahasiswaA extends PenggunaB {
    public function aksesFitur() {
        echo "mahasiswa bisa mengakses fitur";
    }
}

// Membuat class DosenB yang mewarisi PenggunaB
class DosenB extends PenggunaB {
    public function aksesFitur() {
        echo "Dosen bisa mengakses fitur ";
    }
}


// 5. (Abstraction) Membuat abstract class penggunaAbst
abstract class penggunaAbst {
    abstract public function aksesFitur();
}

//membuat class mahasiswaB yang mewarisi penggunaAbst
class MahasiswaB extends PenggunaAbst {
    public function aksesFitur() {
        echo "akses fitur mahasiswa<br>";
    }
}
// Membuat class dosenC yang mewarisi penggunaAbst
class dosenC extends penggunaAbst {
    public function aksesFitur() {
        echo "akses fitur dosen";
    }
}



// 1.Instansiasi objek dari class Mahasiswa
echo "Data Mahasiswa :<br>";
$mahasiswaA = new Mahasiswa("Elyza Restiana", "230302080", "Teknik Informatika");
echo $mahasiswaA->TampilkanData();
echo "<br><br>";


//2 encapsulation demontrasi akses ke atribut menggunakan getter dan setter
echo "Data Mahasiswa Setelah diubah : <br>";
$mahasiswaA->setNama("Restian");
$mahasiswaA->setNim("123456789");
$mahasiswaA->setJurusan("Teknik Listrik");
echo $mahasiswaA->TampilkanData();
echo "<br><br>";

//3. instansial objek dan tampilkan data dosen inheritance
echo "Data Dosen :<br>";
$dosen = new Dosen("Sitiani", "Bahasa Inggris");
echo $dosen->TampilkanDataDosen();
echo "<br><br>";

//4. polymorphism instansial  objek
echo "instansi objek dari class dosen dan mahasiswa<br>";
$mahasiswaA = new MahasiswaA();
$dosen = new DosenB();
$mahasiswaA->aksesFitur();
echo "<br>";
$dosen->aksesFitur();

//5. abstrak demonstrasi dengan memanggil metode akses fitur()
echo "Demonstrasikan dengan memanggil metode aksesFitur()<br>";
$mahasiswaA = new MahasiswaB();
$dosen = new dosenC();
echo "<br>";
$mahasiswaA->aksesFitur();
$dosen->aksesFitur();

?>