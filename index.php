<?php include("db_conect.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CofeePan</title>
  <link rel="stylesheet" href="./style.css">

  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- booststrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
  <header>
    <div class="wrapper">
      <div class="logo">
        <h1>CoffePan</h1>
      </div>
      <nav>
        <ul>
          <li><a href="#home" id="homeLink">Home</a></li>
          <li><a href="#about" id="aboutLink">About</a></li>
          <li><a href="#menu" id="menuLink">Menu</a></li>
          <li><a href="#Komentar" id="komentarLink" class="tbl-biru">Komentar</a></li>
        </ul>
      </nav>

      <script>
        // Fungsi untuk menanggapi klik pada tautan
        function handleLinkClick(event) {
          // Menghapus kelas "active" dari semua tautan
          document.querySelectorAll('nav a').forEach(link => {
            link.classList.remove('active');
          });

          // Menambahkan kelas "active" ke tautan yang diklik
          event.target.classList.add('active');
        }

        // Menambahkan penangan klik ke setiap tautan
        document.getElementById('homeLink').addEventListener('click', handleLinkClick);
        document.getElementById('aboutLink').addEventListener('click', handleLinkClick);
        document.getElementById('menuLink').addEventListener('click', handleLinkClick);
        document.getElementById('komentarLink').addEventListener('click', handleLinkClick);
      </script>
    </div>
  </header>
  <main>

    <!-- Home -->
    <section class="home" id="home">
      <div class="container">
        <div class="container-text">
          <h3>Meminum Coffe Dengan Nikmat Dengan Membeli di CoffePan</h3>
        </div>
      </div>
    </section>

    <!-- About -->
    <section class="about" id="about">
      <div class="container">
        <h2>About</h2>
        <p>Selamat datang di CoffePan, destinasi terdepan bagi pecinta kopi. Kami menyajikan biji kopi berkualitas tinggi dari petani global. Dengan komitmen pada keberlanjutan, kami hadirkan pengalaman kopi yang autentik dan ramah lingkungan. Temukan keunikan dan kelezatan kopi bersama kami di CoffePan.</p>
      </div>
      <div class="container-box">
        <div class="box">
          <h1>Visi</h1>
          <p style="text-align:justify">Menjadi pionir dalam membentuk kebiasaan positif pecinta kopi, kami berharap menjadikan toko biji kopi online kami sebagai sumber utama bagi pengalaman kopi yang mendalam. Dengan menyajikan berbagai biji kopi berkualitas tinggi, kami bercita-cita menjadi pusat inspirasi dan pengetahuan bagi konsumen yang menghargai keunikan cita rasa kopi. Visi kami adalah menciptakan komunitas yang terhubung melalui kecintaan pada kopi, merayakan keragaman varietas kopi, dan membangun kesadaran akan asal-usul dan proses kopi.</p>
        </div>
        <div class="box">
          <h1>Misi</h1>
          <p style="text-align:justify">Kami berkomitmen untuk menyediakan biji kopi berkualitas tinggi dari petani lokal dan berkelanjutan secara global, mendukung keadilan dan kesejahteraan petani. Melalui edukasi, kami ingin meningkatkan pemahaman pelanggan tentang proses produksi kopi, memastikan transparansi dalam rantai pasok, dan mengurangi jejak lingkungan kami. Kami menawarkan layanan pelanggan yang unggul, berinovasi dalam pengalaman belanja online, dan terus berupaya menciptakan perubahan positif dalam industri kopi. Misi kami adalah membawa keceriaan kopi kepada setiap pelanggan, mendorong keberlanjutan, dan menginspirasi komunitas kopi global.</p>
        </div>
      </div>
    </section>

    <!-- menu -->
    <section class="menu" id="menu">
      <h2>Menu</h2>
      <div class="row">
        <div class="box">
          <img src="./imgs/download.jpeg" alt="">
          <h4>Kopi arabika</h4>
          <p style="text-align:justify">Kopi arabika, juga dikenal sebagai kopi Arab, kopi semak Arab, atau kopi gunung, adalah spesies
            dari genus Coffea. Spesies
            ini diyakini sebagai spesies kopi pertama yang dibudidayakan, dan merupakan kultivar dominan,
            mewakili sekitar 60% dari produksi kopi global.</p>
        </div>
        <div class="box">
          <img src="imgs/kopi jawa.jpg" alt="">
          <h4>Kopi Jawa</h4>
          <p style="text-align:justify">Kopi jawa memiliki kekentalan yang tidak terlalu tinggi atau biasa dikatakan memiliki tingkat
            kekentalan yang medium. Kopi jawa memiliki cita rasa yang khas.
            Dengan kelebihan yang dimilikinya ini, maka orang sering mengatakan jika kopi jawa merupakan
            salah satu rajanya kopi.
          </p>
        </div>
        <div class="box">
          <img src="imgs/luwak.jpg" alt="">
          <h4>Kopi Luwak</h4>
          <p style="text-align:justify">Kopi luwak adalah biji kopi yang diambil dari sisa kotoran Luwak
            kelapa. Biji kopi ini memiliki rasa yang berbeda setelah dimakan dan melewati saluran
            pencernaan luwak. Kemasyhuran kopi ini di kawasan Asia Tenggara telah lama diketahui,tapi
            baru terkenal luas pada tahun 1980.</p>
        </div>
        <div class="box">
          <img src="imgs/robusta .jpg" alt="">
          <h4>Kopi Robusta</h4>
          <p style="text-align:justify">Kopi Robusta adalah jenis kopi yang memiliki rasa yang kuat dan pahit dengan kandungan kafein
            yang tinggi. kopi Robusta memiliki
            manfaat bagi kesehatan seperti menjaga kesehatan jantung, meningkatkan konsentrasi dan energi,
            serta meningkatkan metabolisme..</p>
        </div>
        <div class="box">
          <img src="imgs/toraja.jpg" alt="">
          <h4>Kopi Toraja</h4>
          <p style="text-align:justify">Kopi Toraja salah satu varian populer yang memiliki kualitas terbaik di Indonesia. Kopi
            yang berasal dari tanah Toraja, Sulawesi Selatan ini memiliki rasa yang khas dan karakter yang
            unik. Bernama latin Celeber Kalosi, kopi Toraja telah dikenal oleh para pencinta kopi di seluruh
            dunia.</p>
        </div>
        <div class="box">
          <img src="imgs/gayo aceh.jpg" alt="">
          <h4>Kopi Gayo Aceh</h4>
          <p style="text-align:justify">Kenikmatan Kopi Gayo dimulai dari rasanya yang kuat dan berkarakter. Kopi Gayo memiliki rasa yang
            tidak pahit dan memiliki keasaman yang rendah dan memiliki sedikit sentuhan rasa manis Kopi Gayo
            memberikan sentuhan nutty cenderung buttery dengan aroma rempah yang wangi.</p>
        </div>
        <div class="box">
          <img src="imgs/kopi luwak liberika.jpg" alt="">
          <h4>Kopi Liberika</h4>
          <p style="text-align:justify">kopi Luwak Liberika menghasilkan minuman kopi yang sangat langka dan
            eksklusif. Dengan proses fermentasi dalam perut luwak dan karakteristik unik dari varietas
            Liberika, kopi Luwak Liberika mungkin memberikan profil rasa yang sangat khas sehingga menciptakan cita rasa</p>
        </div>
        <div class="box">
          <img src="imgs/kintamani.jpeg" alt="">
          <h4>Kopi Kintamani</h4>
          <p style="text-align:justify">Kopi Kintamani berasal dari Bali, ditanam di ketinggian 1.000-1.500 meter. Varietas Arabika seperti Typica, Bourbon, dan Catuai umum. Proses pengolahan alami/semi-alami. Rasanya lembut, seimbang, keasaman moderat, dengan nuansa buah-buahan dan bunga. Kualitas tinggi, sering memenangkan penghargaan internasional.

.</p>
        </div>
      </div>
    </section>

    <!-- Feed Back -->
    <section id="Komentar" style="">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Komentar</h2>
          </div>
        </div>
        <form action="./process_feedback.php" method="post">
          <div class="row justify-content-center">
            <div class="col-md-6">
              <div class="mb-3">
                <label for="Name" class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Isikan Nama Anda">
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Isikan Email Anda">
                <div id="emailHelp" class="form-text">
                </div>
              </div>

              <div class="mb-3">
                <label for="Komentar" class="form-label">Saran/Komentar</label>
                <textarea class="form-control" name="message" id="Komentar" placeholder="Isikan Komentar Anda" rows="3"></textarea>
              </div>
              <button type="submit" name="kirim" class="btn btn-primary">Kirim</button>
            </div>
          </div>
        </form>
      </div>

      <!-- Komentar -->
      <div class="komen-container" style="display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 50px; ">
        <div class="row" style="display: flex; flex-direction: row; width: 100%; flex-wrap: wrap; ">
          <h2 style="text-align: center;">List Komentar</h2>
          <?php
          $query = mysqli_query($conn, "SELECT * FROM feedback1");
          while ($row = mysqli_fetch_assoc($query)) {
          ?>
            <div class="box-komen" style="padding: 10px; background-color: #fff; border-radius: 10px; margin: 10px 0; width: 48%; margin: 1% 1%; ">
              <div class="komen-header">
                <p>
                  Name: <?php echo $row["name"] . "<br>"; ?>
                </p>
                <p>
                  Date: <?php echo $row["created_at"] . "<br>"; ?>
                </p>
              </div>
              <div class="isi-komen">
                <p id="message">
                  Message: <?php echo $row["message"] . "<br>"; ?>
                </p>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>

      <!-- Footer -->
      <section class="contact" id="contact">
        <h2>CoffePan</h2>
        <div class="row">
          <div class="box">
            <h3>Contact</h3>
            <p style="margin-bottom: 0px;"><i class="fa-brands fa-whatsapp" style="margin-right: 5px;"></i>081398080650</p>
            <p style="margin-bottom: 0px;"><i class="fa-brands fa-whatsapp" style="margin-right: 5px;"></i>089517036249</p>
          </div>
          <div class="box">
            <h3>Social</h3>
            <div class="social">
              <i class="fa-brands fa-instagram" style="margin-right: 5px;"></i><a href="https://instagram.com">Instagram</a>
            </div>
            <div class="social">
              <i class="fa-brands fa-facebook" style="margin-right: 5px;"></i><a href="https://facebook.com">facebook</a>
            </div>
          </div>
        </div>
      </section>
  </main>
  <footer>
    <p>
      &copy; 2023. <b>CofeePan Shop</b>
    </p>
  </footer>
  <script>
    var sensor = ["anjing", "babi", "anjir", "tai", "bangsat", "titit", "memek", "kontol", "ayam", "puki", "pemai", "asu", "pepek", "anjay", "memek", "tete", "tetek", "bjir", "njir"]

    function replaceTextInElements(elements) {
      elements.forEach(function(element) {
        // Mengambil teks dari elemen
        var originalText = element.textContent;

        // Mengganti kata-kata menggunakan ekspresi reguler dan fungsi penggantian kustom
        var newText = originalText.replace(new RegExp(sensor.join('|'), 'gi'), function(match) {
          // Menghasilkan jumlah asterisk yang sesuai dengan panjang kata yang disensor
          return '*'.repeat(match.length);
        });

        // Menetapkan teks yang telah diganti kembali ke elemen
        element.textContent = newText;
      });
    }

    // Mengambil semua elemen <p> dengan id="message"
    var messageElements = document.querySelectorAll('p#message');

    // Mengganti kata-kata dalam elemen-elemen yang dipilih
    replaceTextInElements(messageElements);
  </script>
  <script src="https://unpkg.com/@sidsbrmnn/scrollspy@1.x/dist/scrollspy.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
</body>

</html>