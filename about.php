<?php 
$pageTitle = "About Us";
require_once 'config.php';
require_once 'partials/header.php'; 
?>

<body>
    <!-- Loading Spinner -->
    <div id="content-loading">
        <div class="spinner"></div>
    </div>

    <?php include 'partials/navbar.php'; ?>

    <div id="watermark">
        <img src="images/logo0.png" alt="<?= $siteConfig['companyName'] ?> watermark" width="100%" height="100%">
    </div>

    <!-- About Section -->
    <section id="about" class="py-5 text-center">
        <div class="container">
            <h2 class="display-5" data-lang="about">About Us</h2>
            <p class="lead" data-lang="about-text">Established in <?= $siteConfig['yearFounded'] ?>, <?= $siteConfig['companyName'] ?> specializes in delivering advanced technological solutions.</p>
            <img src="images/about-us.jpg" alt="About Us" class="img-fluid mt-4 rounded">
        </div>
    </section>

    <!-- Vision & Mission Section -->
    <section id="vision-mission" class="py-5 sec-diff">
        <div class="container">
            <h2 class="text-center mb-5" data-lang="vision-mission">Vision & Mission</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title" data-lang="vision">Vision</h5>
                            <p class="card-text" data-lang="vision-text">To lead the region in delivering advanced technology solutions and administrative development by transforming innovative ideas into tangible realities.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title" data-lang="mission">Mission</h5>
                            <p class="card-text" data-lang="mission-text">To provide exceptional technology services rooted in innovation and quality, enhancing productivity and fostering continuous development for businesses and individuals.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our History Section -->
    <section id="history" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5" data-lang="our-history">Our History</h2>
            <div class="row">
                <div class="col-md-6">
                    <img src="images/history.avif" alt="Our History" class="img-fluid rounded">
                </div>
                <div class="col-md-6">
                    <p class="lead" data-lang="history-text">Since our inception in <?= $siteConfig['yearFounded'] ?>, <?= $siteConfig['companyName'] ?> has been at the forefront of technological innovation. We started as a small team of passionate engineers and developers, and over the years, we have grown into a leading company in the region, delivering cutting-edge solutions to our clients.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values Section -->
    <section id="values" class="py-5 sec-diff">
        <div class="container">
            <h2 class="text-center mb-5" data-lang="our-values">Our Values</h2>
            <div class="row">
                <?php
                $values = [
                    'innovation' => 'We constantly strive to innovate and bring new ideas to life',
                    'quality' => 'We are committed to delivering high-quality solutions',
                    'integrity' => 'We conduct our business with the highest level of integrity'
                ];
                
                foreach ($values as $key => $text): ?>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title" data-lang="<?= $key ?>"><?= ucfirst($key) ?></h5>
                            <p class="card-text" data-lang="<?= $key ?>-text"><?= $text ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php include 'partials/footer.php'; ?>
    
    <!-- JavaScript Files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>