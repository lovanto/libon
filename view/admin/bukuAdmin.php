<style type="text/css">
.fontku{
font-size: 13px;
}
.fontTable{
font-size: 15px;
}
#img-upload{
width: 120px;
}
.backgroundTable{
  background-color: #BDBDBD;
}
</style>
<script type="text/javascript">
$(document).ready( function() {
$(document).on('change', '.btn-file :file', function() {
var input = $(this),
label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
input.trigger('fileselect', [label]);
});
$('.btn-file :file').on('fileselect', function(event, label) {

var input = $(this).parents('.input-group').find(':text'),
log = label;

if( input.length ) {
input.val(log);
} else {
if( log ) alert(log);
}

});
function readURL(input) {
if (input.files && input.files[0]) {
var reader = new FileReader();

reader.onload = function (e) {
$('#img-upload').attr('src', e.target.result);
}

reader.readAsDataURL(input.files[0]);
}
}
$("#imgInp").change(function(){
readURL(this);
});
});
</script>
<div style="overflow: scroll; height: 870px; padding: 0 20px 0 20px;" class="fontku">
  <br/>
  <!--  modal   -->
  <div id="open-modal" class="modal-window">
    <div style="width: 800px; height: 300px;">
      <a href="#" title="Close" class="modal-close"><font size="5">&times;</font></a>
      <h1>Data Buku</h1>
      <hr style="margin-bottom: 20px;">
      <div>
        <form action="php/code.php" method="POST">
          <table width="100%" border="0" class="fontTable">
            <tbody>
              <tr>
                <td width="9%" align="left" valign="middle">Nomor Buku</td>
                <td width="41%" align="left" valign="middle"><input type="text" class="form-control" name="nomor" placeholder="Nomor Buku" style="width: 120px;" required></td>
                <td width="6%" align="left" valign="middle">Judul</td>
                <td width="44%" align="left" valign="middle"><input type="text" class="form-control" name="judul" placeholder="Judul Buku" style="width: 230px;" required></td>
              </tr>
              <tr>
                <td rowspan="4" align="left" valign="top">Sampul</td>
                <td rowspan="4" align="left" valign="middle">
                  <div class="form-group">
                    <img id='img-upload' class="zoom"/>
                    <div class="input-group">
                      <span class="input-group-btn">
                        <span class="btn btn-default btn-file" style="margin-right: 20px;">
                          <input type="file" id="imgInp">
                        </span>
                      </span>
                    </div>
                  </div>
                </td>
                <td align="left" valign="middle">Penulis</td>
                <td align="left" valign="middle"><input type="text" class="form-control" name="penulis" placeholder="Penulis" style="width: 200px;" required></td>
              </tr>
              <tr>
                <td align="left" valign="middle">Penerbit</td>
                <td align="left" valign="middle"><input type="text" class="form-control" name="penerbit" placeholder="Penerbit" style="width: 200px;" required></td>
              </tr>
              <tr>
                <td align="left" valign="middle">Kategori</td>
                <td align="left" valign="middle"><select class="form-control" name="kategori"  style="width: 150px;" required>
                  <option value="Pendidikan">Pendidikan</option>
                  <option value="Ensiklopedia">Ensiklopedia</option>
                  <option value="Novel">Novel</option>
                  <option value="Majalah">Majalah</option>
                </select></td>
              </tr>
              <tr>
                <td align="left" valign="middle">Tahun Terbit</td>
                <td align="left" valign="middle"><input type="text" class="form-control" name="tahun" placeholder="Tahun Terbit" style="width: 120px;" required></td><td width="0%"></td>
              </tr>
            </tbody>
          </table>
          <input type="submit" value="Simpan Buku" name="Submit" class="btn btn-primary" style="float: right;" />
        </form>
      </div>
    </div>
  </div>

