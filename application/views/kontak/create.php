<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create</title>

  </head>
  <body>

<form action="<?= base_url('kontak/create') ?>" method="post" enctype="multipart/form-data">

<table class="table">
  <tr>
    <td>Nama</td>
    <td>:</td>
    <td><input type="text" name="nama" class="form-control" placeholder="Nama Lengkap"></td>
  </tr>
  <tr>
    <td>Nomor</td>
    <td>:</td>
    <td><input type="text" name="nomor" class="form-control" placeholder="Nomor HP"></td>
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
