<div class="container">
    <div class="row">
        <div class="col-md">
            <div class="card mt-5">
                <div class="card-body">
                    <h5>
                        <h5 class="text-center">
                            <img src="<?= base_url() ?>assets/gambar/logo.png" alt="logo" style="height: 300px;weight: 300px;">
                        </h5>
                    </h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md mt-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="text-center">
                        <img src="<?= base_url() ?>assets/gambar/pegawai.png" alt="pegawai" style="height: 200px;weight:300px"><br>
                        <div class="container">
                            <div class="row">
                                <div class="col-md mt-2">
                                    <button type="button" class="btn btn-primary text-uppercase font-weight-bolder" data-toggle="modal" data-target="#pegawai">
                                        Tambah Transaksi
                                    </button>
                                </div>
                                <div class="col-md mt-2">
                                    <button type="button" class="btn btn-success text-uppercase font-weight-bolder" data-toggle="modal" data-target="#pegawai2">
                                        Detail Transaksi
                                    </button>
                                </div>
                            </div>
                        </div>
                    </h5>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="pegawai" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Trnsaksi</h5>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="pegawai2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="exampleModalLabel">Detail Trnsaksi</h5>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>