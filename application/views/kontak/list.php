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
      <th>Nomor</th>
    </tr>

    <?php foreach ($datakontak as $kontak) { ?>
      <tr>
      <td><?= $kontak->id ?></td>
      <td><?= $kontak->nama ?></td>
      <td><?= $kontak->nomor ?></td>
      <td>
        <a href="<?= base_url('kontak/edit/').$kontak->id ?>">Edit</a>
        <a href="<?= base_url('kontak/delete/').$kontak->id ?>">Delete</a>
      </td>
    </tr>
  <?php } ?>
  </table>

  <a href="<?=base_url('kontak/create'); ?>">Tambah</a>
  </body>
</html>
