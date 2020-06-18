<?php
ob_start();
session_start();
include 'php/var.php';
?>
<html>
  <head>
    <title>Perpustakaan Sekolah</title>
    <!-- icon -->
    <link rel="icon" href="images/icon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link rel="stylesheet" type="text/css" href="css/modal.css">
    <script src="scrool.js"></script>
    <style type="text/css">
    a {
    text-decoration: none;
    }
    .background{
    background-image: url(images/background/perpus3.png);
    background-repeat: no-repeat;
    background-size: cover;
    width: 100%;
    }
    </style>
  </head>
  <body>
    <!-- cover atas -->
    <div class="background" style="height: 1000px;" id="top">
      <table style="padding-top: 10px; padding-bottom: 10px;" width=100% border="0px" id="navbar">
        <tr>
          <td width="90px">
            <a href="#top"><center><img class="logo zoom" src="images/icon/logo.png" height="45px" width="45px"></center></a>
          </td>
          <td>
            <a href="#top"><font class="plogo">Perpustakaan<br>&nbsp;Sekolah</font></a>
          </td>
          <td width="30px">
            <a href="homeadmin.php"><font class="navtext zoom">Beranda</font></a>
          </td>
          <td width="30px">
            <a href="homeadmin.php?page=buku"><font class="navtext zoom">Data&nbsp;Buku</font></a>
          </td>
          <td width="30px">
            <a href="homeadmin.php?page=pustakawan"><font class="navtext zoom">Data&nbsp;Pustakan</font></a>
          </td>
          <td width="30px">
            <a href="homeadmin.php?page=member"><font class="navtext zoom">Data&nbsp;Member</font></a>
          </td>
          <td width="20px"></td>
        </tr>
      </table>
      <div style="padding-left: 30px; padding-right: 30px; margin-top: 10px;">
        <table width="100%" border="0">
          <tbody>
            <tr>
              <td width="75%" valign="top">
                <div style="background-color: hsla(0, 0%, 100%, 0.71); width: 100%; height: 870px; border-radius: 5px;" >
                  <?php
                  $page = (isset($_GET['page']))? $_GET['page'] : "main";
                  switch ($page) {
                  case 'buku' : include "view/admin/bukuAdmin.php"; break;
                  case 'pustakawan' : include "view/admin/pustakawanAdmin.php"; break;
                  case 'member' : include "view/admin/memberAdmin.php"; break;
                  case 'main' :
                  default : include 'view/admin/berandaAdmin.php';
                  }
                  ?>
                </div>
              </td>
              <td width="25%" valign="top">
                <div align="center" style="background-color: hsla(0, 0%, 100%, 0.71); width: 90%; height: 550px; border-radius: 5px; margin-left: 30px;">
                  <?php
                  ?>
                  <div style="height: 450px;">
                    <?php
                    include 'chat/tampil.php';
                    ?>
                  </div>
                  <?php
                  ?>
                </div>
                <br>
                <div class="data" align="center" style="background-color: hsla(0, 0%, 100%, 0.71); width: 90%; height: 220px; border-radius: 5px; margin-left: 30px; padding-top: 15px;">
                  <font style="font-size: 14px; font-weight: bolder;">DATA ANDA</font>
                  <br>
                  <img src="images/icon/person.png" width="80px;" height="80px;" style="margin-top: 7px;">
                  <p style="font-weight: bolder; margin-top: 15px;"><?=$kode?></p>
                  <p style="font-weight: bolder; margin-top: 10px;"><?=$nama?></p>
                  <p style="font-weight: bolder; margin-top: 10px;"><?=$status?></p>
                </div>
                <br>
                <form action="index.php">
                  <button class="btn" type="submit" style="width: 90%; margin-left: 30px; height: 50px; background-color: #D50000"><font color="#fff" style="font-weight: bolder;">LOGOUT</font></button>
                </form>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>