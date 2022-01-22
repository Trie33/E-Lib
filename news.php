<!DOCTYPE html>
<?php
session_start();
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
  if ($_SESSION['login'] > 0) {
?>
<html>
<head>
	<title>Berita Genius E-Library</title>
</head>
    <link rel="stylesheet" type="text/css" href="mate/css/materialize.css">
    <link rel="stylesheet" type="text/css" href="mate/css/icon.css">
<body>
      <?php 
      include "nav.html";
      ?>  
    <div class="row">
    	
    	<?php
	for ($i=1; $i <=6 ; $i++) { ?>
			<div class="container">
				<div class="col m6 s12" style="background-color: #414141; color:#fff; margin-top:20px;  border-right:solid 10px white; ; border-left:solid 10px white;">
					<div class="berita">
						<div class="card">
							<div class="card-image">
								<img src="img/berita.jpg" height="200%">
							</div>
							<div class="card-content" style="background-color: #414141;">
							<h5> Biasakan Baca Buku 5 Menit Setiap Hari agar Bahagia </h5>
							<hr>
					    	<br>
								<p>Kebiasan baca buku memang sulit dilakukan, terutama bagi mereka yang tidak biasa. Di Indonesia sendiri, tingkat membaca pun juga masih terbilang rendah. Namun, tahukah Anda bahwa sesungguhnya terbiasa baca buku memiliki manfaat bagi kesehatan?................... </p>
					    	<a href="#">Baca Selengkapnya</a>
					    	</div>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
    </div>
      <?php 
      include "footer.html";
      ?>  
</body>
<script src="mate/js/materialize.js"></script>
<script src="mate/js/jquery.js"></script>
<script src="mate/js/materialize.min.js"></script>
<script>
      $(".button-collapse").sideNav();
</script>
</html>
<?php
}else{
  echo "<script>alert('Silahkan Login Terlebih Dahulu');
window.location = 'login.php'</script>";
}
?>