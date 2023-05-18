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
                                <a href="/pages/index" class="dropdown-item">Dana Darurat</a>
                            </div>
                        </div>
                    </div>
                    <a href="" class="btn btn-light rounded-pill text-primary py-2 px-4 ms-lg-5">Login</a>
                </div>
            </nav>
<div class="container-xxl bg-primary page-header">
    <div class="container text-center">
        <h1 class="text-white animated zoomIn mb-3">History User</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

 <!-- About Start -->
 <div class="container-xxl py-6">
            <div class="container">
                <a href="/pages/new" class="btn btn-primary mb-3">Tambah Data Pengeluaran</a>
                <table class="table table-hover ">
                    <thead>
                        <tr>
                            <th scope="col ">ID</th>
                            <th scope="col ">Bulan</th>
                            <th scope="col ">Pengeluaran Tetap</th>
                            <th scope="col ">Pengeluaran Tambahan</th>
                            <th scope="col ">Dana Darurat</th>
                            <th scope="col ">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 0; ?>
                    <?php foreach ($dana_darurat as $item): ?>
                    <tr>
                        <td><?= $no += 1; ?></td>
                        <td><?= $item['bulan'] ?></td>
                        <td><?= $item['pengeluaran_tetap'] ?></td>
                        <td><?= $item['pengeluaran_tambahan'] ?></td>
                        <td><?= $item['dana_darurat'] ?></td>
                        <td>
                            <a href="/detail/<?= $item['bulan']; ?>" class="btn btn-success">Detail</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
                </table>
            </div>
        </div>
        <!-- About End -->

<?= $this->endSection(); ?>