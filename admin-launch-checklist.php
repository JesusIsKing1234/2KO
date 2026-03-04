<?php
require_once __DIR__ . '/includes/layout.php';
render_head('Launch Checklist | Hidden Admin', 'Pre-launch QA, SEO, compression, and checkout test checklist.');
render_header('');
?>
<main id="main" class="section">
  <div class="container card">
    <h1>Launch Checklist</h1>
    <p><strong>Media:</strong> compress hero/cover/video thumbs; confirm dimensions.</p>
    <p><strong>SEO:</strong> titles, meta descriptions, OG images, clean URLs.</p>
    <p><strong>Forms:</strong> MailerLite embed submit + consent line + privacy link.</p>
    <p><strong>Checkout:</strong> test PayPal global and PayFast SA links on all product cards.</p>
    <p><strong>Success flow:</strong> confirm Thank You messaging and support email visibility.</p>
    <p><strong>Accessibility:</strong> keyboard tab order, focus states, color contrast, labels.</p>
    <p><strong>Performance:</strong> lazy-load media where possible; remove unused embeds.</p>
    <p><strong>Content replace:</strong> swap all PLACEHOLDER copy, images, and product URLs.</p>
  </div>
</main>
<?php render_footer(); ?>
