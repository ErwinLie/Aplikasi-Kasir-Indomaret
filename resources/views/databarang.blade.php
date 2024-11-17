<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ url('dashboard') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Data Barang</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ url('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ url('data_barang') }}">Data Barang</a></div>
            </div>
        </div>

        <div class="col-lg-8 col-md-12 col-12 col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>Daftar Barang</h4>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambahBarangModal">
                        <i class="fas fa-plus"></i> Tambah
                    </button>
                    <div class="ml-auto">
                        <form class="form-inline">
                            <input id="searchInput" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        </form>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Stok</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $no = 1;
                                    foreach ($barang as $item) {
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $item->nama_produk ?></td>
                                        <td><?= number_format($item->harga, 0, ',', '.') ?></td>
                                        <td><?= $item->stok ?></td>
                                        <td>
                                        <a href="{{ url('editbarang', $item->id_produk) }}" class="btn btn-warning btn-action">Edit</a>
                                            
                                            <form action="{{ url('delete/'.$item->id_produk) }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus barang ini?');">
                                            @csrf
                                            @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Modal Tambah Barang -->
<div class="modal fade" id="tambahBarangModal" tabindex="-1" role="dialog" aria-labelledby="tambahBarangModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahBarangModalLabel">Tambah Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ url('tambah') }}" method="POST">
                <?= csrf_field() ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama_produk">Nama Barang</label>
                        <input type="text" class="form-control" id="nama_produk" name="nama_produk" required>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga" required>
                    </div>
                    <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="number" class="form-control" id="stok" name="stok" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>