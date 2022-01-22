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
      <div class="col m8 s12" style="background-color: #414141;">
        <p>PROFILE</p>
          <?php
            if ($_SESSION['jk']=='1') {
              echo "<div class='col m4'>";
                echo "<img src='img/male.jpg' width='100%'>";
              echo "</div>";
              echo "<div class='col m8 s7'>";
                echo "<h5 style='font-size: 15pt; margin-top: -0px; background-color: #fff; padding: 16px;'>";
              echo "Nomor Anggota<br>";
              echo "<b>";  
                echo $_SESSION['noanggota'];
              echo "</b>";
              echo "<br>";
              echo "<br>";
              echo "Nama Anggota<br>";
              echo "<b>"; 
                $namadepan = $_SESSION['namadepan'];
                $namabelakang = $_SESSION['namabelakang'];

                echo "$namadepan"." "."$namabelakang";
              echo "</b>";
              echo "<br><br>";
              echo "</h5>";
              echo "<a href='#' class='waves-effect waves-light btn green darken-3'><i class='material-icons right'>settings</i>Edit</a>
                    <a href='logout.php' Onclick='javascript:return confirm('Anda yakin ingin keluar ?')'; class='waves-effect waves-light btn red darken-3'><i class='material-icons right'>power_settings_new</i>Keluar</a>";
              echo "</div>";
              echo "</div>";
              echo "<div class='col m4 s12' style='background-color: #414141; margin-bottom: 2%;'>
              <center><img src='img/books.png' width='53.8%'></center>
              </div>
              </div>";
            }
            else {
              echo "<div class='col m4'>";
                echo "<img src='img/female.jpg' width='100%'>";
              echo "</div>";
              echo "<div class='col m8 s7'>";
                echo "<h5 style='font-size: 15pt; margin-top: -0px; background-color: #fff; padding: 16px;'>";
              echo "Nomor Anggota<br>";
              echo "<b>";  
                echo $_SESSION['noanggota'];
              echo "</b>";
              echo "<br>";
              echo "<br>";
              echo "Nama Anggota<br>";
              echo "<b>"; 
                $namadepan = $_SESSION['namadepan'];
                $namabelakang = $_SESSION['namabelakang'];

                echo "$namadepan"." "."$namabelakang";
              echo "</b>";
              echo "<br><br>";
              echo "</h5>";
              echo "<a href='#' class='waves-effect waves-light btn green darken-3'><i class='material-icons right'>settings</i>Edit</a>
                    <a href='logout.php' Onclick='javascript:return confirm('Anda yakin ingin keluar ?')';  class='waves-effect waves-light btn red darken-3'><i class='material-icons right'>power_settings_new</i>Keluar</a>";
              echo "</div>";
              echo "</div>";
              echo "<div class='col m4 s12' style='background-color: #414141; margin-bottom: 2%;'>
              <center><img src='img/books.png' width='54.3%'></center>
              </div>
              </div>";
            }
          ?>
  <div class="parallax-container valign-wrapper">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">Semakin aku banyak membaca, semakin aku banyak berfikir, semakin aku banyak belajar, semakin aku sadar bahwa aku tak mengetahui apa pun</h5>
          <br>
          <h5>- Buya Hamka (Seorang Ulama, Aktivis dan Sastrawan Indonesia 1908 - 1981) -</h5>
        </div>
      </div>
    <div class="parallax"><img src="img/bg.jpg" alt="Unsplashed background img 1"></div>
  </div>
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
        <blockquote><img src="img/latest.png" width="30%"></blockquote>
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
            <td><img class="materialboxed" src="img/psikologi.png"></td>
            <td>Psikologi Komunikasi : Sebuah Tinjauan Teoritis dan Perspektif Islam</td>
            <td>2015</td>
            <td>Dr.Suciati S.Sos M.Si</td>
            <td> diawali dengan ruang lingkup psikologi komunikasi sebagai pintu masuk pemahaman.Bab berikutnya, penulis mengajak pemhaca untuk memahami tentang psikologi komunikasi sebagai ilmu yang herusaha untuk memahami perilaku rnanusia dalam berkomunikasi. Dilanjutkan dengan faktor-faktor yang memengaruhi perilaku komunikasi antara lain : sikap, berpikir, persepsi, motivasi, emosi, dan kepribadian. Dua bab terakhir membahas tentang bidang-bidang komunikasi yang mengimplementasikan konsep-konsep psikologi yaitu komunikasi terapeutik dan komunikasi persuasif.</td>
            <td>
            <a href="psikologi.php" class="waves-effect waves-light btn grey darken-3"><i class="material-icons center">book</i></a>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td><img class="materialboxed" src="img/antariksa.png"></td>
            <td>Ilmu Kebumian dan Antariksa (Edisi Revisi)</td>
            <td>2013</td>
            <td>Bayong Tjasyono HK</td>
            <td>Indonesia adalah negeri yang kaya akan sumber daya alam. Oleh karena itu, sangatlah penting ilmu kebumian dikembangkan di Indonesia. Apalagi negeri Indonesia bisa dikatakan sebagai laboratorium kebumian yang paling hebat dan bagus untuk dapat mengeksplorasi dan mengeksploitasi sumber-sumber daya alam yang ada di Indonesia.
            Buku Ilmu Kebumian dan Antariksa ini disusun berdasarkan pengalaman mengajar di beberapa perguruan tinggi di Indonesia. Buku ini terutama ditujukan untuk mata kuliah IPBA, Geosains, Meteorologi, Klimatologi, Sains Atmosfer, Mikrofisika Awan dan para guru bidang IPA. Namun tidak menutup kemungkinan buku ini dapat dipakai oleh mahasiswa dari program studi atau bidang lain, misalnya bidang geografi, geofisika, geografi, ilmu kebumian, kelautan, lingkungan, dan oseanografi.</td>
           <td>
            <a href="bumi.php" class="waves-effect waves-light btn grey darken-3"><i class="material-icons center">book</i></a>
            </td>
          </tr>
          <tr>
            <td>4</td>
            <td><img class="materialboxed" src="img/english.png"></td>
            <td>English For Specific Purpose</td>
            <td>2014</td>
            <td>TIM LC UMM</td>
            <td>English for Communication Science is written to fulfil students' need in learning English for Specific Purposes. This book is designed to  provide an opportunity for the students to develop their English skills more communicatively and meaningfully.
            It consists of twenty eight units. Each unit presents reading, writing, and speaking sections. Reading section mainly consists of pre-reading, reading comprehension, and vocabulary excercises related to the topic of the text. However, some reading sections have additional authentic text and its excercise. In writing section, some stucture and sentence patterns are presented from the easiest to the most difficult excercises. Meanwhile, in speaking section, students are provided with models and examples followed by practical activities presented in various ways. The materials have been arranged and graded in accordance with students' language levels.</td>
             <td>
            <a href="english.php" class="waves-effect waves-light btn grey darken-3"><i class="material-icons center">book</i></a>
            </td>
          </tr>
          <tr>
            <td>5</td>
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
            <td>6</td>
            <td><img class="materialboxed" src="img/web.png"></td>
            <td>Easy & Simple - Web Programming</td>
            <td>2016</td>
            <td>Rohi Abdulloh</td>
            <td>Kata siapa pemrograman website itu sulit? Buku ini akan memberikan panduan mempelajari pemrograman website dengan cara yang mudah. Setiap bahasa pemrograman yang harus dikuasai dibahas menjadi satu dalam sebuah proyek membuat website responsive.
            Buku ini ditulis dengan memperhatikan penulisan skrip yang rapi, pengelompokan file-file sesuai fungsinya, penamaan variabel, nama folder, nama file, dan nama tabel pada database yang konsisten agar mudah dipahami oleh pembaca yang baru belajar pemrograman website sekalipun. Dibahas pula pembuatan template dengan bootstrap sehingga tampilan website selalu menyesuaikan layar ketika dibuka di tablet dan smartphone.</td>
           <td>
            <a href="web.php" class="waves-effect waves-light btn grey darken-3"><i class="material-icons center">book</i></a>
            </td>
          </tr>
          <tr>
            <td>7</td>
            <td><img class="materialboxed" src="img/sejarah.png"></td>
            <td>Sejarah Indonesia</td>
            <td>2008</td>
            <td>M.C. Ricklefs</td>
            <td>Terdapat tiga unsur fundamental menjadi perekat bagi periode historis itu. Satu, unsur kebudayaan dan keberagamaan: islamisasi Indonesia yang dimulai sejak tahun 1200 dan berlanjut sampai sekarang. Dua, unsur topik: keadaan saling memengaruhi antara orang Indonesia dan orang Barat yang masih berlangsung hingga sekarang sejak tahun 1500. Tiga, unsur historiografi: sumber-sumber primer bagi sebagian besar periode ini ditulis dalam bahasa-bahasa Indonesia modern (Jawa, Melayu, dll., bukan dalam bahasa Jawa Kuno atau Melayu Kuno) dan bahasa-bahasa Eropa. Karena roda sejarah terus berputar, Ricklefs terus memperbarui bukunya. Segala hal dalam periode sejak 1999 telah ditulis ulang secara substansial atau sama sekali baru. Kehadiran versi Indonesia ini terasa semakin lengkap karena pengarangnya khusus menuliskan perkembangan Indonesia sejak pemilu 2004 sampai tragedi Monas pada 1 Juni 2008.</td>
           <td>
            <a href="sejarah.php" class="waves-effect waves-light btn grey darken-3"><i class="material-icons center">book</i></a>
            </td>
          </tr>
          <tr>
          <tr>
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
        $('.dropdown-trigger').dropdown();
      $('.parallax').parallax();
</script>
</html>
<?php
}else{
  echo "<script>alert('Silahkan Login Terlebih Dahulu');
window.location = 'login.php'</script>";
}
?>