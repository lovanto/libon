<style type="text/css">
.fontku{
font-size: 13px;
}
</style>
<div style=" padding-top: 20px; overflow: scroll; height: 870px;"  class="fontku">
 <!--  modal   -->
  <div id="open-modal" class="modal-window">
    <div style="width: 800px; height: 300px;">
      <a href="#" title="Close" class="modal-close"><font size="5">&times;</font></a>
      <h1>Data Pustakawan</h1>
      <hr style="margin-bottom: 20px;">
      <div>
        <form action="php/code.php" method="POST">
            <table width="100%" border="0">
              <tbody>
                <tr>
                  <td width="125" align="left" valign="top">No.Member</td><form action="php/code3.php" method="POST">
                  <td width="417" align="left" valign="top" style="padding-right: 20px"><input type="text" name="no_mem" placeholder="Nomor Member" class="form-control" required/></td>
                  <td width="156" align="left" valign="top">Alamat</td>
                  <td width="467" align="left" valign="top" rowspan="2"><textarea name="alamat" id="noresize" class="form-control" rows="3" placeholder="Alamat" required></textarea></td>
                </tr>
                <tr>
                  <td align="left" valign="top">Nama</td>
                  <td align="left" valign="top" style="padding-right: 20px"><input type="text" name="nama" placeholder="Nama Lengkap" class="form-control" required/></td>
                  <td align="left" valign="top">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" valign="top">Tempat Lahir</td>
                  <td align="left" valign="top" style="padding-right: 20px"><input type="text" name="tempat" placeholder="Tempat Lahir" class="form-control" required/></td>
                  <td align="left" valign="top">Tanggal Lahir</td>
                  <td align="left" valign="top"><input type="date" name="tanggal" placeholder="Tanggal Lahir" class="form-control" required/></td>
                </tr>
                <tr>
                  <td align="left" valign="top">Kelamin</td>
                  <td align="left" valign="top" style="padding-right: 20px">
                    <select name="kelamin" id="select" class="form-control" required>
                      <option value="Laki Laki">Laki Laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select></td>
                    <td align="left" valign="top">No.Telp</td>
                    <td align="left" valign="top"><input type="text" name="telp" placeholder="Nomor Telp" class="form-control" required/></td>
                  </tr>
                  <tr>
                    <td align="left" valign="top">Email</td>
                    <td align="left" valign="top" style="padding-right: 20px"><input type="email" name="email" placeholder="Alamat Email" class="form-control" required/></td>
                    <td align="left" valign="top">Password</td>
                    <td align="left" valign="top"><input type="password" name="password" placeholder="Password" class="form-control" required/></td>
                  </tr>
                </tbody>
              </table>
              <input type="submit" value="Simpan Member" name="Submit" class="btn btn-primary" style="float: right;" />
          </form>
        </div>
      </div>
    </div>
    <!-- halaman -->
    <form action="" method="POST" name="filter">
      <div class="input-group col-md-5 col-md-offset-7" style="float: left; margin-left: 15px;">
        <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
        <input type="text" name="input_cari" placeholder="Cari Disini" class="form-control" style="width: 300px;" />
      </div>
      <input type="submit" name="cari" value="Cari" class="btn btn-primary" style="float: left;" />
      <input type="submit" name="tampil" value="Semua Data" class="btn btn-primary" style="float: left; margin-left: 10px;"/>
    </form>
    <a href="#open-modal"><button class="btn btn-primary" type="submit" style="float: right; margin-right: 30px;">Tambah Data</button></a>
    <br/>
    <div style="padding: 30px;">
      <br>
      <table border="0">
        <thead>
          <tr>
            <th scope="col" style="width: 30px; text-align: center;">#</th>
            <th scope="col" style="width: 100px;">No.Member</th>
            <th scope="col" style="width: 150px;">Nama</th>
            <th scope="col" style="width: 200px;">TTL</th>
            <th scope="col" style="width: 100px;">Kelamin</th>
            <th scope="col" style="width: 100px;">No.Telp</th>
            <th scope="col" style="width: 300px;">Alamat</th>
            <th scope="col" style="width: 150px;">Email</th>
            <th scope="col" style="width: 200px; text-align: center; vertical-align : center;">Opsi</th>
          </tr>
        </thead>
        <tr>
          <td style="width: 30px; vertical-align: top; text-align: center;">1</td>
          <td style="vertical-align: top;">6957200001</td>
          <td style="vertical-align: top;">Rifky Lovanto</td>
          <td style="vertical-align: top;">Bandung, 19-09-2001</td>
          <td style="vertical-align: top;">Laki Laki</td>
          <td style="vertical-align: top;">087816837566</td>
          <td style="vertical-align: top;">GBI Blok Ebok No.55</td>
          <td style="vertical-align: top;">rifkylovanto@gmail.com</td>
          <td style="vertical-align: top; text-align: center; vertical-align : center;">
            <?php
            echo '<a href="controller/update/update-konsumen.php?no_kons='.$data['no_kons'].'""><img src="images/icon/update.png" width="16" height="16" class="button2"></a> &nbsp;&nbsp;&nbsp;
            <a href="controller/delete/delete-konsumen.php?no_kons='.$data['no_kons'].'" onclick="return confirm(\'Yakin?\')"><img src="images/icon/delete.png" width="16" height="16" class="button2"></a>'; //menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=siswa_id
            ?>
          </td>
        </tr>
        <tr>
          <td style="width: 30px; vertical-align: top; text-align: center;">2</td>
          <td style="vertical-align: top;">6957200002</td>
          <td style="vertical-align: top;">Faisal Yahya</td>
          <td style="vertical-align: top;">Bandung, 30-02-2000</td>
          <td style="vertical-align: top;">Laki Laki</td>
          <td style="vertical-align: top;">087294648291</td>
          <td style="vertical-align: top;">Ujung Berung</td>
          <td style="vertical-align: top;">faisalyahya@gmail.com</td>
          <td style="vertical-align: top; text-align: center; vertical-align : center;">
            <?php
            echo '<a href="controller/update/update-konsumen.php?no_kons='.$data['no_kons'].'""><img src="images/icon/update.png" width="16" height="16" class="button2"></a> &nbsp;&nbsp;&nbsp;
            <a href="controller/delete/delete-konsumen.php?no_kons='.$data['no_kons'].'" onclick="return confirm(\'Yakin?\')"><img src="images/icon/delete.png" width="16" height="16" class="button2"></a>'; //menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=siswa_id
            ?>
          </td>
        </tr>
        <tr>
          <td style="width: 30px; vertical-align: top; text-align: center;">3</td>
          <td style="vertical-align: top;">6957200003</td>
          <td style="vertical-align: top;">Devita Kania</td>
          <td style="vertical-align: top;">Bandung, 29-10-2002</td>
          <td style="vertical-align: top;">Perempuan</td>
          <td style="vertical-align: top;">086371736111</td>
          <td style="vertical-align: top;">Kiaracondong</td>
          <td style="vertical-align: top;">kaniadevita@gmail.com</td>
          <td style="vertical-align: top; text-align: center; vertical-align : center;">
            <?php
            echo '<a href="controller/update/update-konsumen.php?no_kons='.$data['no_kons'].'""><img src="images/icon/update.png" width="16" height="16" class="button2"></a> &nbsp;&nbsp;&nbsp;
            <a href="controller/delete/delete-konsumen.php?no_kons='.$data['no_kons'].'" onclick="return confirm(\'Yakin?\')"><img src="images/icon/delete.png" width="16" height="16" class="button2"></a>'; //menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=siswa_id
            ?>
          </td>
        </tr>
        <tfoot>
        <tr>
          <th align="center" valign="middle" colspan="9">&nbsp;</th>
        </tr>
        </tfoot>
      </table>
    </div>
  </div>