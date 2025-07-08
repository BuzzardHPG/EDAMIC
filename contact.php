<?php
$pageTitle = "Contact Us";
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/partials/header.php';
?>

<body class="d-flex flex-column min-vh-100">
    <?php include __DIR__ . '/partials/navbar.php'; ?>

    <main class="flex-grow-1 py-5">
        <!-- Contact Header -->
        <section class="jumbotron text-center bg-light py-5 mb-5">
            <div class="container">
                <h1 class="display-4">Contact Us</h1>
                <p class="lead">Get in touch with our team for any inquiries or support</p>
            </div>
        </section>

        <!-- Contact Content -->
        <div class="container my-5">
            <div class="row g-5">
                <!-- Contact Form -->
                <div class="col-lg-7">
                    <div class="card shadow-sm">
                        <div class="card-body p-4">
                            <h2 class="card-title mb-4">Send us a message</h2>
                            <form id="contactForm" action="/process_contact.php" method="POST" novalidate>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Full Name</label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                        <div class="invalid-feedback">Please enter your name</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                        <div class="invalid-feedback">Please enter a valid email</div>
                                    </div>
                                    <div class="col-12">
                                        <label for="subject" class="form-label">Subject</label>
                                        <select class="form-select" id="subject" name="subject" required>
                                            <option value="" selected disabled>Select a subject</option>
                                            <option value="General Inquiry">General Inquiry</option>
                                            <option value="Technical Support">Technical Support</option>
                                            <option value="Training">Training Courses</option>
                                            <option value="Partnership">Partnership</option>
                                        </select>
                                        <div class="invalid-feedback">Please select a subject</div>
                                    </div>
                                    <div class="col-12">
                                        <label for="message" class="form-label">Your Message</label>
                                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                                        <div class="invalid-feedback">Please enter your message</div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary px-4 py-2">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="col-lg-5">
                    <div class="card shadow-sm h-100">
                        <div class="card-body p-4">
                            <h2 class="card-title mb-4">Contact Information</h2>
                            <div class="d-flex align-items-start mb-4">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-map-marker-alt fa-2x"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Location</h5>
                                    <p class="mb-0 text-muted"><?= $siteConfig['location'] ?></p>
                                </div>
                            </div>
                            
                            <div class="d-flex align-items-start mb-4">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-phone fa-2x"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Phone</h5>
                                    <p class="mb-0 text-muted"><?= $siteConfig['phoneNumber'] ?></p>
                                </div>
                            </div>
                            
                            <div class="d-flex align-items-start mb-4">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-envelope fa-2x"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Email</h5>
                                    <p class="mb-0 text-muted"><?= $siteConfig['companyEmail'] ?></p>
                                </div>
                            </div>
                            
                            <hr class="my-4">
                            
                            <h5 class="mb-3">Business Hours</h5>
                            <ul class="list-unstyled text-muted">
                                <li class="mb-2">Monday - Friday: 9:00 AM - 5:00 PM</li>
                                <li class="mb-2">Saturday: 10:00 AM - 2:00 PM</li>
                                <li>Sunday: Closed</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Google Map -->
        <div class="container-fluid px-0 mt-5">
            <div class="ratio ratio-21x9">
                <iframe src="<?= $siteConfig['googleMapsEmbed'] ?>" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade"
                        class="border-0">
                </iframe>
            </div>
        </div>
    </main>

    <?php include __DIR__ . '/partials/footer.php'; ?>

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/script.js"></script>
    <script src="/js/contact-validation.js"></script>
</body>
</html>