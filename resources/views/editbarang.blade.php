<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ url('dashboard') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Edit Barang</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ url('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ url('editbarang') }}">Edit Barang</a></div>
            </div>
        </div>

        <div class="section-body">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-8">
                    <div class="card">
                        <form action="{{ url('edit', $barang->id_produk) }}" method="POST" class="needs-validation" novalidate="">
                            @csrf
                            @method('PUT')
                            <div class="card-header">
                                <h4>Edit Barang</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama_produk">Nama Barang</label>
                                    <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="{{ $barang->nama_produk }}" required>
                                    <div class="invalid-feedback">
                                        Nama Barang tidak boleh kosong.
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="harga">Harga</label>
                                    <input type="number" class="form-control" id="harga" name="harga" value="{{ $barang->harga }}" required>
                                    <div class="invalid-feedback">
                                        Harga tidak boleh kosong.
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="stok">Stok</label>
                                    <input type="number" class="form-control" id="stok" name="stok" value="{{ $barang->stok }}" required>
                                    <div class="invalid-feedback">
                                        Stok tidak boleh kosong.
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <a href="{{ route('databarang') }}" class="btn btn-secondary">Batal</a>
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    // JavaScript for enabling validation
    (function () {
        'use strict';
        window.addEventListener('load', function () {
            var forms = document.getElementsByClassName('needs-validation');
            Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
