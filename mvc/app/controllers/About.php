<?php
class About
{
  public function index($nama = 'Faisal', $pekerjaan = 'mahasiswa')
  {
    echo "Halo saya $nama, seorang $pekerjaan";
  }
  public function page()
  {
    echo 'About/page';
  }
}