<div style="margin-top: 15px;">
<form action="" method="POST" name="filter">
    <div class="input-group col-md-5 col-md-offset-7" style="float: left; margin-left: 25px;">
      <input type="text" name="input_cari" placeholder="Cari Disini" class="form-control" style="width:300px;" />
    </div>
    <input type="submit" name="cari" value="Cari" class="btn btn-primary" style="float: left; margin-left: 20px;" />
    <input type="submit" name="tampil" value="Semua Data" class="btn btn-primary" style="float: left; margin-left: 10px;"/>
  </form>
  <a href="#open-modal"><button class="btn btn-primary" type="submit" style="float: right; margin-right: 10px;">Tambah Data</button></a>
  </div>
  <div style="margin-top: 50px;">
    <br>
    <table border="0">
      <thead>
        <tr>
          <th style="width: 30px; vertical-align: middle; text-align: center;" scope="col">#</th>
          <th style="width: 150px; vertical-align: middle; text-align: center;" scope="col">No.Buku</th>
          <th style="width: 150px; vertical-align: middle; text-align: center;" scope="col">Sampul</th>
          <th style="width: 250px; vertical-align: middle; text-align: center;" scope="col">Judul Buku</th>
          <th style="width: 200px; vertical-align: middle; text-align: center;" scope="col">Penulis</th>
          <th style="width: 200px; vertical-align: middle; text-align: center;" scope="col">Penerbit</th>
          <th style="width: 150px; vertical-align: middle; text-align: center;" scope="col">Kategori</th>
          <th style="width: 100px; vertical-align: middle; text-align: center;" scope="col">Tahun Terbit</th>
          <th style="width: 150px; vertical-align: middle; text-align: center;" scope="col">Opsi</th>
        </tr>
      </thead>
      <tr>
        <td style="width: 30px; vertical-align: top; text-align: center;">1</td>
        <td style="vertical-align: top;">6957200001</td>
        <td align="center" style="vertical-align: top;"><img src="images/buku/novel1.jpg" width="80"></td>
        <td style="vertical-align: top;">Laskar Pelangi</td>
        <td style="vertical-align: top;">Andrea Hirata</td>
        <td style="vertical-align: top;">ABC Books</td>
        <td style="vertical-align: top;">Novel</td>
        <td style="vertical-align: top;">2002</td>
        <td style="vertical-align: top; text-align: center; vertical-align : center;">
          <?php
          echo '<a href="controller/update/update-konsumen.php?no_kons='.$data['no_kons'].'""><img src="images/icon/update.png" width="16" height="16" class="button2"></a> &nbsp;&nbsp;&nbsp;
          <a href="controller/delete/delete-konsumen.php?no_kons='.$data['no_kons'].'" onclick="return confirm(\'Yakin?\')"><img src="images/icon/delete.png" width="16" height="16" class="button2"></a>';
          ?>
        </td>
      </tr>
      <tr>
        <td style="width: 30px; vertical-align: top; text-align: center;">2</td>
        <td style="vertical-align: top;">6957200002</td>
        <td align="center" style="vertical-align: top;"><img src="images/buku/majalah1.jpg" width="80"></td>
        <td style="vertical-align: top;">Majalah Bobo</td>
        <td style="vertical-align: top;">Bobo</td>
        <td style="vertical-align: top;">Bobo Entertaiment</td>
        <td style="vertical-align: top;">Majalah</td>
        <td style="vertical-align: top;">1998</td>
        <td style="vertical-align: top; text-align: center; vertical-align : center;">
          <?php
          echo '<a href="controller/update/update-konsumen.php?no_kons='.$data['no_kons'].'""><img src="images/icon/update.png" width="16" height="16" class="button2"></a> &nbsp;&nbsp;&nbsp;
          <a href="controller/delete/delete-konsumen.php?no_kons='.$data['no_kons'].'" onclick="return confirm(\'Yakin?\')"><img src="images/icon/delete.png" width="16" height="16" class="button2"></a>';
          ?>
        </td>
      </tr>
      <tr>
        <td style="width: 30px; vertical-align: top; text-align: center;">3</td>
        <td style="vertical-align: top;">6957200003</td>
        <td align="center" style="vertical-align: top;"><img src="images/buku/pendidikan1.jpg" width="80"></td>
        <td style="vertical-align: top;">Pendidikan Karakter</td>
        <td style="vertical-align: top;">Pendidikan Kita</td>
        <td style="vertical-align: top;">Raja Buku</td>
        <td style="vertical-align: top;">Pendidikan</td>
        <td style="vertical-align: top;">2007</td>
        <td style="vertical-align: top; text-align: center; vertical-align : center;">
          <?php
          echo '<a href="controller/update/update-konsumen.php?no_kons='.$data['no_kons'].'""><img src="images/icon/update.png" width="16" height="16" class="button2"></a> &nbsp;&nbsp;&nbsp;
          <a href="controller/delete/delete-konsumen.php?no_kons='.$data['no_kons'].'" onclick="return confirm(\'Yakin?\')"><img src="images/icon/delete.png" width="16" height="16" class="button2"></a>';
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