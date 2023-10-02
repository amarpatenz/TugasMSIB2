<?php

abstract class BangunDatar {
    abstract function luas();
    abstract function keliling();
}

//persegi
class Persegi extends BangunDatar {
    public float $sisi;

    function __construct($sisi){
        $this->sisi = $sisi;
    }
    function luas(){
        echo ($this->sisi * $this->sisi). "\n";
    }
    function keliling(){
        echo (4*$this->sisi). "\n";;
    }
}

//persegi panjang
class PersegiPanjang extends BangunDatar {
    public float $panjang;
    public float $lebar;
    
    function __construct($panjang,$lebar){
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    function luas(){
        echo ($this->panjang*$this->lebar). "\n";
    }
    function keliling(){
        echo ((2*$this->panjang) + (2*$this->lebar)). "\n";
    }
}

//lingkaran
class Lingkaran extends BangunDatar{
    public float $jari2;
    function __construct($jari2){
        $this->jari2 = $jari2;
    }
    function luas(){
        echo (pi() * pow($this->jari2,2)). "\n";
    }
    function keliling(){
        echo (2 * pi() * $this->jari2). "\n";
    }
}

//segitiga
class Segitiga extends BangunDatar {
    public float $tinggi;
    public float $alas;
    function __construct($alas,$tinggi){
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }
    function luas(){
        echo ($this->alas * $this->tinggi) * 0.5;
    }
    function keliling(){
        echo (sqrt(pow($this->alas,2) + pow($this->tinggi,2) ) + $this->alas + $this->tinggi). "\n";
    }
}
$b1=['bidang' => 'Segitiga'];
$b2=['bidang' => 'Lingkaran'];
$b3=['bidang' => 'Persegi Panjang'];
$b4=['bidang' => 'Persegi'];

$ar_data=[$b1,$b2,$b3,$b4];
$ar_judul =['No', 'Nama Bidang', 'Luas', 'Keliling'];
// alas = 4
// tinggi = 5 
$segitiga = new Segitiga(4,5);

// jari jari = 10
$lingkaran = new Lingkaran(10);

// sisi = 10
$persegi = new Persegi(10);

// panjang = 10
// lebar = 5
$persegi_panjang = new PersegiPanjang(10,5);

$bidang=[$segitiga,$lingkaran,$persegi,$persegi_panjang];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas P3</title>
</head>
<body>
    <h2 align="center">Data Mahasiswa</h2>
    <table border="1" cellpadding="10"  width="100%">
        <thead>
        <tr>
            <?php foreach($ar_judul as $judul){
                ?>
            <th><?= $judul ?></th>
        <?php    
        }
        ?>
        </tr>

<!--        <tbody>
     //    <?php// $no=1;
     //    foreach ($ar_data as $data){

               ?>
               <tr>
               <td><?=// $no++?></td>
               <td><?=// $data['bidang']?></td?
               </tr>
        </tbody>
-->
         <tbody>
          <?php $no=1;
         foreach ($ar_data as $data){

               ?>
               <tr>
               <td><?=$no++?></td>
               </tr>
        </tbody>

        <tbody align="center">
            <tr>
                <td>1</td>
                <td>Segitiga</td>
                <td><?php $segitiga->luas() ?></td>
                <td><?php $segitiga->keliling()?></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Lingkaran</td>
                <td><?php $lingkaran->luas() ?></td>
                <td><?php $lingkaran->keliling()?></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Persegi</td>
                <td><?php $persegi->luas() ?></td>
                <td><?php $persegi->keliling()?></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Persegi Panjang</td>
                <td><?php $persegi_panjang->luas() ?></td>
                <td><?php $persegi_panjang->keliling()?></td>
            </tr>
        </tbody>
        </table>
    
</body>
</html>
