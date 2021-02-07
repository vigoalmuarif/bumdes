<?= $this->extend('templates/templates'); ?>

<?= $this->section('content'); ?>

<div class="container">

    <div class="card o-hidden border-0 col-lg-6 mx-auto shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Tambah Pengguna</h1>
                        </div>
                        <form class="user">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="inputUsernamae" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="inputNamaLengkap" placeholder="Nama Lengkap ">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" id="inputNoTelepon" placeholder="No Telepon">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="inputPassword" placeholder="Password">
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="ulangiPassword" placeholder="Ulangi Password">
                                </div>
                            </div>
                            <hr>
                            <div class="float-right">
                                <a href="login.html" class="btn btn-secondary btn-sm mr-2">
                                    Batal
                                </a>
                                <a href="login.html" class="btn btn-primary btn-sm">
                                    Simpan
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<?= $this->endSection(); ?>