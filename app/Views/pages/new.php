<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>


            <div class="container-xxl bg-primary page-header">
                <div class="container text-center">
                    <h1 class="text-white animated zoomIn mb-3">Dana Darurat</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">History</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Add</li>
                        </ol>
                    </nav>
                    <a href="/pages/history" class="btn btn-link text-white"><- Kembali ke history</a>
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
                       
                        <form action="/danadarurat" method="post">
                            <?= csrf_field(); ?>
                            <div class="row g-3">
                                <div class="col-12">

                                    <div class="form-floating">
                                        <input type="number" min="1" class="form-control <?= ($validation->hasError('pengeluaran_tetap')) ? 
                                        'is-invalid' : ''; ?>" id="pengeluaran_tetap" placeholder="Masukan nominal" name="pengeluaran_tetap" value="<?= old('pengeluaran_tetap'); ?>">
                                        <div class="invalid-feedback">
                                        <?= $validation->getError('pengeluaran_tetap'); ?>
                                        </div>
                                        <label for="tetap">Pengeluaran Tetap Perbulan</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="number" min="0" class="form-control <?= ($validation->hasError('pengeluaran_tambahan')) ?
                                        'is-invalid' : ''; ?>" id="pengeluaran_tambahan" placeholder="Masukan nominal" name="pengeluaran_tambahan" value="<?= old('pengeluaran_tambahan'); ?>">
                                        <label for="tambahan">Pengeluaran Tambahan Perbulan</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <select class="form-select" id="floatingSelect" aria-label="Financial Consultancy" name="bulan">
                                            <option selected="Januari">Januari</option>
                                            <option value="Februari">Februari</option>
                                            <option value="Maret">Maret</option>
                                            <option value="April">April</option>
                                            <option value="Mei">Mei</option>
                                            <option value="Juni">Juni</option>
                                            <option value="Juli">Juli</option>
                                            <option value="Agustus">Agustus</option>
                                            <option value="September">September</option>
                                            <option value="Oktober">Oktober</option>
                                            <option value="November">November</option>
                                            <option value="Desember">Desember</option>
                                        </select>
                                        <label for="floatingSelect">Pilih Bulan</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <select class="form-select" id="floatingSelect" aria-label="Financial Consultancy" name="status">
                                            <option selected="Lajang">Lajang</option>
                                            <option value="Menikah">Menikah</option>
                                            <option value="Menikah dan Punya Anak">Menikah dan Punya Anak</option>
                                        </select>
                                        <label for="floatingSelect">Pilih Status Anda</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Quote End -->
        
<?= $this->endSection(); ?>