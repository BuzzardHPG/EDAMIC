<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="/images/logo.png" alt="<?= $siteConfig['companyName'] ?> Logo" width="180" class="img-fluid">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php foreach ($navPages as $page => $details): ?>
                    <?php if ($details['showInNav']): ?>
                    <li class="nav-item">
                        <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == "$page.php" ? 'active' : '' ?>" 
                           href="/<?= $page ?>.php">
                            <?= $details['title'] ?>
                        </a>
                    </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
            
            <div class="d-flex">
                <button id="theme-toggle" class="btn btn-outline-light me-2" title="Toggle Theme">
                    <i class="fas fa-moon"></i>
                </button>
                <button id="language-toggle" class="btn btn-outline-light" title="Toggle Language">
                    <span class="lang-icon">EN</span>
                </button>
            </div>
        </div>
    </div>
</nav>