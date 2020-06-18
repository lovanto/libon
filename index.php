<html>
  <head>
    <title>Perpustakaan Sekolah</title>
    <!-- icon -->
    <link rel="icon" href="images/icon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link rel="stylesheet" type="text/css" href="css/modal.css">
    <link rel="stylesheet" type="text/css" href="css/carousel.css">
    <script src="scrool.js"></script>
    <script type="text/javascript">
    $(function () {
    $(document).scroll(function () {
    var $nav = $(".navbar-fixed-top");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });
    });
    </script>
    <style type="text/css">
        a{
      text-decoration: none;
    }
    </style>
  </head>
  <body>
    <!--  modal   -->
    <div id="open-modal" class="modal-window">
      <div>
        <a href="#" title="Close" class="modal-close"><font size="5">&times;</font></a>
        <h1>Login</h1>
        <div>
          <form method="POST" action="php/code.php" enctype="multipart/form-data">
            <input type="email" name="emailLogin" class="form-control" style="margin-bottom: 10px;" placeholder="Email">
            <input type="password" name="passwordLogin" class="form-control" style="margin-bottom: 10px;" placeholder="Password">
          <table width="100%" border="0">
            <tbody>
              <tr>
                <td align="right"><input type="Submit" name="Submit" value="Login" class="btn btn-primary"></td>
                </form>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- cover atas -->
    <div class="body1" style="height: 655px;" id="top">
      <table style="padding-top: 10px; padding-bottom: 10px;" width=100% border="0px" id="navbar">
        <tr>
          <td width="90px">
            <a href="#top"><center><img class="logo zoom" src="images/icon/logo.png" height="45px" width="45px"></center></a>
          </td>
          <td>
            <a href="#top"><font class="plogo">Perpustakaan<br>&nbsp;Sekolah</font></a>
          </td>
          <td width="30px">
            <a href="#top"><font class="navtext zoom">Beranda</font></a>
          </td>
          <td width="30px">
            <a href="#penjelasan"><font class="navtext zoom">Seputar</font></a>
          </td>
          <td width="30px">
            <a href="#koleksi"><font class="navtext zoom">Koleksi</font></a>
          </td>
          <td width="30px">
            <a href="#daftar"><font class="navtext zoom">Sign&nbsp;Up</font></a>
          </td>
          <td width="30px">
            <a href="#about"><font class="navtext zoom">Kutipan</font></a>
          </td>
          <td width="30px">
            <a href="#footer"><font class="navtext zoom">Kontak</font></a>
          </td>
          <td width="20px"></td>
        </tr>
      </table>
      <div style="padding-top: 150px">
        <p align="center" class="fontCenter">Telusuri Dan Temukan Buku Yang Kamu Inginkan</p>
      </div>
      <div style="margin-top: 20px">
        <p align="center" class="atasSearch">Penyedia berbagai buku untuk siswa disekolah</p>
      </div>
      <div style="width: 100% ;margin-top: 15px">
        <center><form>
          <input style="background-color: #fff" class="search" type="text" placeholder="Search...">
          <button class="button cari" type="search"><b>Cari</b></button>
        </form></center>
      </div>
      <div style="width: 100% ;margin-top: 15px">
        <form>
          <center><a href="#open-modal"><button class="button login" type="submit" style="width: 150px;"><b>Login</b></button></a></center>
        </form>
      </div>
      <div>
        <a href="#penjelasan"><center><img class="ball" style="margin-top: 100px;" src="images/icon/arrowbottom.png" height="50px" width="50px"></center></a>
      </div>
    </div>
    <!--  penjelasan    -->
    <div class="sizeku" style="background: #00384d" align="center" id="penjelasan">
      <img src="images/icon/logo.png" class="zoom" width="200px" height="200px" style="padding-top: 60px">
      <div class="judul">
        Perpustakaan Online
      </div>
      <div class="isi">
        Web Perpustakaan Sekolah ini dibuat sebagai sarana bagi para siswa untuk dapat menggali informasi secara online. Menyediakan berbagai koleksi buku mulai dari buku pelajaran, koleksi majalah dan komik sebagai hiburan untuk para siswa, yang dapat di download melalui web ini. Maka dari itu, diharapkan dengan web ini dapat menjadi motivasi dan sarana bagi siswa untukdapat menjadi lebih baik dan lebih berprestasi kedepannya.
      </div>
    </div>
    <!--  koleksi   -->
    <div class="sizeku2" align="center" id="koleksi">
      <div style="font-family: bauhaus; font-size: 40px; margin-top: 50px;  padding: 0 0 0 50px;">
        <font color="#898989">KOLEKSI</font> <font color="#4ce4ff">BUKU</font>
        <hr style="margin-top: 40px;">
      </div>
      <div style="padding: 20px">
        <table width="90%" border="0">
          <tbody>
            <tr>
              <td align="center">
                <font color="#08064e" style="font-family: bauhaus; font-size: 25px">Pendidikan</font><br><br>
              </td>
              <td align="center"><font color="#16e529" style="font-family: bauhaus; font-size: 25px">Ensiklopedia</font><br><br>
              </td>
              <td align="center"><font color="#fd36ff" style="font-family: bauhaus; font-size: 25px">Novel</font><br><br>
              </td>
              <td align="center"><font color="#4ce4ff" style="font-family: bauhaus; font-size: 25px">Majalah</font><br><br>
              </td>
            </tr>
            <tr>
              <td align="center">
                <div class="carousel">
                  <ul class="slides">
                    <form>
                      <input type="radio" name="radio-buttons" id="img-1" checked />
                      <li class="slide-container">
                        <div class="slide-image">
                          <img src="images/buku/pendidikan1.jpg">
                        </div>
                        <div class="carousel-controls">
                          <label for="img-3" class="prev-slide">
                            <span>&lsaquo;</span>
                          </label>
                          <label for="img-2" class="next-slide">
                            <span>&rsaquo;</span>
                          </label>
                        </div>
                      </li>
                      <input type="radio" name="radio-buttons" id="img-2" />
                      <li class="slide-container">
                        <div class="slide-image">
                          <img src="images/buku/pendidikan2.jpg">
                        </div>
                        <div class="carousel-controls">
                          <label for="img-1" class="prev-slide">
                            <span>&lsaquo;</span>
                          </label>
                          <label for="img-3" class="next-slide">
                            <span>&rsaquo;</span>
                          </label>
                        </div>
                      </li>
                      <input type="radio" name="radio-buttons" id="img-3" />
                      <li class="slide-container">
                        <div class="slide-image">
                          <img src="images/buku/pendidikan3.jpg">
                        </div>
                        <div class="carousel-controls">
                          <label for="img-2" class="prev-slide">
                            <span>&lsaquo;</span>
                          </label>
                          <label for="img-1" class="next-slide">
                            <span>&rsaquo;</span>
                          </label>
                        </div>
                      </li>
                      <div class="carousel-dots">
                        <label for="img-1" class="carousel-dot" id="img-dot-1"></label>
                        <label for="img-2" class="carousel-dot" id="img-dot-2"></label>
                        <label for="img-3" class="carousel-dot" id="img-dot-3"></label>
                      </div>
                    </form>
                  </ul>
                </div>
              </td>
              <td align="center">
                <div class="carousel">
                  <ul class="slides">
                    <form>
                      <input type="radio" name="radio-buttons" id="img-4" checked />
                      <li class="slide-container">
                        <div class="slide-image">
                          <img src="images/buku/ensiklopedia1.jpg">
                        </div>
                        <div class="carousel-controls">
                          <label for="img-6" class="prev-slide">
                            <span>&lsaquo;</span>
                          </label>
                          <label for="img-5" class="next-slide">
                            <span>&rsaquo;</span>
                          </label>
                        </div>
                      </li>
                      <input type="radio" name="radio-buttons" id="img-5" />
                      <li class="slide-container">
                        <div class="slide-image">
                          <img src="images/buku/ensiklopedia2.jpg">
                        </div>
                        <div class="carousel-controls">
                          <label for="img-4" class="prev-slide">
                            <span>&lsaquo;</span>
                          </label>
                          <label for="img-6" class="next-slide">
                            <span>&rsaquo;</span>
                          </label>
                        </div>
                      </li>
                      <input type="radio" name="radio-buttons" id="img-6" />
                      <li class="slide-container">
                        <div class="slide-image">
                          <img src="images/buku/ensiklopedia3.jpg">
                        </div>
                        <div class="carousel-controls">
                          <label for="img-5" class="prev-slide">
                            <span>&lsaquo;</span>
                          </label>
                          <label for="img-4" class="next-slide">
                            <span>&rsaquo;</span>
                          </label>
                        </div>
                      </li>
                      <div class="carousel-dots">
                        <label for="img-4" class="carousel-dot" id="img-dot-4"></label>
                        <label for="img-5" class="carousel-dot" id="img-dot-5"></label>
                        <label for="img-6" class="carousel-dot" id="img-dot-6"></label>
                      </div>
                    </form>
                  </ul>
                </div>
              </td>
              <td align="center">
                <div class="carousel">
                  <ul class="slides">
                    <form>
                      <input type="radio" name="radio-buttons" id="img-7" checked />
                      <li class="slide-container">
                        <div class="slide-image">
                          <img src="images/buku/novel1.jpg">
                        </div>
                        <div class="carousel-controls">
                          <label for="img-9" class="prev-slide">
                            <span>&lsaquo;</span>
                          </label>
                          <label for="img-8" class="next-slide">
                            <span>&rsaquo;</span>
                          </label>
                        </div>
                      </li>
                      <input type="radio" name="radio-buttons" id="img-8" />
                      <li class="slide-container">
                        <div class="slide-image">
                          <img src="images/buku/novel2.jpeg">
                        </div>
                        <div class="carousel-controls">
                          <label for="img-7" class="prev-slide">
                            <span>&lsaquo;</span>
                          </label>
                          <label for="img-9" class="next-slide">
                            <span>&rsaquo;</span>
                          </label>
                        </div>
                      </li>
                      <input type="radio" name="radio-buttons" id="img-9" />
                      <li class="slide-container">
                        <div class="slide-image">
                          <img src="images/buku/novel3.jpg">
                        </div>
                        <div class="carousel-controls">
                          <label for="img-8" class="prev-slide">
                            <span>&lsaquo;</span>
                          </label>
                          <label for="img-7" class="next-slide">
                            <span>&rsaquo;</span>
                          </label>
                        </div>
                      </li>
                      <div class="carousel-dots">
                        <label for="img-7" class="carousel-dot" id="img-dot-7"></label>
                        <label for="img-8" class="carousel-dot" id="img-dot-8"></label>
                        <label for="img-9" class="carousel-dot" id="img-dot-9"></label>
                      </div>
                    </form>
                  </ul>
                </div>
              </td>
              <td align="center">
                <div class="carousel">
                  <ul class="slides">
                    <form>
                      <input type="radio" name="radio-buttons" id="img-10" checked />
                      <li class="slide-container">
                        <div class="slide-image">
                          <img src="images/buku/majalah1.jpg">
                        </div>
                        <div class="carousel-controls">
                          <label for="img-12" class="prev-slide">
                            <span>&lsaquo;</span>
                          </label>
                          <label for="img-11" class="next-slide">
                            <span>&rsaquo;</span>
                          </label>
                        </div>
                      </li>
                      <input type="radio" name="radio-buttons" id="img-11" />
                      <li class="slide-container">
                        <div class="slide-image">
                          <img src="images/buku/majalah2.jpg">
                        </div>
                        <div class="carousel-controls">
                          <label for="img-10" class="prev-slide">
                            <span>&lsaquo;</span>
                          </label>
                          <label for="img-12" class="next-slide">
                            <span>&rsaquo;</span>
                          </label>
                        </div>
                      </li>
                      <input type="radio" name="radio-buttons" id="img-12" />
                      <li class="slide-container">
                        <div class="slide-image">
                          <img src="images/buku/majalah3.jpg">
                        </div>
                        <div class="carousel-controls">
                          <label for="img-11" class="prev-slide">
                            <span>&lsaquo;</span>
                          </label>
                          <label for="img-10" class="next-slide">
                            <span>&rsaquo;</span>
                          </label>
                        </div>
                      </li>
                      <div class="carousel-dots">
                        <label for="img-10" class="carousel-dot" id="img-dot-10"></label>
                        <label for="img-11" class="carousel-dot" id="img-dot-11"></label>
                        <label for="img-12" class="carousel-dot" id="img-dot-12"></label>
                      </div>
                    </form>
                  </ul>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        <hr style="width: 70%; margin-top: 60px;">
      </div>
    </div>
    <!--  daftar    -->
    <div class="body2" id="daftar">
      <center><p class="daftarFont header" style="padding-top: 40px; font-size: 20px;">Belum Menjadi Member ? Silahkan Daftar Disini </p></center>
      <center><table width="80%" border="0" style="font-weight: bold; margin-top: 40px">
        <tbody>
          <form action="php/code.php" method="POST" enctype="multipart/form-data">
            <tr>
              <td width="18%" align="left" valign="top"><p class="daftarFont">Nis</p></td>
              <td colspan="3" align="left" style="padding: 0px 0px 13px 0px;"><input class="form-control" name="nis" type="text" required style="margin-left: 10px; width: 120px;"/></td>
            </tr>
            <tr>
              <td align="left" valign="top"><p class="daftarFont">Nama</p></td>
              <td colspan="3" align="left" valign="middle" style="padding: 0px 0px 13px 0px;"><input class="form-control" name="nama" required type="text" style="margin-left: 10px; width: 220px;"/></td>
            </tr>
            <tr>
              <td align="left" valign="top"><p class="daftarFont"><p class="daftarFont">Tempat Lahir</p></td>
              <td width="30%" align="left" valign="middle" style="padding: 0px 0px 13px 0px;"><input class="form-control" name="tempat" type="text" required style="margin-left: 10px; width: 220px;"/></td>
              <td width="10%" align="left" valign="middle" style="padding: 0px 0px 13px 20px;"><p class="daftarFont">Tanggal Lahir</td>
              <td width="41%" align="left" valign="middle" style="padding: 0px 0px 13px 0px;"><input class="form-control" name="tanggal" type="date" required style="margin-left: 10px; width: 180px;"/></td>
            </tr>
            <tr>
              <td align="left" valign="top"><p class="daftarFont">Jenis Kelamin</p></td>
              <td align="left" valign="middle" style="padding: 0px 0px 13px 0px;">
                <select class="form-control" name="select" id="select" class="form-control" style="margin-left: 10px;" required>
                  <option>Laki Laki</option>
                  <option>Perempuan</option>
                </select>
              </td>
              <td align="left" valign="middle" style="padding: 0px 0px 13px 0px;">&nbsp;</td>
              <td align="left" valign="middle" style="padding: 0px 0px 13px 0px;">&nbsp;</td>
            </tr>
            <tr>
              <td align="left" valign="top"><p class="daftarFont">Alamat</p></td>
              <td colspan="3" align="left" valign="middle" style="padding: 0px 0px 13px 0px;"><textarea class="form-control" name="alamat" id="noresize" required style="margin-left: 10px; width: 350px;" rows="3"></textarea></td>
            </tr>
            <tr>
              <td align="left" valign="top"><p class="daftarFont">No.Telp</p></td>
              <td width="30%" align="left" valign="middle" style="padding: 0px 0px 13px 0px;"><input name="telp" type="text" class="form-control" required style="margin-left: 10px; width: 170px;"/></td>
              <td width="10%" align="left" valign="middle" style="padding: 0px 0px 13px 20px;"><p class="daftarFont">E-mail</p></td>
              <td width="41%" align="left" valign="middle" style="padding: 0px 0px 13px 0px;"><input class="form-control" name="emailLogin" required type="email" style="margin-left: 10px; width: 250px;"/></td>
            </tr>
            <tr>
              <td align="left" valign="top"><p class="daftarFont">Password</p></td>
              <td colspan="3" align="left" valign="middle"><input name="passwordLogin" type="password" class="form-control" required style="margin-left: 10px; width: 350px;"/></td>
            </tr>
            <tr>
              <td colspan="4" align="center" valign="middle">
                <br>
                <center><input type="submit" value="Sign Up" name="Submit" class="btn btn-primary" style="width: 100%;"></center>
              </td>
            </tr>
            <tr>
              <td colspan="4" align="center" valign="middle"><br><p class="daftarFont">By cliking &quot; Daftar &quot; I agree to the Goodreads Terms of Service</p></td>
            </tr>
          </tbody>
        </form>
      </table></center>
    </div>
    <!--  tentang   -->
    <div class="row justify-content-md-center marginku" id="about">
      <ul class="list-inline">
        <li class="list-inline-item zoom" style="margin-right: 50px;">
          <div class="card" style="width: 20rem; height: 25rem;">
            <img class="card-img-top" src="images/background/bg1.jpg" alt="Card image cap"height="200px">
            <div class="card-body" align="center">
              <img class="card-profil" src="images/profile1.jpeg">
              <br><br>
              <h5 class="card-name" style="">Rifky Lovanto</h5>
              <i class="fab fa-instagram icon-ig"></i>
              <p class="card-text">Hiruplah udara luar sesekali,dan carilah hal baru di tempat baru pula.</p>
            </div>
          </div>
        </li>
        <li class="list-inline-item zoom" style="margin-right: 50px;">
          <div class="card" style="width: 20rem; height: 25rem;">
            <img class="card-img-top" src="images/background/bg2.jpg" alt="Card image cap"height="200px">
            <div class="card-body" align="center">
              <img class="card-profil" src="images/profile2.jpeg">
              <br><br>
              <h5 class="card-name" style="">Faisal Yahya</h5>
              <i class="fab fa-instagram icon-ig"></i>
              <p class="card-text">Membuka buku sama dengan membuka dunia.</p>
            </div>
          </div>
        </li>
        <li class="list-inline-item zoom">
          <div class="card" style="width: 20rem; height: 25rem;">
            <img class="card-img-top" src="images/background/bg3.png" alt="Card image cap"height="200px">
            <div class="card-body" align="center">
              <img class="card-profil" src="images/profile3.jpg">
              <br><br>
              <h5 class="card-name" style="">Devita Kania Chrisanta S</h5>
              <i class="fab fa-instagram icon-ig"></i>
              <p class="card-text">Dengan adanya internet, bukan berarti semua hal ada di internet, ada juga hal yang hanya ada di buku.</p>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <!--  footer    -->
  <div class="white" id="footer">
    <div style="background-color: #2f2f2f; width: 100%; padding-top: 30px; padding-bottom: 10px;">
      <div style="margin-bottom: 30px;">
        <table width="100%" border="0">
          <tbody>
            <tr>
              <td width="65%" rowspan="3">
                <div style="padding-left: 100px">
                  <p style="color: #fff">Sosial Media Kami :</p><br>
                  <a href="https://www.facebook.com/Inzanami05" target="_blank"><img src="images/icon/fb.png" width="40px" height="40px;" class="gray" style="margin-right: 10px;"></a>
                  <a href="https://www.instagram.com/danihamdani_1933/" target="_blank"><img src="images/icon/ins.png" width="40px" height="40px;" class="gray" style="margin-right: 10px;"></a>
                  <a href="https://plus.google.com/u/0/104981383429904075369" target="_blank"><img src="images/icon/gl.png" width="40px" height="40px;" class="gray" style="margin-right: 10px;"></a>
                </div>
              </td>
              <td width="35%">
                <div class="white">Perpustakaan Sekolah</div>
              </td>
            </tr>
            <tr>
              <td class="white">Jl. Rancabolang Soekarno-Hatta  No. 10B</td>
            </tr>
            <tr>
              <td width="38%" height="23" class="white">( 021 ) 6957800</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div style="background-color: #272727; width: 100%; padding-top: 30px; padding-bottom: 30px; border-top: 1px solid #636363;">
      <p style="color: #fff; margin-left: 100px;">Copyright &copy; &middot; Bapus Team 2018 All Rights Reserved &middot;
        <a href="#top"><img class="gray zoom" src="images/icon/top.png" width="35px" height="35px" style="float: right; margin-right: 50px;"></a></p>
      </div>
    </div>
    <script>
    $(document).ready(function(){
    $("a").on('click', function(event) {
    if (this.hash !== "") {
    event.preventDefault();
    var hash = this.hash;
    $('html, body').animate({
    scrollTop: $(hash).offset().top
    }, 800, function(){
    window.location.hash = hash;
    });
    }
    });
    });
    </script>
  </body>
</html>