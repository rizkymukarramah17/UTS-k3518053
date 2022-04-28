<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('about') ?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('product_page') ?>">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('driver_page') ?>">Driver</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('technologies_page') ?>">Technologies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('contact_page') ?>">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="h1">About ADM</h1>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Our History </h4>
                <p>Founded in 1969 as a Silicon Valley start-up, the AMD journey began with dozens of employees focused on leading-edge semiconductor products. From those modest beginnings, AMD has grown into a global company setting the standard for modern computing through major technological achievements and many important industry firsts along the way.</p>
                <p>Rooted in an innovation-driven culture, AMD employees collaborate every day to maximize the potential of modern computing, utilizing semiconductor innovation to transform how people live, work, learn and play.</p>
                <p>Today, AMD offers the industry’s broadest portfolio of leadership high-performance and adaptive processor technologies, combining CPUs, GPUs, FPGAs, Adaptive SoCs and deep software expertise to enable leadership computing platforms for cloud, edge and end devices.</p>
                <h4>Our vision</h4>
                <p>Today, AMD offers the industry’s broadest portfolio of leadership high-performance and adaptive processor technologies, combining CPUs, GPUs, FPGAs, Adaptive SoCs and deep software expertise to enable leadership computing platforms for cloud, edge and end devices.</p>
                <h4>Our Mission</h4>
                <p>Build great products that accelerate next-generation computing experiences.​</p>
            </div>
        </div>
    </div>

    <footer class="jumbotron jumbotron-fluid mt-5 mb-0">
        <div class="container text-center">Copyright &copy <?= Date('Y') ?> AMD Radeon™ ProRender is the AMD high-performance, physically-based rendering engine. </div>
    </footer>

    <!-- Jquery dan Bootsrap JS -->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
</body>

</html>