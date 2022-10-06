<?php
/*  
    #video 2
    Class
    -class template untuk membuat instance dari object
    -class mendefinisikan object
    -menyimpan data dan perilaku yang disebut dengan property dan method

    cara membuat class
    -diawali dengan menuliskan keyword class, diikuti nama dan dibatasi dengan {}
    untuk menyimpan property dan method
    -aturan penamaan class sama seperti variable

    #video 3
    Property
    - mempresentasikan data / keadaan dari sebuah object
    - variabel yang ada di dalam object (member variable)
    - sama seperti yang ada di dalam PHP, ditambah dengan visibility di depannnya

    Method
    - Mempresentasikan perilaku dari sebuah object
    - Function yang ada di dalam object
    - sama seperti yang ada di dalam PHP, ditambah dengan visibility di depannnya

    Contoh kasus (mobil)
    Property
    - nama
    - merk
    - warna
    - kecepatanMaksimal
    - jumlahPenumpang
    Method
    - tambahKecepatan
    - kurangiKecepatan
    - gantiTransmisi
    - belokKiri
    - belokKanan

    #video 4
    Constructor
    - metode khusus yang akan dijalankan secara otomatis setiap kita membuat intance sebuah kelas

    #video 5
    Object Type
    menggunakan object sebagai tipe data untuk

    #video 6
    inheritance
    - Menciptakan hierarki antar kelas(Parent&child)
    - Child class, mewarisi semua properti dan method dari parent nya (yang visible)
    - Child class, memperluas (extends) fungsionalitas dari parent-nya

    #video 7
    Inheritance lanjutan

    #video 8
    OVerriding merupakan istilah dimana kita bisa membuat method dikelas child dimana sama dengan parent nya/ menimpa method parent nya di child class

    #video 9
    Visibilty
    - Konsep yang digunakan untuk mengatur akses dari property dan method pada sebuah objek.
    - ada 3 keyword dalam visibilty: public, protected, dan private.
    - public, dapat digunakan di mana saja, bahkan di luar kelas.
    - protected, hanya dappat digunakan di dalam sebuah kelas beserta turunannya.
    - private, hanya dapat digunakan di dalam sebuah kelas tertentu saja.

    - kenapa menggunakan visibilty
    - Hanya memperlihatkan aspek dari class yang dibutuhkan
    - Menentukan kebutuhan yang jelas untuk object
    - Memberikan kendali pada kode untuk menghindari 'bug'

    #video 10
    Accessor Methods (Setters & Getters)

    #video 11
    Static Keyword
    - class merupakan template dari object
    kita bisa mengakses property ddan method dalam konteks class 
    untuk apa? 
    - Member yang terikat dengan class, bukan dengan object
    - Nilai static akan selalu tetap meskipun object di-instansiasi berulang kali
    - Membuat kode menjadi 'procedural'
    - Biasanya digunakan untuk membuat fungsi bantuan / helper
    - Atau digunakan di class-class utility pada framework

    #video 12
    Constant 
    Merupakan sebuah identifier untuk menyimpan nilai (nilai nya tidak dapat berubah)

    cara membuat nya
    - define() tidak bisa diakses di dalam class 
    - const bisa diakses di dalam class

    Magic Constant
    - __LINE__ (menampilkan constant baris ini ditulis)
    - __FILE__ (Menampilkan alamat dari file constant bersangkutan)
    - __DIR__ (Mengetahui directory dari file bersangkitan)
    - __FUNCTION__ (mengetahui sedang ada di function apa)
    - __CLASS__ (Mengetahui sedang ada di class a)
    - __TRAIT__
    - __METHOD__
    - __NAMESPACE__

    #video 13
    Abstract Class 1
    - sebuah keals yang tidak dapat di instansiasi
    - kelas abstrak
    - mendefinisikan interface untuk kelas lain yang menjadi turunannya
    - berperan sebagai kerangka dasar untuk kelas turunnannya
    - memiliki minimal 1 method abstrak
    - digunakan dalam pewarisan / inheritance untuk memaksakan implementasi method abstrak yang sama untuk semua kelas turunannya
    Abstract Class 2
    - Semua kelas turunan, harus mengimplementasikan method abstrack yang ada di kelas abstraknya
    - kelas abstrak boleh memiliki property / method reguler
    - kelas abstrak boleh memiliki property / static method
    kenapa?
    - merepresentasikan ide atau konsep dasar
    - composition over inheritance
    - salah saatu cara menerapkan polimorphism
    - sentralisasi logic
    - mempermudah pengerjaan tim

    #video 14
    abstarct class bagian 2
  lanjut ke studi kasus produk
*/
?>
<?php
#video 2
// contoh class
class tes
{
}
?>

<?php
/*  
    object 
    - intstance yang didefinisikan oleh class
    - banyak object yang dibuat menggunakan satu class
    - object dibuat dengan menggunakan keyword new

*/
?>

<?php
#video 3
// contoh object
class Coba
{
}
// membuat object instance dari class
$a = new Coba();
$b = new Coba();
?>

<?php
class Mobil
{
    public $nama;
    public $merk;
    public $warna;
    public $kecepatanMaksimal;
    public $jumlahPenumpang;

    public function tambahKecepatan()
    {
    }
    public function kurangKecepatan()
    {
    }
    public function gantiTransmisi()
    {
    }
}
?>
<?php
/*
    Inheritance lanjutan
*/

class Mobil1
{
    public  $nama, $merk, $warna,
        $kecepatanMaksimal,
        $jumlahPenumpang;

    public function tambahKecepatan()
    {
        return "Kecepatan bertambah!";
    }
}

class MobilSport extends Mobil1
{
    public $turbo = false;

    public function jalankanTurbo()
    {
        $this->turbo = true;
        return "turbo dijalankan!";
    }
}

$mobil1 = new MobilSport();
echo $mobil1->tambahKecepatan();
echo "<br>";
echo $mobil1->jalankanTurbo();
?>

<?php
// abstract class
abstract class Buah
{
    private $warna;
    abstract public function makan();
    public function setWarnaa($warna)
    {
        $this->warna = $warna;
    }
}

class Apel extends Buah
{
    public function makan()
    {
        // kupas
        // makan tengah
    }
}

class Jeruk extends Buah
{
    public function makan()
    {
        // kupas
        // makan satu satu
    }
}
?>