<?php
class Mahasiswa{
    var $ipk;
    var $nama;
    var $nim;
    var $prodi;
    var $thn_angkatan;

    function __construct($nim, $nama)
    {
        $this->nim = $nim;
        $this->nama = $nama;
    }
    function predikat_ipk() {
        if ($this->ipk < 2.0)
            return "Cukup";
        elseif ($this->ipk >= 2.0 && $this->ipk < 3.0)
            return "Baik";
        elseif ($this->ipk >= 3.0 && $this->ipk < 3.75)
            return "Memuaskan";
        elseif ($this->ipk >= 3.75 && $this->ipk < 4)
            return "Cum Laude";
    }
}
?>