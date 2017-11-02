<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit</title>

  </head>
  <body>

<form class="" action="<?= base_url('kontak/edit/').$datakontak[0]->id ?>" method="post" >

<table class="table">
  <tr>
    <td>Nama</td>
    <td>:</td>
    <td><input type="text" name="nama" class="form-control" value="<?= $datakontak[0]->nama ?>"></td>
  </tr>
  <tr>
    <td>Nomor</td>
    <td>:</td>
    <td><input type="text" name="nomor" class="form-control" value="<?= $datakontak[0]->nomor ?>"></td>
  </tr>
  <tr>
    <td>
      <?php echo form_submit('submit','Simpan'); ?>
      <input type="hidden" name="id" class="form-control" value="<?= $datakontak[0]->id ?>">
    </td>
  </tr>
</table>

</form>
  </body>
</html>
