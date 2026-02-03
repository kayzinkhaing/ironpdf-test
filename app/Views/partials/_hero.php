<!-- HERO SECTION -->
<section class="hero-master text-white section">
    <div class="row position-relative">

        <div class="col-lg-7 mt-5">
            <!-- Add animation classes to elements -->
            <img src="<?= base_url('assets/images/ironpdf.svg'); ?>"
                alt="IronPDF"
                class="mb-4 img-fluid hero-logo animate-fade-in"
                style="max-width: 200px;"
                data-animation="fadeInUp"
                data-delay="0">

            <p class="hero-eyebrow mb-2 mt-3 animate-text"
                data-animation="slideInLeft"
                data-delay="200">
                <?= esc($hero['eyebrow']); ?>
            </p>

            <div class="hero-title mt-3 animate-text"
                data-animation="slideInLeft"
                data-delay="400">
                <?= esc($hero['title']); ?>
            </div>

            <div class="hero-title text-accent animate-text"
                data-animation="slideInLeft"
                data-delay="600">
                <?= esc($hero['subtitle']); ?>
            </div>

            <p class="status-badge d-inline-block rounded-pill text-white mt-3 animate-fade-in"
                data-animation="bounceIn"
                data-delay="800">
                <?= esc($hero['status']); ?>
            </p>
        </div>

        <!-- RIGHT VISUAL -->
        <div class="col-lg-5 order-lg-2 order-1">
            <picture class="animate-visual"
                data-animation="fadeInRight"
                data-delay="300">
                <!-- WebP first (preferred) -->
                <source
                    srcset="<?= base_url('assets/images/IMAGE.webp'); ?>"
                    title="IronPDF for C++"
                    alt="IronPDF for C++"
                    type="image/webp">

                <!-- Fallback for browsers without WebP support -->
                <img
                    src="<?= base_url('assets/images/IMAGE.png'); ?>"
                    alt="C++ Visual"
                    title="IronPDF for C++"
                    class="hero-img-large img-fluid"
                    loading="lazy">
            </picture>
        </div>

    </div>
</section>

<!-- CTA SECTION -->
<section class="hero-rectangle text-white py-5 section">
    <div class="row">
        <div class="col-lg-10">
            <h2 class="cta-title-exact mb-2 text-center text-lg-start animate-cta"
                data-animation="fadeInUp"
                data-delay="100">
                <?= esc($primary_cta['title']); ?>
            </h2>
            
            <p class="fw-bold font-size-lead mb-4 text-center text-lg-start animate-cta"
                data-animation="fadeInUp"
                data-delay="300">
                <?= esc($primary_cta['subtitle']); ?>
            </p>

            <div class="col-12 col-md-10 col-lg-8 p-0 mx-auto mx-lg-0">
                <form class="mb-4 animate-cta"
                    data-animation="fadeInUp"
                    data-delay="500">
                    <div class="cta-pill-container shadow-sm">
                        <input type="email"
                            class="cta-input"
                            placeholder="Enter email address"
                            required>

                        <button class="btn-cta-submit text-lowercase" type="submit">
                            <?= esc($primary_cta['button']); ?>
                            <i class="bi bi-caret-right-fill ms-2"></i>
                        </button>
                    </div>
                </form>
            </div>

            <div class="status-group d-flex align-items-center flex-wrap gap-3 animate-cta"
                data-animation="fadeInUp"
                data-delay="700">
                <span class="badge bg-purple bg-opacity-50 rounded-pill px-3 py-2">
                    # Coming Soon
                </span>
                <p class="mb-0 opacity-75 small"><?= $primary_cta['note']; ?></p>
            </div>
        </div>
    </div>
</section>