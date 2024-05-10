<?php
class persegiPanjang {
    public $panjang;
    public $lebar;
    
    public function __construct($_lebar, $_panjang) {
        $this->panjang = $_panjang;
        $this->lebar = $_lebar;
    }

    public function rumusKeliling() {
        //Rumus 2*(panjang+lebar)
        return 2 * ($this->panjang + $this->lebar);
    }

    public function rumusLuas() {
        //Rumus p * l (Panjang * Lebar)
        return $this->panjang * $this->lebar;
    }    
}
?>