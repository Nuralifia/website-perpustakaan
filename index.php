<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman Buku Online</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="<?= base_url() ?>/projek/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header>

<a href="#" class="logo"><i class="fas fa-seedling"></i>Perpustakaan</a>

<nav class="navbar">
    <ul>
        <li><a href="#home">home</a></li>
        <li><a href="#about">about</a></li>
        <li><a href="projek/fpdf/fpdf_data.php">stok</a></li>
        <li><a href="projek/data/index.php">Peminjaman</a></li>
        <li><a href="#donate">Saran</a></li>
        <li><a href="#post">Refrensi</a></li>
    </ul>
</nav>

<div class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

<div class="content">

    <h1>Peminjaman Buku Online</h1>
    <p>Web ini merupakan tempat sarana dalam peminjaman buku online, untuk mempermudah dalam kegiatan peminjaman buku di perpustakaan</p>
    <a href="projek/login.php"><button class="btn">Lainnya</button></a>

</div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

<h1 class="heading"> <i class="fas fa-quote-left"></i> about us <i class="fas fa-quote-right"></i> </h1>

<div class="row">

    <div class="image">
        <img src="projek/images/1.jpg" alt="">
    </div>

    <div class="content">
        <h3>Tentang Website Peminjaman Buku Di Perpustakaan Sekolah</h3>
        <p>Website peminjaman buku di perpustakaan sekolah ini di buat untuk mempermudah dalam pendistribusian buku, dan mempermudah dalam mendata buku apabila terjadi peminjaman buku di sekolah tersebut.</p>
        <p>website ini di buat karena keresahan tentang proses peminjaman buku yang masih di data dengan cara manual yaitu dengan mencatatnya di buku catatan, cara itu masih belum efisien. maka kami menghadirkan cara cepat dalam peminjaman buku di perpustakaan sekolah </p>
        <a href="#"><button class="btn">learn more</button></a>
    </div>

    


</section>

<!-- service section ends -->

<!-- project section starts  -->

<section class="project" id="project">

<h1 class="heading"> <i class="fas fa-quote-left"></i> Tampilan Perputakaan <i class="fas fa-quote-right"></i> </h1>

<div class="box-container">

    <div class="box">
        <img src="projek/images/2.jpg" alt="">
        <div class="icons">
            <a style="--i:1;" href="#" class="fas fa-heart"></a>
            <a style="--i:2;" href="#" class="fas fa-share"></a>
            <a style="--i:3;" href="#" class="fas fa-comment"></a>
        </div>
    </div>

    <div class="box">
        <img src="projek/images/3.jpg" alt="">
        <div class="icons">
            <a style="--i:1;" href="#" class="fas fa-heart"></a>
            <a style="--i:2;" href="#" class="fas fa-share"></a>
            <a style="--i:3;" href="#" class="fas fa-comment"></a>
        </div>
    </div>

    <div class="box">
        <img src="projek/images/4.jpg" alt="">
        <div class="icons">
            <a style="--i:1;" href="#" class="fas fa-heart"></a>
            <a style="--i:2;" href="#" class="fas fa-share"></a>
            <a style="--i:3;" href="#" class="fas fa-comment"></a>
        </div>
    </div>

    <div class="box">
        <img src="projek/images/5.jpg" alt="">
        <div class="icons">
            <a style="--i:1;" href="#" class="fas fa-heart"></a>
            <a style="--i:2;" href="#" class="fas fa-share"></a>
            <a style="--i:3;" href="#" class="fas fa-comment"></a>
        </div>
    </div>

    <div class="box">
        <img src="projek/images/8.jpg" alt="">
        <div class="icons">
            <a style="--i:1;" href="#" class="fas fa-heart"></a>
            <a style="--i:2;" href="#" class="fas fa-share"></a>
            <a style="--i:3;" href="#" class="fas fa-comment"></a>
        </div>
    </div>

    <div class="box">
        <img src="projek/images/9.jpg" alt="">
        <div class="icons">
            <a style="--i:1;" href="#" class="fas fa-heart"></a>
            <a style="--i:2;" href="#" class="fas fa-share"></a>
            <a style="--i:3;" href="#" class="fas fa-comment"></a>
        </div>
    </div>

