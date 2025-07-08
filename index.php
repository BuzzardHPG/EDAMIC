<?php
$pageTitle = "Home";
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

    <!-- Hero Section -->
    <section id="hero" class="py-5 text-center">
        <div class="container">
            <h1 class="display-4 mb-4" data-lang="welcome">Welcome to <?= $siteConfig['companyName'] ?></h1>
            <p class="lead mb-5" data-lang="welcome-text">We are leaders in administrative development and digital transformation.</p>
            <img src="images/home.jpg" alt="<?= $siteConfig['companyName'] ?> Banner" class="img-fluid rounded shadow-lg">
        </div>
    </section>

    <!-- Featured Services Section -->
    <section id="featured-services" class="py-5 sec-diff">
        <div class="container">
            <h2 class="text-center mb-5" data-lang="featured-services">Featured Services</h2>
            <div class="row">
                <?php
                $services = [
                    [
                        'image' => 'softwaredev.jpg',
                        'title' => 'Software Development',
                        'text' => 'We develop websites, mobile apps, and desktop applications tailored to your needs.'
                    ],
                    [
                        'image' => 'Automationrobots.jpg',
                        'title' => 'Automation & Robotics',
                        'text' => 'Designing and programming automated machinery and robots for industry and research.'
                    ],
                    [
                        'image' => 'Electronicircuits.jpg',
                        'title' => 'Electronic Control Circuits',
                        'text' => 'Design and development of electronic control circuits for various projects.'
                    ]
                ];
                
                foreach ($services as $service): ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="images/<?= $service['image'] ?>" class="card-img-top" alt="<?= $service['title'] ?>">
                        <div class="card-body">
                            <h5 class="card-title" data-lang="<?= strtolower(str_replace(' ', '-', $service['title'])) ?>">
                                <?= $service['title'] ?>
                            </h5>
                            <p class="card-text" data-lang="<?= strtolower(str_replace(' ', '-', $service['title'])) ?>-text">
                                <?= $service['text'] ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Popular Courses Section -->
    <section id="popular-courses" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5" data-lang="popular-courses">Popular Courses</h2>
            <div class="row">
                <?php
                $courses = [
                    [
                        'image' => 'webdev.jpg',
                        'title' => 'Web Design',
                        'text' => 'Learn HTML5, CSS3, JavaScript, and Bootstrap to create modern websites.'
                    ],
                    [
                        'image' => 'mobiledev.jpg',
                        'title' => 'Mobile Development',
                        'text' => 'Build mobile apps using React Native and Flutter.'
                    ],
                    [
                        'image' => 'elecsys.jpg',
                        'title' => 'Electrical Systems',
                        'text' => 'Learn the basics and advanced concepts of electrical systems.'
                    ]
                ];
                
                foreach ($courses as $course): ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="images/<?= $course['image'] ?>" class="card-img-top" alt="<?= $course['title'] ?>">
                        <div class="card-body">
                            <h5 class="card-title" data-lang="<?= strtolower(str_replace(' ', '-', $course['title'])) ?>">
                                <?= $course['title'] ?>
                            </h5>
                            <p class="card-text" data-lang="<?= strtolower(str_replace(' ', '-', $course['title'])) ?>-text">
                                <?= $course['text'] ?>
                            </p>
                        </div>
                        <div class="card-footer bg-transparent">
                            <a href="courses.php" class="btn btn-primary" data-lang="learn-more">Learn More</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section id="stats" class="py-5 sec-diff">
        <div class="container">
            <div class="row text-center">
                <?php
                $stats = [
                    ['value' => '50+', 'label' => 'Projects Completed'],
                    ['value' => '95%', 'label' => 'Client Satisfaction'],
                    ['value' => '20+', 'label' => 'Professional Team'],
                    ['value' => '5', 'label' => 'Years Experience']
                ];
                
                foreach ($stats as $stat): ?>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="stat-item p-4">
                        <h3 class="stat-value"><?= $stat['value'] ?></h3>
                        <p class="stat-label"><?= $stat['label'] ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5" data-lang="testimonials">What Our Clients Say</h2>
            <div class="row">
                <?php
                $testimonials = [
                    [
                        'text' => 'Excellent service and professional team. Highly recommended!',
                        'author' => 'Ahmed Mohamed',
                        'position' => 'CEO, Tech Solutions'
                    ],
                    [
                        'text' => 'The training courses transformed our team\'s skills dramatically.',
                        'author' => 'Sarah Mahmoud',
                        'position' => 'HR Manager, Future Corp'
                    ]
                ];
                
                foreach ($testimonials as $testimonial): ?>
                <div class="col-md-6 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <p class="card-text mb-4">"<?= $testimonial['text'] ?>"</p>
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <div class="avatar-placeholder rounded-circle"></div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-0"><?= $testimonial['author'] ?></h6>
                                    <small class="text-muted"><?= $testimonial['position'] ?></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section id="cta" class="py-5 bg-primary text-white">
        <div class="container text-center">
            <h2 class="mb-4" data-lang="ready-to-start">Ready to start your project?</h2>
            <p class="lead mb-5" data-lang="cta-text">Get in touch with our team for a free consultation.</p>
            <a href="contact.php" class="btn btn-light btn-lg px-5" data-lang="contact-us">Contact Us</a>
        </div>
    </section>

    <?php include 'partials/footer.php'; ?>

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>