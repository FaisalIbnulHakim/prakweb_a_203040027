<?php
/*  
    #video 1
    Class
    -class template untuk membuat instance dari object
    -class mendefinisikan object
    -menyimpan data dan perilaku yang disebut dengan property dan method

    cara membuat class
    -diawali dengan menuliskan keyword class, diikuti nama dan dibatasi dengan {}
    untuk menyimpan property dan method
    -aturan penamaan class sama seperti variable

    #video 2
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

    #video 3
    Constructor
    - metode khusus yang akan dijalankan secara otomatis setiap kita membuat intance sebuah kelas

    #video 4
    Object Type
    menggunakan object sebagai tipe data untuk
*/
?>
<?php
#video 1
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
#video 2
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