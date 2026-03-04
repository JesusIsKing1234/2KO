<?php
require_once __DIR__ . '/../includes/layout.php';
$product = isset($_GET['product']) ? trim($_GET['product']) : 'your purchase';
render_head('Thank You | Artist Album Hub', 'Purchase success instructions and download delivery expectations.');
render_header('');
?>
<main id="main" class="section">
  <div class="container" style="max-width:820px;">
    <article class="card">
      <p class="eyebrow">Purchase Success</p>
      <h1>Thank you for supporting this project.</h1>
      <p><strong>Product:</strong> <?php echo htmlspecialchars($product); ?></p>
      <p class="notice"><strong>Download link emailed within 5 minutes.</strong></p>
      <p>1. Check inbox first, then spam/promotions.</p>
      <p>2. If not received, use resend-link instructions below.</p>
      <p>3. Need help now? Email <a href="mailto:<?php echo htmlspecialchars($site['support_email']); ?>"><?php echo htmlspecialchars($site['support_email']); ?></a>.</p>

      <h2>Resend link (placeholder)</h2>
      <p>PLACEHOLDER: Add Make/Zapier resend endpoint or form once automation is connected.</p>
      <form action="#" method="post">
        <label for="resend-email">Purchase email address</label>
        <input id="resend-email" type="email" name="email" required>
        <button class="btn" type="submit">Request resend link</button>
      </form>

      <h2>Automation-ready notes</h2>
      <p>PLACEHOLDER: Wire PayPal IPN / PayFast ITN to Make/Zapier webhook, then dispatch secure download URL.</p>
      <div class="cta-row">
        <a class="btn" href="/listen">Keep listening</a>
        <a class="btn btn-dark" href="/#join-list">Join mailing list</a>
      </div>
    </article>
  </div>
</main>
<?php render_footer(); ?>
