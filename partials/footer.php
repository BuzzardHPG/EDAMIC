<footer class="bg-dark text-white pt-5 pb-4">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <h5><?= $siteConfig['companyName'] ?></h5>
                <p class="text-muted">Leading technology solutions provider since <?= $siteConfig['yearFounded'] ?>.</p>
                <div class="social-links mt-3">
                    <?php foreach ($socialMedia as $platform => $details): ?>
                        <?php if ($details['active'] && !empty($details['url'])): ?>
                        <a href="<?= $details['url'] ?>" target="_blank" class="text-white me-3">
                            <i class="fab <?= $details['icon'] ?> fa-lg"></i>
                        </a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <?php foreach ($navPages as $page => $details): ?>
                        <li class="mb-2">
                            <a href="/<?= $page ?>.php" class="text-white text-decoration-none">
                                <?= $details['title'] ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            
            <div class="col-md-4 mb-4">
                <h5>Contact Info</h5>
                <ul class="list-unstyled text-muted">
                    <li class="mb-2"><i class="fas fa-map-marker-alt me-2"></i> <?= $siteConfig['location'] ?></li>
                    <li class="mb-2"><i class="fas fa-phone me-2"></i> <?= $siteConfig['phoneNumber'] ?></li>
                    <li class="mb-2"><i class="fas fa-envelope me-2"></i> <?= $siteConfig['companyEmail'] ?></li>
                </ul>
            </div>
        </div>
        
        <hr class="my-4 bg-secondary">
        
        <div class="row">
            <div class="col-md-6 text-center text-md-start">
                <p class="mb-0">&copy; <?= date('Y') ?> <?= $siteConfig['companyName'] ?>. All rights reserved.</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <p class="mb-0">
                    <a href="/privacy.php" class="text-white text-decoration-none me-3">Privacy Policy</a>
                    <a href="/terms.php" class="text-white text-decoration-none">Terms of Service</a>
                </p>
            </div>
        </div>
    </div>
</footer>