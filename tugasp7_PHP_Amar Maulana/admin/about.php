<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 7 Javascript</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<?php
	$about = "Saya lulus SMA pada tahun 2020 di SMA Alfacentauri Bandung dan pada saat itu saya tertarik memasuki bidang IT karena saya dari SMP sudah belajar otodidak tentang program-progran yang ada di komputer, maka dari itu saya mengambil jurusan teknik komputer. Saya tertarik juga pada pemrograman web dikarenakan web itu sangat luas cakupannya dan selalu ingin belajar tentang web dari front end maupun backend. Tetapi peminatan di jurusan saya tidak ada pemrograman web.";
	?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
				 
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="navbar-nav">
						<li class="nav-item active">
							 <a class="nav-link" href="about.php">Tentang Saya <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							 <a class="nav-link" href="contact.php">Hubungi Saya</a>
						</li>
					</ul>

				</div>
			
			<h3 class="text-left">
				Tentang saya
			</h3>
            <p><?= $about ?> </p>
			
		</div>
	</div>
    <br>
    <br>
 
	

</body>
</html>
