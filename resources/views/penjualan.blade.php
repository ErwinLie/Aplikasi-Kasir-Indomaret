<main role="main" class="main-content">
    <div class="container-fluid">
        <!-- Section Header with Breadcrumb -->
        <section class="section">
            <div class="section-header">
                <div class="section-header-back">
                    <a href="{{ url('dashboard') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
                </div>
                <h1>Data Penjualan</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ url('dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ url('data_penjualan') }}">Data Penjualan</a></div>
                </div>
            </div>
        </section>

        <!-- Main Content for Data Penjualan -->
        <div class="row justify-content-center">
            <div class="col-12">

                <!-- Tabel Penjualan -->
                <div class="card shadow">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Pelanggan</th>
                                    <th>Total Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($penjualan as $item)
                                    <tr>
                                        <td>{{ $item->tanggal_penjualan }}</td>
                                        <td>{{ $item->nama_pelanggan }}</td>
                                        <td>{{ number_format($item->total_harga, 0, ',', '.') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
