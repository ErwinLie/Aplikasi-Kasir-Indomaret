<main role="main" class="main-content">
    <div class="container-fluid">
        <!-- Section Header for Data Barang -->
        <section class="section">
            <div class="section-header">
                <div class="section-header-back">
                    <a href="{{ url('dashboard') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
                </div>
                <h1>Setting</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ url('dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ url('setting') }}">Setting</a></div>
                </div>
            </div>
        </section>

        <!-- Existing Setting Section -->
        <div class="row justify-content-center">
            <!-- <div class="col-12"> -->
                <!-- <h1 class="h3 mb-0 text-gray-800">Setting</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Setting</li>
                </ol> -->

                <div class="container mt-4">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Website Settings</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('editsetting') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <!-- Website Name -->
                                <div class="form-group row">
                                    <label for="websiteName" class="col-sm-2 col-form-label">Website Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $darren2->namawebsite }}" class="form-control" id="websiteName" name="namaweb">
                                    </div>
                                </div>

                                <!-- Login Icon -->
                                <div class="form-group row">
                                    <label for="loginIcon" class="col-sm-2 col-form-label">Login Icon</label>
                                    <div class="col-sm-10">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="loginIcon" name="login">
                                            <label class="custom-file-label" for="loginIcon">Choose file</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Menu Icon -->
                                <div class="form-group row">
                                    <label for="menuIcon" class="col-sm-2 col-form-label">Menu Icon</label>
                                    <div class="col-sm-10">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="menuIcon" name="menu">
                                            <label class="custom-file-label" for="menuIcon">Choose file</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Tab Icon -->
                                <div class="form-group row">
                                    <label for="tabIcon" class="col-sm-2 col-form-label">Tab Icon</label>
                                    <div class="col-sm-10">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="tabIcon" name="tab">
                                            <label class="custom-file-label" for="tabIcon">Choose file</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="form-group row">
                                    <div class="col-sm-10 offset-sm-2">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <!-- </div> -->
        </div>
    </div>
</main>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        // Update the custom-file label with the name of the selected file
        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop(); // Get the selected file name
            $(this).next('.custom-file-label').addClass("selected").html(fileName); // Display file name
        });
    });
</script>
