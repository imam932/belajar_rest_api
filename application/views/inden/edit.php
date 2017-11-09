<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit</title>

  </head>
  <body>

<form class="" action="<?= base_url('inden/edit/').$datainden[0]->id ?>" method="post" >

<table class="table">
  <tr>
    <td>Nama</td>
    <td>:</td>
    <td><input type="text" name="nama" class="form-control" value="<?= $datainden[0]->nama ?>"></td>
  </tr>
  <tr>
    <td>Type</td>
    <td>:</td>
    <td><input type="text" name="type" class="form-control" value="<?= $datainden[0]->type ?>"></td>
  </tr>
  <tr>
    <td>Warna</td>
    <td>:</td>
    <td><input type="text" name="warna" class="form-control" value="<?= $datainden[0]->warna ?>"></td>
  </tr>
  <tr>
    <td>Jumlah</td>
    <td>:</td>
    <td><input type="text" name="jumlah" class="form-control" value="<?= $datainden[0]->jumlah ?>"></td>
  </tr>
  <tr>
    <td>Harga Satuan</td>
    <td>:</td>
    <td><input type="text" name="harga" class="form-control" value="<?= $datainden[0]->harga ?>"></td>
  </tr>
  <tr>
    <td>
      <?php echo form_submit('submit','Simpan'); ?>
      <input type="hidden" name="id" class="form-control" value="<?= $datainden[0]->id ?>">
    </td>
  </tr>
</table>

</form>
  </body>
</html>
