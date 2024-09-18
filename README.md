# Praktikum_Web2
### Tugas Dokumentasi jobsheet1
# Proses Pembuatan class
Berikut langkah-langkah dari pembuatan class :
1. Mendefinisikan Fungsi : Pertama, buat fungsi yang akan mendefinisikan kelas didalamnya.
2. Mendefinisikan class : Di dalam fungsi, dapat mendefinisikan kelas dengan properti dan metode.
3. Menginstansiasi Objek : Setelah mendefinisikan Class, dapat membuat objek dari kelas tersebut.
4. Menggunakan Metode : Terakhir, gunakan metode yang ada didalam kelas untuk mendapatkan informasi atau melakukan operasi.

# Proses Penggunaan Metode dengan Fungsi di PHP
1. Mendefinisikan Kelas : Perlu mendefinisikan kelas yang berisi metode.
2. Mendefinisikan Objek : Setelah kelas didefinisikan, dapat membuat objek dari kelas tersebut.
3. Memanggil Metode : Dapat menggunakan objek untuk memanggil metode yang ada di dalam kelas.

# Hasil Output
1. Output Mahasiswa
   <img width="478" alt="web1mhss" src="https://github.com/user-attachments/assets/d9889339-0191-43fe-ba71-eae43c0ae593">
2. Output Dosen
   <img width="464" alt="web2dsnn" src="https://github.com/user-attachments/assets/7da8a49a-e4ad-405a-bb7a-4d0dd94e5b86">

### Tugas Dokumentasi Jobsheet 2
1.) Membuat class
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

     // 1.Instansiasi objek dari class Mahasiswa
    echo "Data Mahasiswa :<br>";
    $mahasiswaA = new Mahasiswa("Elyza Restiana", "230302080",         "Teknik Informatika");
    echo $mahasiswaA->TampilkanData();
    echo "<br><br>";


  2.) Encapsulation

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


    //2 encapsulation demontrasi akses ke atribut menggunakan           getter dan setter
    echo "Data Mahasiswa Setelah diubah : <br>";
    $mahasiswaA->setNama("Restian");
    $mahasiswaA->setNim("123456789");
    $mahasiswaA->setJurusan("Teknik Listrik");
    echo $mahasiswaA->TampilkanData();
    echo "<br><br>";


   3.)  Inheritance membuat class pengguna dengan atribut nama dan         metode getName()
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




        //3. instansial objek dan tampilkan data dosen inheritance
        echo "Data Dosen :<br>";
        $dosen = new Dosen("Sitiani", "Bahasa Inggris");
        echo $dosen->TampilkanDataDosen();
        echo "<br><br>";



4.)  Polymorphism
     // 4. polymorphism 
    class penggunaB {
    //metode akses fitur
    public function aksesFitur() {
     echo "fitur pengguna";
      }
      }
  
      //4. polymorphism instansial  objek
      echo "instansi objek dari class dosen dan mahasiswa<br>";
      $mahasiswaA = new MahasiswaA();
      $dosen = new DosenB();
      $mahasiswaA->aksesFitur();
      echo "<br>";
      $dosen->aksesFitur();
    
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


5.) Abstraction
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


      //5. abstrak demonstrasi dengan memanggil metode akses              fitur()
      echo "Demonstrasikan dengan memanggil metode aksesFitur()          <br>";
      $mahasiswaA = new MahasiswaB();
      $dosen = new dosenC();
      echo "<br>";
      $mahasiswaA->aksesFitur();
      $dosen->aksesFitur();


# Hasil Output
<img width="471" alt="WEBJB2" src="https://github.com/user-attachments/assets/82e849b9-cf17-43fe-adc9-4c7c3aae1174">


