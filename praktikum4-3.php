<?php

class Mahasiswa
{
    private $nama;
    private $nim;
    private $prodi;

    public function __construct($nama, $nim, $prodi)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->prodi = $prodi;
    }

    public function kuliah()
    {
        echo "$this->nama sedang berkuliah <br/>";
    }

    public function ujian()
    {
        echo "$this->nama sedang ujian <br/>";
    }

    public function praktikum()
    {
        echo "$this->nama sedang praktikum <br/>";
    }
}

$budi = new Mahasiswa("Budi", "19890101", "TIF");

$budi->kuliah();
//        echo $budi->nama;
$budi->ujian();
$budi->praktikum();

$ujang = new Mahasiswa("Ujang", "19890102", "TI");

$ujang->ujian();
$ujang->praktikum();
$ujang->ujian();

