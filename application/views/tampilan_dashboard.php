<div class="container">
    <div class="row">
        <div class="col-md">
            <div class="card mt-5">
                <div class="card-body">
                    <h5>
                        <h5 class="text-center">
                            <img class="img-fluid" src="<?= base_url() ?>assets/gambar/logo.png" alt="logo" style="height: 300px;weight: 300px;">
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
                        <img class="img-fluid" src="<?= base_url() ?>assets/gambar/pegawai.png" alt="pegawai" style="height: 200px;weight:300px"><br>
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
                <form action="<?= site_url('dashboard/simpan_transaksi') ?>" method="post">
                    <div class="form-group">
                        <label class="text-uppercase">Nama Customer</label>
                        <input type="text" name="nama_customer" class="form-control" required>
                    </div>
                    <hr style="border: 1px solid black;">
                    <h5 class="text-center">
                        <label class="text-uppercase">Jenis Order</label>
                    </h5>
                    <div class="container">
                        <h5 class="text-center">
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status_order" value="cuci_setrika" required>
                                        <label class="form-check-label" for="exampleRadios2">
                                            <h6 class="text-uppercase font-weight-bolder">Cuci setrika</h6>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class=" form-check">
                                        <input class="form-check-input" type="radio" name="status_order" value="cuci_lipat" required>
                                        <label class="form-check-label" for="exampleRadios3">
                                            <h6 class="text-uppercase font-weight-bolder">Cuci lipat</h6>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class=" form-check">
                                        <input class="form-check-input" type="radio" name="status_order" value="cuci_kering" required>
                                        <label class="form-check-label" for="exampleRadios3">
                                            <h6 class="text-uppercase font-weight-bolder">Cuci kering</h6>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status_order" value="cuci_badcover" required>
                                        <label class="form-check-label" for="exampleRadios2">
                                            <h6 class="text-uppercase font-weight-bolder">Cuci badcover</h6>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class=" form-check">
                                        <input class="form-check-input" type="radio" name="status_order" value="cuci_selimut" required>
                                        <label class="form-check-label" for="exampleRadios3">
                                            <h6 class="text-uppercase font-weight-bolder">Cuci selimut</h6>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class=" form-check">
                                        <input class="form-check-input" type="radio" name="status_order" value="cuci_boneka" required>
                                        <label class="form-check-label" for="exampleRadios3">
                                            <h6 class="text-uppercase font-weight-bolder">Cuci boneka</h6>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </h5>
                    </div>
                    <hr style="border: 1px solid black;">
                    <h5 class="text-center">
                        <label class="text-uppercase">Durasi Pengerjaan</label>
                    </h5>
                    <div class="container">
                        <h5 class="text-center">
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="durasi" value="one_day" required>
                                        <label class="form-check-label" for="exampleRadios2">
                                            <h6 class="text-uppercase font-weight-bolder">one day</h6>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class=" form-check">
                                        <input class="form-check-input" type="radio" name="durasi" value="regular" required>
                                        <label class="form-check-label" for="exampleRadios3">
                                            <h6 class="text-uppercase font-weight-bolder">regular</h6>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </h5>
                    </div>

                    <hr style="border: 1px solid black;">
                    <h5 class="text-center">
                        <label class="text-uppercase">Berat & Harga</label>
                    </h5>
                    <div class="container">
                        <h5 class="text-center">
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label class="text-uppercase">Berat (Kg)</label>
                                        <div class="input-group">
                                            <input type="text" name="berat" id="berat_input" class="form-control" oninput="convertBeratToKg(this)" onchange="convertBeratToKg(this)">
                                            <div class="input-group-append">
                                                <span class="input-group-text">Kg</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label class="text-uppercase">Nominal</label>
                                        <input type="text" name="nominal" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </h5>
                    </div>
                    <script>
                        function convertBeratToKg(input) {
                            let raw = (input.value || '').toString().trim().replace(/,/g, '.');
                            if (raw === '') {
                                return;
                            }

                            let match = raw.match(/^([0-9]+(?:\.[0-9]+)?)\s*(kg|g|gram|gr)?$/i);
                            if (!match) {
                                return;
                            }

                            let value = parseFloat(match[1]);
                            let unit = (match[2] || 'kg').toLowerCase();
                            let kg = value;

                            if (unit === 'g' || unit === 'gram' || unit === 'gr') {
                                kg = value / 1000;
                            }

                            input.value = kg.toFixed(2).replace(/\.0+$/, '').replace(/(\.\d)0+$/, '$1');
                        }
                    </script>
                    <hr style="border: 1px solid black;">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
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
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>