<?php
$pageTitle = "Our Services";
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/partials/header.php';
?>

<body class="d-flex flex-column min-vh-100">
    <?php include __DIR__ . '/partials/navbar.php'; ?>

    <main class="flex-grow-1">
        <!-- Hero Section -->
        <section class="jumbotron text-center bg-light py-5 mb-0">
            <div class="container py-5">
                <h1 class="display-4 fw-bold">Our Professional Services</h1>
                <p class="lead text-muted">Comprehensive technology solutions tailored to your business needs</p>
            </div>
        </section>

        <!-- Main Services Section -->
        <section id="main-services" class="py-5 bg-white">
            <div class="container">
                <div class="row g-4">
                    <?php
                    $services = [
                        [
                            'image' => 'softwaredev.jpg',
                            'title' => 'Software Development',
                            'description' => 'Custom web, mobile, and desktop applications development with cutting-edge technologies.',
                            'features' => [
                                'Web Application Development',
                                'Mobile App Development',
                                'Enterprise Software Solutions',
                                'UI/UX Design'
                            ]
                        ],
                        [
                            'image' => 'Automation.jpg',
                            'title' => 'Automation & Robotics',
                            'description' => 'Industrial automation solutions and robotic systems for modern manufacturing.',
                            'features' => [
                                'Industrial Automation',
                                'Robotic Process Automation',
                                'AI-powered Robotics',
                                'IoT Integration'
                            ]
                        ],
                        [
                            'image' => 'embedded.jpg',
                            'title' => 'Embedded Systems',
                            'description' => 'Custom electronic control systems and embedded solutions for various industries.',
                            'features' => [
                                'Circuit Design',
                                'Microcontroller Programming',
                                'Sensor Integration',
                                'Prototyping'
                            ]
                        ]
                    ];
                    
                    foreach ($services as $service): ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-sm border-0">
                            <img src="/images/<?= $service['image'] ?>" class="card-img-top service-img" alt="<?= $service['title'] ?>">
                            <div class="card-body">
                                <h3 class="card-title h5"><?= $service['title'] ?></h3>
                                <p class="card-text text-muted"><?= $service['description'] ?></p>
                                <ul class="list-unstyled">
                                    <?php foreach ($service['features'] as $feature): ?>
                                    <li class="mb-2">
                                        <i class="fas fa-check-circle text-primary me-2"></i>
                                        <?= $feature ?>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <div class="card-footer bg-transparent border-0">
                                <a href="/contact.php" class="btn btn-outline-primary w-100">
                                    Request Service
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Why Choose Us Section -->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <h2 class="display-6 fw-bold mb-4">Why Choose <?= $siteConfig['companyName'] ?>?</h2>
                        <p class="lead text-muted">We deliver exceptional value through our unique approach to technology solutions.</p>
                        
                        <div class="d-flex align-items-start my-4">
                            <div class="flex-shrink-0 text-primary me-3">
                                <i class="fas fa-award fa-2x"></i>
                            </div>
                            <div>
                                <h5 class="mb-2">Certified Experts</h5>
                                <p class="mb-0 text-muted">Our team holds professional certifications in various technology domains.</p>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-start my-4">
                            <div class="flex-shrink-0 text-primary me-3">
                                <i class="fas fa-clock fa-2x"></i>
                            </div>
                            <div>
                                <h5 class="mb-2">Fast Delivery</h5>
                                <p class="mb-0 text-muted">We respect your time and deliver projects within agreed timelines.</p>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-start my-4">
                            <div class="flex-shrink-0 text-primary me-3">
                                <i class="fas fa-headset fa-2x"></i>
                            </div>
                            <div>
                                <h5 class="mb-2">24/7 Support</h5>
                                <p class="mb-0 text-muted">Our support team is always ready to assist you with any issues.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="card shadow-sm border-0 overflow-hidden">
                            <div class="card-body p-0">
                                <img src="/images/why-choose-us.jpg" alt="Why Choose Us" class="img-fluid w-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Process Section -->
        <section class="py-5 bg-white">
            <div class="container">
                <h2 class="text-center display-6 fw-bold mb-5">Our Working Process</h2>
                
                <div class="row g-4">
                    <?php
                    $processSteps = [
                        [
                            'icon' => 'fas fa-lightbulb',
                            'title' => 'Consultation',
                            'description' => 'We start by understanding your requirements and business goals.'
                        ],
                        [
                            'icon' => 'fas fa-pencil-ruler',
                            'title' => 'Planning',
                            'description' => 'Our team creates a detailed project plan and timeline.'
                        ],
                        [
                            'icon' => 'fas fa-code',
                            'title' => 'Development',
                            'description' => 'We build your solution using industry best practices.'
                        ],
                        [
                            'icon' => 'fas fa-check-circle',
                            'title' => 'Delivery',
                            'description' => 'Final product delivery with comprehensive documentation.'
                        ]
                    ];
                    
                    foreach ($processSteps as $step): ?>
                    <div class="col-md-6 col-lg-3">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body text-center p-4">
                                <div class="icon-lg bg-primary bg-opacity-10 text-primary rounded-circle mb-4 mx-auto">
                                    <i class="<?= $step['icon'] ?> fa-2x"></i>
                                </div>
                                <h5 class="card-title"><?= $step['title'] ?></h5>
                                <p class="card-text text-muted"><?= $step['description'] ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-5 bg-primary text-white">
            <div class="container text-center py-4">
                <h2 class="display-6 fw-bold mb-4">Ready to Transform Your Business?</h2>
                <p class="lead mb-5">Let's discuss how we can help you achieve your technology goals.</p>
                <div class="d-flex justify-content-center gap-3">
                    <a href="/contact.php" class="btn btn-light btn-lg px-4">
                        Contact Us
                    </a>
                    <a href="tel:<?= $siteConfig['phoneNumber'] ?>" class="btn btn-outline-light btn-lg px-4">
                        <i class="fas fa-phone me-2"></i> Call Now
                    </a>
                </div>
            </div>
        </section>
    </main>

    <?php include __DIR__ . '/partials/footer.php'; ?>

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/script.js"></script>
</body>
</html>