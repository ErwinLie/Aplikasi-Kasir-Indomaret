<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ url('dashboard') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Edit Pelanggan</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ url('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ url('editpelanggan') }}">Edit Pelanggan</a></div>
            </div>
        </div>

        <div class="section-body">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-8">
                    <div class="card">
                        <form action="{{ url('updatepelanggan', $pelanggan->id_pelanggan) }}" method="POST" class="needs-validation" novalidate="">
                            @csrf
                            @method('PUT')
                            <div class="card-header">
                                <h4>Edit Pelanggan</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama_pelanggan">Nama Pelanggan</label>
                                    <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" value="{{ $pelanggan->nama_pelanggan }}" required>
                                    <div class="invalid-feedback">
                                        Nama Pelanggan tidak boleh kosong.
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $pelanggan->alamat }}" required>
                                    <div class="invalid-feedback">
                                        Alamat tidak boleh kosong.
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="no_telp">Nomor Telepon</label>
                                    <input type="text" class="form-control" id="no_telp" name="no_telp" value="{{ $pelanggan->no_telp }}" required>
                                    <div class="invalid-feedback">
                                        Nomor Telepon tidak boleh kosong.
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <a href="{{ route('datapelanggan') }}" class="btn btn-secondary">Batal</a>
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
