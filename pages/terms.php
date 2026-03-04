<?php
require_once __DIR__ . '/../includes/layout.php';
render_head('Terms | Artist Album Hub', 'Terms and download policy placeholder.');
render_header('');
?>
<main id="main" class="section">
  <div class="container card">
    <h1>Terms (Payments/Downloads)</h1>
    <p>PLACEHOLDER: digital goods policy, permitted use, and support window.</p>
    <p>Delivery expectation: download link emailed within 5 minutes. If not received, check spam/promotions and contact support.</p>
    <p>Support: <a href="mailto:<?php echo htmlspecialchars($site['support_email']); ?>"><?php echo htmlspecialchars($site['support_email']); ?></a>.</p>
  </div>
</main>
<?php render_footer(); ?>
