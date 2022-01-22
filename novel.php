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
  <title>E-LIBRARY</title>
</head>
<body>
  <?php 
    include "nav.html";
  ?>  
    <div class="row">
      <div class="col m12 s12" style="margin-top: 10px;">
        <div class="search">  
          Anda dapat melakukan pencarian informasi ke seluruh terbitan yang telah kami unggah melalui penelusuran di bawah ini.
            <nav>
              <div class="nav-wrapper">
                <form>
                  <div class="input-field" style="background-color: #414141;">
                    <input id="search" type="search" required>
                    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                    <i class="material-icons">close</i>
                  </div>
                </form>
              </div>
            </nav>
          *Jika penulusuran tidak ditemukan, pastikan <i>keyword</i> anda benar atau informasi yang anda cari belum tersedia di website kami.
        </div>
        <br>
        <blockquote><img src="img/novel.png" width="30%"></blockquote>
        <center>
      <table class="highlight responsive-table">
        <thead>
          <tr>
              <th data-field="no" width="5%">No</th>
              <th data-field="cover" width="15%">Sampul</th>
              <th data-field="name" width="20%">Nama Buku</th>
              <th data-field="tahun" width="15%">Tahun Terbit</th>
              <th data-field="pengarang" width="15%">Nama Pengarang</th>
              <th data-field="sinopsis" width="25%">Sinospis</th>
              <th data-field="read" width="10%">Baca</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td><img class="materialboxed" src="img/sirkuspohon.jpg"></td>
            <td>Sirkus Pohon</td>
            <td>2017</td>
            <td>Andrea Hirata</td>
            <td>sebuah keluarga dengan 5 bersaudara. Tokoh utamanya bernama Sobrinudin. Dia adalah anak ke-4 dari 5 bersaudara itu. Kakak-kakaknya adalah orang sukses yang mempunyai pekerjaan tetap. Dan adiknya adalah perempuan yang lulus secara cemerlang tingkat SMA. Sedangkan Sobrinudin sendiri adalah pengangguran. Jangankan pekerjaan, ijazah saja hanya ijazah SD. Ia hanya lulusan SD yang putus sekolah saat duduk di bangku kelas 2 SMP. Itu semua berawal dari pertemanannya dengan Taripol, sahabat kecilnya. Ternyata Taripol adalah ketua geng atau mafia. Ia menjadi buronan para polisi.
            Karena namanya telah ternodai setelah terlibat kasus dengan sahabatnya, Sobrinudin pun harus mencari makan dan tempat tinggal. Ia membutuhkan sebuah pekerjaan tetap. Namun tak ada yang mau menerimanya, namanya telah tercemar sebagai koplotan pencuri.</td>
            <td>
            <a href="sirkus.php" class="waves-effect waves-light btn grey darken-3"><i class="material-icons center">book</i></a>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td><img class="materialboxed" src="img/dilan.png"></td>
            <td>Dilan : Dia adalah Dilanku Tahun 1990</td>
            <td>2014</td>
            <td>Pidi Baiq</td>
            <td>kisah Milea, siswa pindahaan dari Jakarta yang bertemu Dilan di SMA barunya di Bandung. Dengan latar waktu tahun 1990, cerita ini punya modal positif untuk menonjol di tengah generasi remaja masa kini (meski bukan itu yang jadi poin utama Pidi Baiq menulis cerita ini). Alur diawali dengan perkenalan dari Milea masa kini yang telah menikah dan tinggal di Jakarta. Di suatu malam, ia bernostalgia dan mulai menuturkan kisah berkesannya bersama Dilan.</td>
           <td>
            <a href="dilan.php" class="waves-effect waves-light btn grey darken-3"><i class="material-icons center">book</i></a>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td><img class="materialboxed" src="img/bintang.jpg"></td>
            <td>Bintang</td>
            <td>2017</td>
            <td>Tere Liye</td>
            <td>Mereka harus menemukan pasak bumi yang akan di runtuh kan oleh sekretaris Dewan kota. Oleh karena itu, Raib, Seli dan Ali melibatkan orang-orang yang berasal dari klan Bulan dan Matahari. Petualangan kali ini dibantu oleh Miss Selena sebagai pemimpin rombongan, juga 10 anggota pasukan bayangan dan pasukan matahari.</td>
           <td>
            <a href="bintang.php" class="waves-effect waves-light btn grey darken-3"><i class="material-icons center">book</i></a>
            </td>
          </tr>
          <tr>
            <td>4</td>
            <td><img class="materialboxed" src="img/dear.jpg"></td>
            <td>Dear Nathan</td>
            <td>2016</td>
            <td>Erisca Febriani</td>
            <td>Salma merupakan seorang murid pindahan di SMA. Suatu pagi ia terlambat datang ke upacara bendera dan seorang murid bernama Nathan, yang dikenal sebagai yang hobi tawuran, menyelamatkannya dari hukuman. Salma, yang bertekad untuk selektif memlilih teman, berusaha menjauhi Nathan, namun Nathan justru membuat heboh satu sekolah dengan terang-terangan mengejar cinta salma.</td>
           <td>
            <a href="dear.php" class="waves-effect waves-light btn grey darken-3"><i class="material-icons center">book</i></a>
            </td>
          </tr>
		   <tr>
            <td>5</td>
            <td><img class="materialboxed" src="img/harry.jpg"></td>
            <td>Harry Potter and The Deathly Hallows</td>
            <td>2007</td>
            <td>J.K Rowling</td>
            <td>Ketika Harry Potter tepat berusia 17 tahun maka mantra perlindunagan dari ibunya akan lenyap, sehingga voldemort dan para pelahap maut berusaha menangkap Harry Potter pada saat ia akan dipindahkan dari Privet Drive ke The Burrow yang sudah diberi mantra-mantra perlindungan.</td>
           <td>
            <a href="harry.php" class="waves-effect waves-light btn grey darken-3"><i class="material-icons center">book</i></a>
            </td>
          </tr>
        </tbody>
      </table>
      <ul class="pagination">
        <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
        <li class="active"><a href="#!">1</a></li>
        <li class="waves-effect"><a href="#!">2</a></li>
        <li class="waves-effect"><a href="#!">3</a></li>
        <li class="waves-effect"><a href="#!">4</a></li>
        <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
      </ul>
      </div>
</div>
  <?php include 'footer.html' ?>
    </div>
  </center>
</body>
<script src="mate/js/materialize.js"></script>
<script src="mate/js/jquery.js"></script>
<script src="mate/js/materialize.min.js"></script>
<script>
      $(".button-collapse").sideNav();
      $('.parallax').parallax();
</script>
</html>
<?php
}else{
  echo "<script>alert('Silahkan Login Terlebih Dahulu');
window.location = 'login.php'</script>";
}
?>