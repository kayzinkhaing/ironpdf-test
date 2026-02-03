<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title & Meta Description for SEO -->
    <title>IronPDF – PDF Library for C++ Developers | Generate & Edit PDFs</title>
    <meta name="description" content="IronPDF provides a fast, reliable PDF library for C++ developers. Generate, edit, and secure PDFs with ease.">

    <!-- Open Graph / Social Sharing -->
    <meta property="og:title" content="IronPDF – PDF Library for C++ Developers">
    <meta property="og:description" content="Generate and edit PDFs easily with IronPDF for C++">
    <meta property="og:image" content="<?= base_url('assets/images/og-image.png'); ?>">
    <meta property="og:url" content="<?= base_url(); ?>">
    <meta property="og:type" content="website">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="IronPDF – PDF Library for C++ Developers">
    <meta name="twitter:description" content="Generate and edit PDFs easily with IronPDF for C++">
    <meta name="twitter:image" content="<?= base_url('assets/images/og-image.png'); ?>">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS (bundled by Vite) -->
    <link rel="stylesheet" href="<?= base_url('build/css.min.css'); ?>">
</head>

<body>
    <!-- Main content -->
    <main>
        <?= $this->renderSection('content'); ?>
    </main>

    <!-- Bootstrap JS Bundle (deferred for performance) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" defer></script>

    <!-- Custom JS (deferred) -->
    <script src="<?= base_url('build/js.min.js'); ?>" defer></script>

    <!-- Structured Data for SEO (JSON-LD) -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "SoftwareApplication",
            "name": "IronPDF",
            "url": "<?= base_url(); ?>",
            "description": "PDF library for C++ developers to generate and edit PDFs",
            "applicationCategory": "DeveloperTool",
            "operatingSystem": "Windows, MacOS, Linux"
        }
    </script>
</body>

</html>