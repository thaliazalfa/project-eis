<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>

<div class="container-xxl bg-primary page-header">
                <div class="container text-center">
                    <h1 class="text-white animated zoomIn mb-3">Dana Darurat</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Dana Darurat</li>
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
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Dana Darurat</div>
                    <h2 class="mb-5">`Kenapa dana darurat itu penting?`</h2>
                    <p>Dana darurat dapat membantu Anda untuk memenuhi berbagai kebutuhan hidup disaat keadaan genting atau mendesak</p>
                    <p>Misalnya saat terjadi PHK yang tidak terduga, saat Anda menderita penyakit yang membuat tidak bisa bekerja, atau saat pandemi.</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.3s">
                        <form action="/coba" method="post">
                            <?= csrf_field(); ?>
                            <div class="row g-3">
                                <div class="col-12">

                                    <div class="form-floating">
                                        <input type="number" min="1" class="form-control" id="tetap" placeholder="Your Name" name="pengeluaran_tetap">
                                        <label for="tetap">Pengeluaran Tetap Perbulan</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="number" min="1" class="form-control" id="tambahan" placeholder="Your Email" name="pengeluaran_tambahan">
                                        <label for="tambahan">Pengeluaran Tambahan Perbulan</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <select class="form-select" id="floatingSelect" aria-label="Financial Consultancy" name="bulan">
                                            <option selected="januari">Januari</option>
                                            <option value="februari">Februari</option>
                                            <option value="maret">Maret</option>
                                            <option value="april">April</option>
                                            <option value="mei">Mei</option>
                                            <option value="juni">Juni</option>
                                            <option value="juli">Juli</option>
                                            <option value="agustus">Agustus</option>
                                            <option value="september">September</option>
                                            <option value="oktober">Oktober</option>
                                            <option value="november">November</option>
                                            <option value="desember">Desember</option>
                                        </select>
                                        <label for="floatingSelect">Pilih Bulan</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <select class="form-select" id="floatingSelect" aria-label="Financial Consultancy">
                                            <option selected="">Lajang</option>
                                            <option value="1">Menikah</option>
                                            <option value="2">Menikah dan Punya Anak</option>
                                        </select>
                                        <label for="floatingSelect">Pilih Status Anda</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Quote End -->
        
<?= $this->endSection(); ?>