<?php
require_once __DIR__ . '/includes/layout.php';
render_head('Privacy Policy | Artist Album Hub', 'Privacy policy placeholder for mailing list and checkout flows.');
render_header('');
?>
<main id="main" class="section">
  <div class="container card">
    <h1>Privacy Policy</h1>
    <p>PLACEHOLDER: We collect name/email for updates and purchase support.</p>
    <p>PLACEHOLDER: Payment details are processed by PayPal and PayFast; we do not store card data.</p>
    <p>PLACEHOLDER: Contact us at <a href="mailto:<?php echo htmlspecialchars($site['support_email']); ?>"><?php echo htmlspecialchars($site['support_email']); ?></a>.</p>
  </div>
</main>
<?php render_footer(); ?>
