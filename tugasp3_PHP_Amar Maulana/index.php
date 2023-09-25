<?php

$a1=['nim' => '0001' , 'nama' => 'Ahmad' , 'nilai' => '90'];
$a2=['nim' => '0002' , 'nama' => 'Budi' , 'nilai' => '78'];
$a3=['nim' => '0003' , 'nama' => 'Cendy' , 'nilai' => '32'];
$a4=['nim' => '0004' , 'nama' => 'Dani' , 'nilai' => '74'];
$a5=['nim' => '0005' , 'nama' => 'Eri' , 'nilai' => '60'];

$ar_data = [$a1,$a2,$a3,$a4,$a5];
$ar_judul = ['No', 'NIM', 'Nama', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];
$jumlah_nilai = array_column($ar_data,'nilai');
$max_nilai = max($jumlah_nilai);
$min_nilai = min($jumlah_nilai);
$total_nilai = array_sum($jumlah_nilai);
$jumlah_mhs = count($ar_data);
$avg_nilai = $total_nilai / $jumlah_mhs;
$hasil_nilai=[
    'Jumlah Mahasiswa' => $jumlah_mhs,
    'Nilai Tertinggi' => $max_nilai,
    'Nilai Terendah' => $min_nilai,
    'Nilai Rata-rata' => $avg_nilai,
    'Jumlah Nilai' => $total_nilai,
];

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
        </thead>

        <tbody>
            <?php $no=1;
            foreach ($ar_data as $data){

                $keterangan = ($data['nilai'] >= 60) ? "Lulus" : "Gagal";
                $grade;
                $predikat;

                if($data['nilai'] >= 85 && $data['nilai'] <= 100) $grade="A";
                else if($data['nilai']>= 75 && $data['nilai'] < 85) $grade="B";
                else if($data['nilai']>= 60 && $data['nilai'] < 75) $grade="C";
                else if($data['nilai']>= 30 && $data['nilai'] < 60) $grade="D"; 
                else if($data['nilai']>= 0 && $data['nilai'] < 30) $grade="E";
                else $grade = "";

                switch ($grade) {
                    case 'A': $predikat = 'Memuaskan'; break;
                    case 'B': $predikat = 'Bagus'; break;
                    case 'C': $predikat = 'Cukup'; break;
                    case 'D': $predikat = 'Kurang'; break;
                    case 'E': $predikat = 'Buruk'; break;
                    default: $predikat = '';
                }
                ?>
                
                <tr>
                <td><?=$no++?></td>
                <td><?=$data['nim']?></td>
                <td><?=$data['nama']?></td>
                <td><?=$data['nilai']?></td>
                <td><?=$keterangan?></td>
                <td><?=$grade?></td>
                <td><?=$predikat?></td>
                </tr>

                <?php } ?>

        </tbody>
        <tfoot>
        <tr>
            <?php foreach($hasil_nilai as $hasil => $total){
                ?>
            <th><?= $hasil ?></th>
        <?php    
        }
        ?>
        </tr>
        <tr>
            <?php foreach($hasil_nilai as $hasil => $total){
                ?>
            <th><?= $total ?></th>
        <?php    
        }
        ?>
        </tr>
        </tfoot>
    </table>
    
</body>
</html>
