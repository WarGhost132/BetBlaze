<?php

// Logo configuration
$logo_path = ROOT_PATH . 'assets/images/logo.webp';
$logo_alt = 'Buffalo';
?>
<header class="header">
    <div class="container-fluid custom__container py-5">
        <div class="header__wrapper d-flex align-items-center justify-content-between">
            <div class="nav-left">
                <a href="<?php echo ROOT_PATH ?>" class="header__logo d-flex gap-2 text-decoration-none">
                    <img src="<?php echo $logo_path; ?>" alt="<?php echo $logo_alt; ?>">
                </a>
            </div>
        </div>
    </div>
</header>