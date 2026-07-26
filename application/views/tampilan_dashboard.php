<style>
    body {
        background:
            radial-gradient(circle at top left, rgba(255, 255, 255, 0.96) 0%, transparent 35%),
            linear-gradient(135deg, #f8fbff 0%, #eef4ff 100%);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: #0f172a;
    }

    .dashboard-shell {
        max-width: 1160px;
        margin: 0 auto;
    }

    .dashboard-hero {
        background: linear-gradient(135deg, #ffffff 0%, #f8fbff 100%);
        border: 1px solid rgba(79, 70, 229, 0.14);
        position: relative;
        overflow: hidden;
        box-shadow: 0 18px 45px rgba(15, 23, 42, 0.08);
    }

    .dashboard-hero::before {
        content: '';
        position: absolute;
        inset: auto auto -28px -18px;
        width: 180px;
        height: 180px;
        background: radial-gradient(circle, rgba(79, 70, 229, 0.12), transparent 72%);
        pointer-events: none;
    }

    .hero-badge {
        display: inline-flex;
        align-items: center;
        padding: 0.45rem 0.8rem;
        border-radius: 999px;
        background: rgba(79, 70, 229, 0.1);
        color: #4f46e5;
        font-weight: 700;
        letter-spacing: 0.04em;
        font-size: 0.82rem;
        text-transform: uppercase;
    }

    .hero-title {
        font-size: clamp(1.35rem, 2.1vw, 2.2rem);
        line-height: 1.2;
        color: #111827;
        margin-bottom: 0.9rem;
    }

    .hero-subtitle {
        color: #64748b;
        font-size: 1rem;
        line-height: 1.75;
        max-width: 700px;
    }

    .hero-logo {
        max-height: 240px;
        object-fit: contain;
        filter: drop-shadow(0 10px 20px rgba(15, 23, 42, 0.08));
    }

    .summary-card {
        background: #ffffff;
        border: 1px solid rgba(15, 23, 42, 0.06);
        border-radius: 16px;
        min-height: 100%;
        padding: 1rem 1.1rem;
        box-shadow: 0 12px 28px rgba(15, 23, 42, 0.05);
    }

    .summary-card strong {
        display: block;
        font-size: 1.05rem;
        color: #111827;
    }

    .summary-card span {
        color: #64748b;
        font-size: 0.92rem;
    }

    .action-card {
        border: 1px solid rgba(15, 23, 42, 0.06);
        background: #ffffff;
        box-shadow: 0 14px 34px rgba(15, 23, 42, 0.06);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .action-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 18px 40px rgba(15, 23, 42, 0.09) !important;
    }

    .action-image {
        max-height: 190px;
        object-fit: contain;
        display: block;
        margin: 0 auto;
    }

    .btn-action {
        width: 100%;
        border-radius: 999px;
        padding: 0.8rem 1rem;
        font-size: 0.95rem;
        font-weight: 700;
        letter-spacing: 0.03em;
        box-shadow: 0 8px 18px rgba(0, 0, 0, 0.08);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .btn-action:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 24px rgba(0, 0, 0, 0.12);
    }

    .option-card {
        border: 1px solid #e5e7eb;
        border-radius: 14px;
        background: linear-gradient(145deg, #fcfdff, #f4f7ff);
        padding: 0.9rem 1rem;
        min-height: 100%;
        transition: all 0.2s ease;
    }

    .option-card:hover {
        border-color: #4f46e5;
        background: #eef2ff;
    }

    .modal-section-title {
        font-size: 0.93rem;
        letter-spacing: 0.08em;
        color: #334155;
    }

    .modal-content {
        border-radius: 1.1rem;
        overflow: hidden;
        border: 0;
        box-shadow: 0 20px 45px rgba(15, 23, 42, 0.16);
    }

    .modal-header {
        border-bottom: 0;
    }

    .modal-footer {
        border-top: 0;
    }

    .form-control:focus {
        border-color: #4f46e5;
        box-shadow: 0 0 0 0.2rem rgba(79, 70, 229, 0.15);
    }

    .table-card {
        border: 0;
        box-shadow: none;
    }

    .table thead th {
        background: #f8fafc;
        color: #334155;
        font-size: 0.86rem;
        text-transform: uppercase;
        letter-spacing: 0.04em;
        border-bottom: 1px solid #e5e7eb;
    }

    .table tbody tr:hover {
        background-color: #f8fbff;
    }

    @media (max-width: 768px) {
        .dashboard-hero .card-body {
            padding: 1.35rem !important;
        }

        .hero-title {
            font-size: 1.4rem;
        }

        .hero-subtitle {
            font-size: 0.95rem;
        }

        .hero-logo {
            max-height: 180px;
        }
    }

    @media (max-width: 576px) {
        .container-padded {
            padding-top: 1rem !important;
            padding-bottom: 1rem !important;
        }

        .dashboard-hero .card-body {
            padding: 1.15rem !important;
        }

        .hero-title {
            font-size: 1.28rem;
        }

        .hero-subtitle {
            font-size: 0.92rem;
        }

        .hero-logo {
            max-height: 150px;
        }

        .action-image {
            max-height: 120px;
            margin-bottom: 0.5rem;
        }

        .btn-action {
            padding: 0.8rem 0.95rem;
        }

        .modal-body {
            padding: 1rem;
        }

        .option-card {
            padding: 0.8rem;
        }
    }
</style>

<div class="container container-padded py-4 py-md-5">
    <div class="dashboard-shell">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-10">
                <div class="card border-0 rounded-lg dashboard-hero">
                    <div class="card-body p-4 p-md-5">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-7 text-center text-md-left">
                                <span class="hero-badge mb-3">Laundry Permata</span>
                                <h2 class="hero-title font-weight-bold">Kelola transaksi laundry dengan lebih cepat</h2>
                                <p class="hero-subtitle mb-0">
                                    Tambah order, cek detail transaksi, dan pantau status dengan tampilan yang lebih elegan, rapi, dan nyaman di semua layar.
                                </p>
                            </div>
                            <div class="col-12 col-md-5 text-center mt-4 mt-md-0">
                                <img class="img-fluid hero-logo" src="<?= base_url('assets/gambar/logo.png') ?>" alt="logo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-4">
            <div class="col-12 col-md-4 mb-3">
                <div class="summary-card">
                    <strong>Transaksi Cepat</strong>
                    <span>Proses tambah order dengan form yang lebih jelas dan ringkas.</span>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <div class="summary-card">
                    <strong>Informasi Lengkap</strong>
                    <span>Lihat data customer, tanggal, nominal, dan status secara terstruktur.</span>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <div class="summary-card">
                    <strong>Responsif</strong>
                    <span>Tampilan tetap nyaman dipakai di desktop, tablet, maupun ponsel.</span>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-2">
            <div class="col-12 col-xl-10">
                <div class="card border-0 action-card">
                    <div class="card-body p-4 p-md-5">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-6 mb-4 mb-md-0 text-center">
                                <img class="img-fluid action-image" src="<?= base_url('assets/gambar/pegawai.png') ?>" alt="pegawai">
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="row">
                                    <div class="col-12 col-sm-6 mb-3">
                                        <button type="button" class="btn btn-primary text-uppercase btn-action" data-toggle="modal" data-target="#pegawai">
                                            Tambah Transaksi
                                        </button>
                                    </div>
                                    <div class="col-12 col-sm-6 mb-3">
                                        <button type="button" class="btn btn-success text-uppercase btn-action" data-toggle="modal" data-target="#pegawai2">
                                            Detail Transaksi
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="pegawai" tabindex="-1" aria-labelledby="pegawaiLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content rounded-4 border-0">
            <div class="modal-header bg-primary text-white rounded-top">
                <h5 class="modal-title" id="pegawaiLabel">Tambah Transaksi</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-4">
                <form id="transaksi_form" action="<?= site_url('dashboard/simpan_transaksi') ?>" method="post">
                    <div class="form-group">
                        <label class="text-uppercase font-weight-bold">Nama Customer</label>
                        <input type="text" name="nama_customer" class="form-control" required>
                    </div>

                    <hr>
                    <h5 class="text-center modal-section-title text-uppercase mb-3">Jenis Order</h5>
                    <div class="row">
                        <div class="col-12 col-sm-6 col-lg-4 mb-3">
                            <div class="option-card">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="status_order" id="status_cuci_setrika" value="cuci_setrika" required>
                                    <label class="custom-control-label font-weight-bold text-uppercase" for="status_cuci_setrika">Cuci setrika</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 mb-3">
                            <div class="option-card">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="status_order" id="status_cuci_lipat" value="cuci_lipat" required>
                                    <label class="custom-control-label font-weight-bold text-uppercase" for="status_cuci_lipat">Cuci lipat</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 mb-3">
                            <div class="option-card">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="status_order" id="status_cuci_kering" value="cuci_kering" required>
                                    <label class="custom-control-label font-weight-bold text-uppercase" for="status_cuci_kering">Cuci kering</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 mb-3">
                            <div class="option-card">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="status_order" id="status_cuci_badcover" value="cuci_badcover" required>
                                    <label class="custom-control-label font-weight-bold text-uppercase" for="status_cuci_badcover">Cuci badcover</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 mb-3">
                            <div class="option-card">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="status_order" id="status_cuci_selimut" value="cuci_selimut" required>
                                    <label class="custom-control-label font-weight-bold text-uppercase" for="status_cuci_selimut">Cuci selimut</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 mb-3">
                            <div class="option-card">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="status_order" id="status_cuci_boneka" value="cuci_boneka" required>
                                    <label class="custom-control-label font-weight-bold text-uppercase" for="status_cuci_boneka">Cuci boneka</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <h5 class="text-center modal-section-title text-uppercase mb-3">Durasi Pengerjaan</h5>
                    <div class="row">
                        <div class="col-12 col-md-6 mb-3">
                            <div class="option-card">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="durasi" id="durasi_one_day" value="one_day" required>
                                    <label class="custom-control-label font-weight-bold text-uppercase" for="durasi_one_day">One day</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <div class="option-card">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="durasi" id="durasi_regular" value="regular" required>
                                    <label class="custom-control-label font-weight-bold text-uppercase" for="durasi_regular">Regular</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <h5 class="text-center modal-section-title text-uppercase mb-3">Berat & Harga</h5>
                    <div class="row">
                        <div class="col-12 col-md-6 mb-3">
                            <div class="form-group mb-0">
                                <label class="text-uppercase font-weight-bold">Berat (Kg)</label>
                                <div class="input-group">
                                    <input type="text" name="berat" id="berat_input" class="form-control" oninput="convertBeratToKg(this)" onchange="convertBeratToKg(this)" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Kg</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <div class="form-group mb-0">
                                <label class="text-uppercase font-weight-bold">Nominal</label>
                                <input type="text" name="nominal_display" id="nominal_input" class="form-control" oninput="formatRupiah(this)" autocomplete="off" required>
                                <input type="hidden" name="nominal" id="nominal_value" required>
                            </div>
                        </div>
                    </div>

                    <script>
                        function formatRupiah(input) {
                            let raw = input.value.replace(/[^\d]/g, '');
                            if (raw === '') {
                                input.value = '';
                                document.getElementById('nominal_value').value = '';
                                return;
                            }

                            let number = parseInt(raw, 10);
                            let formatted = new Intl.NumberFormat('id-ID', {
                                style: 'currency',
                                currency: 'IDR',
                                maximumFractionDigits: 0
                            }).format(number);

                            input.value = formatted.replace('Rp', 'Rp ').trim();
                            document.getElementById('nominal_value').value = number;
                        }

                        document.addEventListener('DOMContentLoaded', function() {
                            const form = document.getElementById('transaksi_form');
                            if (form) {
                                form.addEventListener('submit', function() {
                                    const nominalInput = document.getElementById('nominal_input');
                                    const nominalValue = document.getElementById('nominal_value');
                                    if (nominalInput && nominalValue) {
                                        nominalValue.value = nominalInput.value.replace(/[^\d]/g, '');
                                    }
                                });
                            }
                        });

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

                    <div class="modal-footer px-0 pb-0">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="pegawai2" tabindex="-1" aria-labelledby="pegawai2Label" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content rounded-4 border-0">
            <div class="modal-header bg-success text-white rounded-top">
                <h5 class="modal-title" id="pegawai2Label">Detail Transaksi</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-4">
                <div class="card table-card">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered mb-0" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">#</th>
                                        <th scope="col">Nama Customer</th>
                                        <th scope="col">Status Order</th>
                                        <th scope="col">Durasi</th>
                                        <th scope="col">Berat</th>
                                        <th scope="col">Nominal</th>
                                        <th scope="col">Status Transaksi</th>
                                        <th scope="col">Keterangan</th>
                                        <th scope="col">Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody class="text-uppercase">
                                    <?php if (!empty($transaksi)) : ?>
                                        <?php $no = 1;
                                        foreach ($transaksi as $row) : ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td class="text-center"><?= htmlspecialchars($row['nama_customer'], ENT_QUOTES, 'UTF-8') ?></td>
                                                <td class="text-center"><?= htmlspecialchars($row['status_order'], ENT_QUOTES, 'UTF-8') ?></td>
                                                <td class="text-center"><?= htmlspecialchars($row['durasi'], ENT_QUOTES, 'UTF-8') ?></td>
                                                <td class="text-center"><?= htmlspecialchars($row['berat'], ENT_QUOTES, 'UTF-8') ?></td>
                                                <td class="text-center">Rp <?= number_format((int) $row['nominal'], 0, ',', '.') ?></td>
                                                <td class="text-center"><?= htmlspecialchars($row['status_transaksi'], ENT_QUOTES, 'UTF-8') ?></td>
                                                <td class="text-center"><?= htmlspecialchars($row['keterangan'], ENT_QUOTES, 'UTF-8') ?></td>
                                                <td class="text-center"><?= htmlspecialchars($row['tanggal'], ENT_QUOTES, 'UTF-8') ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <tr>
                                            <td colspan="9" class="text-center py-4">Belum ada transaksi.</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>