<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>

<!-- Navbar & Hero Start -->
<div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="index.html" class="navbar-brand p-0">
            <h1 class="m-0">MonPlanner</h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="/pages/home" class="nav-item nav-link">Home</a>
                <a href="/pages/history" class="nav-item nav-link active">History</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Service</a>
                    <div class="dropdown-menu m-0">
                        <a href="/pages/dana-darurat/index" class="dropdown-item">Dana Darurat</a>
                        <a href="/assets/quote.html" class="dropdown-item">Perencanaan Bulanan</a>
                    </div>
                </div>
            </div>
            <a href="" class="btn btn-light rounded-pill text-primary py-2 px-4 ms-lg-5">Login</a>
        </div>
        </nav>
        <div class="container-xxl bg-primary page-header">
            <div class="container text-center">
                <h1 class="text-white animated zoomIn mb-3">Detail</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">History</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Detail</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Quote Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Kesimpulan</div>
                    <h2 class="mb-5">Hasil Perhitungan</h2>
                    <p>Nominal uang yang kami sarankan tidaklah mutlak. Anda dapat menyesuaikan mempertimbangkan ulang sesuai kebutuhan anda</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.3s">
                        <form>
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="form-floating">
                                        <p> <b> Status : </b><i>Menikah</i>  </p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <p> <b> Bulan : </b><i><?= $detail['bulan']; ?></i>  </p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <p><b>Pengeluaran tetap perbulan : </b><?= $detail['pengeluaran_tetap']; ?></p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <p><b>Pengeluaran tambahan perbulan : </b><?= $detail['pengeluaran_tambahan']; ?></p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <p><b>Dana Darurat yang dibutuhkan minimal : </b><?= $detail['dana_darurat']; ?></p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <p><b>Saran : </b><i>Jika Anda sudah menikah dan hendak merencanakan pernikahan,
                                            lebih disarankan memiliki Dana Darurat sebanyak Rp.20000</i></p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <h6>Quick Notes!</h6>
                                        <p> Untuk menghindari perialku konsumtif yang berlebihan, amankan 50% dana darurat Anda di Reksadana Pasar Uang.
                                            Karena nilai investasi Anda pasti akan selalu naik dan Anda akan mendapat bunga tahunan 7-8%.</p>
                                    </div>
                                </div>
                                <div class="col-12">
                                <div class="row justify-content-center"> 
                                    <button class="btn btn-warning w-25" type="submit">Edit</button>
                                    <button class="btn btn-danger w-25" type="submit">Ulang</button>
                                    <br>
                                    <button class="btn btn-success w-75 py-3 mt-3">Kembali ke history</button>
                                </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Quote End -->
        
<?= $this->endSection(); ?>