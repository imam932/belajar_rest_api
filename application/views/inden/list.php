<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List</title>


  </head>
  <body>

  <?= $this->session->flashdata('hasil'); ?>

  <table class="table" border="1">
    <tr>
      <th>ID</th>
      <th>Nama</th>
      <th>Type</th>
      <th>Warna</th>
      <th>Jumlah</th>
      <th>Harga</th>
      <th>Aksi</th>
    </tr>

    <?php foreach ($datainden as $inden) { ?>
      <tr>
      <td><?= $inden->id ?></td>
      <td><?= $inden->nama ?></td>
      <td><?= $inden->type ?></td>
      <td><?= $inden->warna ?></td>
      <td><?= $inden->jumlah ?></td>
      <td><?= $inden->harga ?></td>
      <td>
        <a href="<?= base_url('inden/edit/').$inden->id ?>">Edit</a>
        <a href="<?= base_url('inden/delete/').$inden->id ?>">Delete</a>
      </td>
    </tr>
  <?php } ?>
  </table>

  <a href="<?=base_url('inden/create'); ?>">Tambah</a>
  </body>
</html>
