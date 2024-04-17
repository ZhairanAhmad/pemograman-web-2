<?php
class PersegiPanjang{
    private $panjang;
    private $lebar;
    function __construct($p, $l)
    {
        $this->panjang = $p;
        $this->lebar = $l;
    }
    function getPanjang() {
        return $this->panjang;
    }

    function getLebar() {
        return $this->lebar;
    }
    function getLuas()
    {
        return $this->panjang * $this->lebar;
    }
    function getKeliling()
    {
        return 2 * ($this->panjang + $this->lebar);
    }
}
?>