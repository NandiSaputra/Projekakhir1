  <table class="table">
    <thead class="table-dark">
      <tr>
        <th>No</th>
        <th>Nama Pembeli</th>
        <th>No Tlp</th>
        <th>Alamat</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($allpelanggan as $no => $pelanggan) {
      ?>
        <tr>
          <th><?= $no + 1 ?></th>
          <td><?= $pelanggan['nama_pelanggan']; ?></td>
          <td><?= $pelanggan['no_tlp']; ?></td>
          <td><?= $pelanggan['alamat']; ?></td>
          <td>
            <a href="<?= base_url('pelanggan/edit/' . $pelanggan['pelanggan_id']) ?>" class="btn btn-info">Edit</a>
            <a href="<?= base_url('pelanggan/hapus/' . $pelanggan['pelanggan_id']) ?>" class="btn btn-danger">Hapus</a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
  <div class="row mt-2">
    <div class="col-3">
      <a href="<?= base_url('pelanggan/create') ?>" class="btn btn-success">Tambah</a>
    </div>
  </div>