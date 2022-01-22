<!DOCTYPE html>
<?php
	session_start();
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="mate/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="mate/css/materialize.css">
    <link rel="stylesheet" type="text/css" href="mate/css/icon.css">
	<title>E-LIBRARY</title>
</head>
<body background="img/backg.jpg" style="background-image:no-repeat; ">
	<div class="row">
		<div class="col m6 s12" style="background-color: #fff; padding-bottom: 5px;">
			<div class="login">
				<form action="" method="post">
					  <div class="input-field col s4">
					  	<i class="material-icons prefix">account_circle</i>
		                  <input name="username" type="text" required/>
		                  <label>Username</label>
	                  </div>
				  <div class="input-field col s4">
				  	<i class="material-icons prefix">lock</i>
	                  <label>Password</label>
	                  <input name="password" type="password" required/>
                  </div>
 				<button class="btn green darken-2" style=" margin-top: 2.4%; margin-left: 0%; margin-bottom: 5%;" type="submit" name="login" >Masuk
                </button>
				</form>
				<?php 
				if (isset($_POST['login'])) {
					if ($_SESSION['username'] == $_POST['username'] || $_SESSION['noanggota'] == $_POST['noanggota'] && $_SESSION['password'] == $_POST['password']) {
						$_SESSION['login'] = 1;
						echo "<script>alert('Selamat Datang Di Genius E-LIBRARY !');
						window.location = 'index.php'</script>";
					}
					else{
						echo "<script>alert('Username atau Password Salah');
						window.location = 'login.php'</script>";
					}
				}
				else{

				}
			?>
            <a href="#" style="margin-left: 67%;">Lupa Password ?</a>
            </div>
		</div>
		<div class="col m6 s12" style="background-color: #fff">
			<img src="img/slogan.png" width="87%" style="margin-left: 12%; margin-top: 0.5%;"> 
		</p>
		</div>
		<div class="col m12">
			<div class="col m6 s12">
				<center>
					<img src="img/perpus.png" width="110%" style="margin-top: 20%; margin-left: -7%">
				</center>
			</div>
			<div class="col m5 s12" style="margin-top: 35px;">
					<form action="" method="post" style="background-color: #fff;">
						<h4 style="padding-top: 3%; font-family: lucida;" align="center">DAFTAR</h4>
					<hr>
				        <div class="input-field col s12">
				        	<?php
									$a = mt_rand(1000000,9999999);
				        	 ?>
				          <h6 style="color: black;">NO.ANGGOTA</h6>
				          <input value="<?php echo $a; ?>" name="noanggota" style="color: black;" readonly/>
				        </div>
	                  <div class="input-field col s6">
		                  <input name="namadepan" type="text" class="validate" required/>
		                  <label>Nama Depan</label>
	                  </div>
	                  <div class="input-field col s6">
		                  <input name="namabelakang" type="text" class="validate" required/>
		                  <label>Nama Belakang</label>
	                  </div>
	                  <div class="input-field col s6">
					    <select name="kota">
					      <option value="" disabled selected>Kota</option>
					      <option value="1">Aceh</option>
					      <option value="2">Bogor</option>
					      <option value="3">Depok</option>
					      <option value="4">Jakarta</option>
					      <option value="5">Karawang</option>
					      <option value="6">Palangkaraya</option>
					      <option value="7">Sumba</option>
					      <option value="8">Tangerang</option>
					    </select>
					  </div>
			          <div class="input-field col s6">
			            <input type="date" name="tanggallahir">
			          </div>
				      <div class="input-field col s12">
				          <textarea name="alamat" class="materialize-textarea" class="validate"/></textarea>
				          <label>Alamat</label>
				      </div>
	                  <div class="input-field col s12">
					    <select name="jk">
					      <option value="" disabled selected>Jenis Kelamin</option>
					      <option value="1">Laki-laki</option>
					      <option value="2">Perempuan</option>
					    </select>
					  </div>
	                  <div class="input-field col s6">
		                  <input name="username" type="text" data-length="10" class="validate" required/>
		                  <label>Username</label>
	                  </div>
	                  <div class="input-field col s6">
		                  <input name="password" type="password" data-length="10" class="validate" required/>
		                  <label>Password</label>
	                  </div>
	                  <div class="input-field col s12">
		                  <input name="email" type="email" class="validate" required/>
		                  <label>Email</label>
	                  </div>
	                  <button class="btn yellow darken-4" style=" margin-top: 1%; margin-left: 65%; margin-bottom: 5%;" type="submit" name="submited">Daftar
					    <i class="material-icons right">send</i>
					  </button>
					</form>
					<?php
						if (isset($_POST['submited'])) {
							$_SESSION['noanggota'] = $_POST['noanggota'];
							$_SESSION['namadepan'] = $_POST['namadepan'];
							$_SESSION['namabelakang'] = $_POST['namabelakang'];
							$_SESSION['username'] = $_POST['username'];
							$_SESSION['password'] = $_POST['password'];
							$_SESSION['jk'] = $_POST['jk'];
							$tgl = $_POST['tanggallahir'];

								$date1 = "2018-12-30";
								$date2 = "2005-12-30";
								$date3 = $tgl;

								$diff = abs(strtotime($date1) - strtotime($date2));
								$diff2 = abs(strtotime($date3) - strtotime($date1));

								$years = floor($diff / (365*60*60*24));
								$years2 = floor($diff2 / (365*60*60*24));

							if ($years2 >= $years) {
							echo "<script>alert('Berhasil Mendaftar ! Silahkan Login Terlebih Dahulu.');
					window.location = 'login.php'</script>";
							}else{
								echo "<script>alert('Usia Anda Tidak Memadai Untuk Mendaftar.');
								window.location = 'login.php'</script>";
							}
						}
						?>
			</div>
	</div>
	</div>
</body>
<script src="mate/js/materialize.js"></script>
<script src="mate/js/jquery.js"></script>
<script src="mate/js/materialize.min.js"></script>
<script>  
    $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 60, // Creates a dropdown of 15 years to control year
  });
    $(document).ready(function(){
    $('select').material_select();
    $('input#input_text').characterCounter();
});
</script>
</html>