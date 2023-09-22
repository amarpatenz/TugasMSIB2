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
$profile = "Saya kelahiran provinsi Cilacap yang merantau ke Bandung dengan orang tua saya untuk menimba ilmu di Bandung, saya berasal dari Universitas Penddidikan Indonesia dengan mengambil jurusan teknik komputer.";
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-expand-lg navbar-light bg-light static-top navbar-dark bg-dark">
				 
				
				</button> <a class="navbar-brand" href="#">Profile</a>
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
			</nav>
            <br>
            <br>
            <br>
			<h3 class="text-left">
				Halo saya Amar Maulana
			</h3>
            <p> <?= $profile ?> </p>
			
		</div>
	</div>
    <br>
    <br>
 
	

</body>
</html>