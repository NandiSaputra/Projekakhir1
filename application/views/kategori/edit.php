<div class="mt-3">
 <form action="<?= base_url('kategori/editkategori') ?>" method="POST">
  <input type="hidden" name="id_kategori" value="<?= $kategori['id_kategori'] ?>">
  <div class="mb-3">

   <input type="text" name="kategori" class="form-control" id="exampleFormControlInput1" placeholder="Kategori" value="<?= $kategori['kategori'] ?>">
  </div>

  <div class="mb-3">
   <button type='submit' class="btn btn-primary">Edit</button>
  </div>
 </form>

</div>