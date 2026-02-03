<!-- SECTION 1 -->
<section class="text-white py-5 section features-hero ">
    <div class="row mt-5">
        <div class="col-12 position-relative features-hero-inner">

            <div class="text-center mb-5 ">
                <div class="position-relative d-inline-block">
                    <h1 class="fw-bolder display-6 features-title">
                        <?= esc($features['title']); ?>
                    </h1>

                    <div class="position-absolute d-none d-lg-block features-float-img">
                        <img src="<?= base_url($features['image']); ?>" alt="Coming Soon">
                    </div>
                </div>
            </div>

            <div class="mb-2 features-bullets">
                <?php foreach ($features['bullets'] as $i => $bullet): ?>
                    <div class="d-flex features-bullet-item">
                        <span class="bullet-hash">#</span>
                        <span class="bullet-text"><?= esc($bullet); ?></span>

                        <?php if ($i < count($features['bullets']) - 1): ?>
                            <div class="vr mx-2 d-none d-lg-block features-divider"></div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</section>

<!-- SECTION 2 -->
<section class="section py-5 bg-dark bg-opacity-25 d-flex justify-content-center">
    <div class="features-description-container w-100" style="max-width: 73.125rem;"> <!-- 1170px -->
        <?php foreach ($features['description'] as $text): ?>
            <p class="features-description-text mb-3">
                <?= $text; ?>
            </p>
        <?php endforeach; ?>
    </div>
</section>

