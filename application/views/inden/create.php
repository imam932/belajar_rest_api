<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create</title>

  </head>
  <body>

<form action="<?= base_url('inden/create') ?>" method="post" enctype="multipart/form-data">

<table class="table">
  <tr>
    <td>Nama</td>
    <td>:</td>
    <td><input type="text" name="nama" class="form-control" placeholder="Nama Barang"></td>
  </tr>
  <tr>
    <td>Type</td>
    <td>:</td>
    <td><input type="text" name="type" class="form-control" placeholder="Type mesin"></td>
  </tr>
  <tr>
    <td>Warna</td>
    <td>:</td>
    <td><input type="text" name="warna" class="form-control" placeholder="Warna"></td>
  </tr>
  <tr>
    <td>Jumlah</td>
    <td>:</td>
    <td><input type="text" name="jumlah" class="form-control" placeholder="Jumlah yang di Inden"></td>
  </tr>
  <tr>
    <td>Harga Satuan</td>
    <td>:</td>
    <td><input type="text" name="harga" class="form-control" placeholder="Harga Satuan"></td>
  </tr>
  <tr>
    <td>
      <?php echo form_submit('submit','Simpan'); ?>
      <!-- <input type="submit" value="Simpan"> -->
    </td>
  </tr>
</table>

</form>
  </body>
</html>
