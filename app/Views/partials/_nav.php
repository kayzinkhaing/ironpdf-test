<nav class="navbar navbar-expand-lg">
    <div class="nav-fixed d-flex align-items-center justify-content-between w-100">

        <div class="d-flex align-items-center gap-4" style="margin-left: 0.875rem;">

            <a class="navbar-brand m-0" href="/">
                <img src="<?= base_url('assets/images/LOGO.png'); ?>"
                     alt="IronPDF"
                     class="nav-logo">
            </a>

            <div class="collapse navbar-collapse d-none d-lg-block" id="desktopMenu">
                <ul class="navbar-nav nav-menu flex-row gap-3 text-uppercase fw-bold lh-1">
                    <?php foreach ($navigation['menu'] as $item): ?>
                        <li class="nav-item">
                            <a href="#"
                               class="nav-link nav-link-custom p-0">
                                <?= esc($item); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <button class="navbar-toggler d-lg-none me-3"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#mobileMenu"
                aria-controls="mobileMenu"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse d-lg-none" id="mobileMenu">
            <ul class="navbar-nav p-3 text-uppercase fw-bold">
                <?php foreach ($navigation['menu'] as $item): ?>
                    <li class="nav-item border-bottom border-secondary py-2">
                        <a href="#"
                           class="nav-link text-white">
                            <?= esc($item); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

    </div>
</nav>
