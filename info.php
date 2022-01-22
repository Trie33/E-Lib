<!DOCTYPE html>
<?php
session_start();
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
  if ($_SESSION['login'] > 0) {
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="mate/css/materialize.css">
    <link rel="stylesheet" type="text/css" href="mate/css/style.css">
    <link rel="stylesheet" type="text/css" href="mate/css/icon.css">
	<title>Info Genius E-Library</title>
</head>
<body>   
      <?php 
      include "nav.html";
      ?>      
			<div class="col m12">
              <div class="slider">
                <ul class="slides">
                  <li>
                    <img src="img/slide.jpg" class="responsive-img" width="200%"> <!-- random image -->
                    <div class="caption center-align">
                      <br>
                      <h1 class="white-text" style="font-family: ">SELAMAT DATANG <br> DI GENIUS E-LIBRARY</h1>
                    </div>
                  </li>
                  <li>
                    <img src="img/slide.jpg" class="responsive-img"> <!-- random image -->
                    <div class="caption left-align">
                      <br>
                      <br>
                      <h3 class="light white-text text-lighten-3">"Untuk Saat ini peminjaman buku belum tersedia di layanan kami"</h3>
                      <hr>
                    </div>
                  </li>
                  <li> 
                    <img src="img/slide.jpg" class="responsive-img"> <!-- random image -->
                    <div class="caption left-align">
                      <h3 class="light white-text text-lighten-3">
                      "PERINGATAN!!! : Dilarang keras menggunakan situs ini untuk tujuan plagiatisme. Jika diketahui ada plagiatisme, pelaku akan dikenakan sanksi."</h3>
                      <hr>
                    </div>
                  </li>
                </ul>
              </div>
              <br>
              <div class="row">
                <div class="col s12">
                  <blockquote><img src="img/info.png" width="30%"></blockquote><b></b>
                  <hr>
                  <div class="container">
                    <div class="col s12">
                      <b style="font-size: 13pt">E-library adalah sebuah perpustakaan yang menyediakan kemudahan dalam mengakses bagi penggunanya yang didalamnya memiliki sumber daya staf ahli yang berkompeten di bidangnya. Belum lagi koleksi dalam e-library ini memiliki berbagai macam model informasi sehingga akan sangat membantu mendapatkan informasi bahkan untuk mereka yang terkendala jarak dan menggunakan sistem e-library ini akan memudahkan mereka karena dapat menggunakan jaringan internet dalam pengaplikasiannya.<br><br>
                      Manfaat e-library sebagai suatu layanan baru di perpustakaan bagi komunitas pengguna perpustakaan adalah sebagai berikut:<br><br>
                    <ul>
                      <li>E-library merupakan layanan yang dapat membantu pada inisiatif pembelajaran yang terintgrasi.</li><br>
                      <li>E-library merupakan sumber yang sempurna untuk mengirmkan teks lengkap dan referensi penting mutimedia, mudah 
                      untuk digunakan dalam penelitian, serta dalam mengerjakan tugas yang diberikan oleh guru.</li><br>
                      <li>Mahasiswa menemukan jawaban yang mereka butuhkan lebih dari 2000 majalah, surat kabar, buku-buku dan transkrip 
                      teks lengkap: termasuk ribuan peta, gambar, website penddik dari pusat pekerjaan rumah dan file audio/vidio.</li><br>
                      <li>Dosen dan pustakawan bekerja sama untuk membangun mata rantai yang kuat terhadap isi yang terpilih.</li><br> 
                      Menciptakan daftar bacaan dengan halaman-halaman topik, pelajaran-peajaran dan halaman minat dan kepentingan 
                      komuitas perguruan tinggi.</li<br>
                      <li>Mengurangi terjadinya pengulangan kegiatan (plagiarism).</li><br>
                      <li>Penyebaran dan akses informasi akan lebih cepat tanpa batas waktu dan ruang, karena tidak terikat secara fisik.</li><br>
                      <li>bersifat lebih luas dari katalog induk dunia (universal main catalogue) dan mampu Melakukan kerjasama dalam  
                      jejaring informasi (information networking).</li></ul></b><br><br>
                    </div>
                  </div>
                </div>
            </div>
</body>
<?php include 'footer.html' ?>
    </div>
  </center>
</body>
<script src="mate/js/materialize.js"></script>
<script src="mate/js/jquery.js"></script>
<script src="mate/js/materialize.min.js"></script>
<script>
      $(".button-collapse").sideNav();
          $('.dropdown-trigger').dropdown();
        $(document).ready(function(){
          $('.slider').slider({full_width: true});
        });
</script>
</html>
<?php
}else{
  echo "<script>alert('Silahkan Login Terlebih Dahulu');
window.location = 'login.php'</script>";
}
?>