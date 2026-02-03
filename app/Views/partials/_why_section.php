<section class="why-make-section-custom section text-white">
    <div class="row align-items-center g-0 justify-content-start">
        <div class="col-auto">
            <div class="pdf-image-wrapper-large">
                <div class="pdf-union-layer-large">
                    <img src="<?= base_url('assets/images/Union.png'); ?>"
                        alt="Union"
                        class="pdf-union-img">
                </div>

                <img src="<?= base_url('assets/images/HTMLtoPDFicon.svg'); ?>"
                    class="pdf-icon-layer-large"
                    alt="C++ PDF Icon"
                    title="HTML to PDF icon">
            </div>
        </div>

        <div class="col pdf-text-col-fixed">
            <h2 class="why-title fw-bolder display-6 mb-4">
                Why make a <span class="why-title-accent">C++ PDF Library</span>
            </h2>

            <div class="description-text">
                <?php foreach ($why_section['paragraphs'] as $index => $paragraph): ?>
                    <p class="why-paragraph">
                        <?= esc($paragraph); ?>
                    </p>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>