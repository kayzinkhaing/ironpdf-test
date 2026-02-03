<section class="section bg-dark text-white pt-5 pb-0">
    <div class="container"> <div class="mb-5">
            <h1 class="fw-bolder mb-4 display-6">
                <span class="text-white">Early Access to</span>
                <span class="why-title-accent">C++ PDF Library</span>
            </h1>
            <p class="features-intro"><?= esc($early_access['intro']); ?></p>

            <div class="ea-card-row">
                <?php foreach ($early_access['logos'] as $logo): ?>
                    <div class="pill-card bg-black">
                        <span class="pill-badge <?= $logo['badgeClass'] === 'released' ? 'badge-released' : 'badge-coming' ?>">
                            <?= esc($logo['badge']); ?>
                        </span>
                        <img src="<?= base_url($logo['img']); ?>" alt="<?= esc($logo['name']); ?>" class="pill-img">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="beta-program-rectangle bg-black ">
        <div class="beta-content-wrapper">
            <div class="d-flex flex-column align-items-center justify-content-center gap-4">
                <h2 class="beta-heading text-center">
                    Sign up to our <span class="beta-accent">Beta Program</span>
                </h2>
                <form class="beta-form-container-white center">
                    <input type="email" class="beta-input-dark" placeholder="Enter email address" required>
                    <button class="beta-btn" type="submit">
                        Sign up now <i class="bi bi-chevron-right ms-1"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>