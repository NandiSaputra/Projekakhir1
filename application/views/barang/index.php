  <div class="row mt-4">
    <div class="col-12">
      <table class="table">
        <thead class="table-dark">
          <tr>
            <th>No</th>
            <th>Nama Sepeda</th>
            <th>Harga Sepeda</th>
            <th>Stok </th>
            <th>Keterangan</th>
            <th>AKSI</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($allbarang as $no => $ab) {
          ?>
            <tr>
              <th scope="row"><?= $no + 1 ?></th>
              <td><?= $ab['nama_barang']; ?></td>
              <td><?= $ab['harga_barang']; ?></td>
              <td><?= $ab['stok']; ?></td>
              <td><?= $ab['keterangan']; ?></td>
              <td>
                <a href="<?= base_url('barang/edit/' . $ab['barang_id']) ?>" class=" btn btn-info">Edit</a>
                <a href="<?= base_url('barang/hapus/' . $ab['barang_id']) ?>" class="btn btn-secondary">Hapus</a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
      <a href="<?= base_url('barang/create') ?>" class="btn btn-success">Tambah</a>
    </div>
  </div>