</div>

</section>

<!-- project section ends -->

<!-- donate section starts  -->

<section class="donate" id="donate">

<h1 class="heading"> <i class="fas fa-quote-left"></i> saran <i class="fas fa-quote-right"></i> </h1>

<div class="video-container">
    <video src="projek/images/vidio.MP4" loop autoplay muted></video>
</div>

<div class="form-container">

    <form action="">

        <div class="inputBox">
            <input type="text" id="title" name="title" placeholder="first name">
            <input type="text" id="body" name="body" placeholder="last name">
        </div>

        <div class="inputBox">
            <input type="email" placeholder="enter your email">
            
        </div>

        <textarea name="" id="" cols="30" rows="10" placeholder="message"></textarea>

        <input type="submit" value="Kirim Sekarang" name="send" class="btn">

        <div id="show"></div>

    </form>



    





</div>

</section>

<!-- donate section ends -->

<!-- post section starts  -->

<section class="post" id="post">

<h1 class="heading"> <i class="fas fa-quote-left"></i> Refrensi Buku <i class="fas fa-quote-right"></i> </h1>

<div class="box-container">

    <div class="box">
        <img src="projek/images/7.jpg" alt="">
        <div class="content">
            <span> <i class="fas fa-calendar"></i> jan 2, 2021 </span>
            <h3>Buku Sekolah Digital</h3>
            <p>Buku Sekolah Digital (BSD) adalah representasi dari Buku Sekolah Elektronik yang merupakan program dari Departemen Pendidikan Nasional Indonesia.</p>
            <a href="http://buku.pendidikan.id/index.html"><button class="btn">read more</button></a>
        </div>
    </div>

    <div class="box">
        <img src="projek/images/3.jpg" alt="">
        <div class="content">
            <span> <i class="fas fa-calendar"></i> jan 3, 2021 </span>
            <h3>Buku-buku Referensi untuk Anak SMK</h3>
            <p>Buku-buku Pengayaan dan Referensi untuk SMK Jurusan Tata Boga yang dapat anda jadikan sebagai refrensi.</p>
            <a href="http://www.perpustakaansekolah.com/2018/04/buku-buku-pengayaan-dan-referensi-untuk.html"><button class="btn">read more</button></a>
        </div>
    </div>

    <div class="box">
        <img src="projek/images/6.jpg" alt="">
        <div class="content">
            <span> <i class="fas fa-calendar"></i> jan 8, 2021 </span>
            <h3>Download Buku Referensi Belajar</h3>
            <p>Bahan ajar adalah refrensi apa saja yang bisa digunakan untuk membantu guru dan siswa dalam melaksanakan kegiatan belajar.</p>
            <a href="https://www.smkciledugalmusaddadiyah.sch.id/2016/07/download-buku-referensi-belajar-jenjang.html"><button class="btn">read more</button></a>
        </div>
    </div>

</div>

</section>

<!-- post section ends -->

<!-- footer section starts  -->

<section class="footer">

<div class="box-container">

    <div class="box">
        <a href="#" class="logo"><i class="fas fa-seedling"></i>Perpustakaan</a>
        <p>Website peminjaman buku di perpustakaan sekolah ini di buat untuk mempermudah dalam pendistribusian buku.</p>
    </div>

    <div class="box">
        <h3 class="share">share</h3>
        <a href="#">facebook</a>
        <a href="#">twitter</a>
        <a href="#">instagram</a>
        <a href="#">github</a>
    </div>

    <div class="box">
        <h3 class="letter">newsletter</h3>
        <form action="">
            <input type="email" placeholder="enter your email">
            <button type="submit" class="fas fa-paper-plane"></button>
        </form>
    </div>

</div>

<h1 class="credit">created by <span>Nur Alifia</span> | all rights reserved. </h1>

</section>

<!-- footer section ends -->





















<!-- custom js file link  -->
<script src="<?= base_url() ?>/projek/main.js"></script>

</body>
</html>