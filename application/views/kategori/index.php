<div class="card">
 <div class="card-body">

  <table class="table">
   <thead class="table-dark">
    <tr>
     <th>No</th>
     <th>KATEGORI</th>
     <th>AKSI</th>
    </tr>
   </thead>
   <tbody>
    <?php
    foreach ($Allkategori as $no => $kategori) { ?>
     <tr>
      <td scope="row"><?= $no + 1 ?></td>
      <td><?= $kategori['kategori']; ?></td>
      <td> <a href="<?= base_url('kategori/edit/' . $kategori['id_kategori']) ?>" class="btn btn-primary">Edit</a>
       <a href="<?= base_url('kategori/hapus/' . $kategori['id_kategori']) ?>" class="btn btn-danger">Hapus</a>
      </td>

     </tr>
    <?php } ?>

   </tbody>
  </table>
  <div class="row mt-2">
   <div class="col-3">
    <a href="<?= base_url('kategori/create') ?>" class="btn btn-success">Tambah</a>
   </div>
  </div>

 </div>
</div>