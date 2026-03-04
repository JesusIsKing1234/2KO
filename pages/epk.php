<?php
require_once __DIR__ . '/../includes/layout.php';
render_head('EPK | Artist Album Hub', 'Press kit with photos, bio, videos, and contact details.');
render_header('/epk');
?>
<main id="main" class="section">
  <div class="container split-2">
    <article class="card">
      <p class="eyebrow">Electronic Press Kit</p>
      <h1>EPK</h1>
      <p>PLACEHOLDER: short approved bio for press and collaborators.</p>
      <div class="cta-row">
        <a class="btn" href="/videos">Video links</a>
        <a class="btn" href="/about">Long bio</a>
      </div>
    </article>
    <article class="card">
      <h2>Press assets</h2>
      <?php foreach ($press_assets as $asset): ?>
      <p><a href="<?php echo htmlspecialchars($asset['url']); ?>"><?php echo htmlspecialchars($asset['name']); ?></a> (<?php echo htmlspecialchars($asset['type']); ?>)</p>
      <?php endforeach; ?>
      <p>Press contact: <a href="mailto:<?php echo htmlspecialchars($site['booking_email']); ?>"><?php echo htmlspecialchars($site['booking_email']); ?></a></p>
    </article>
  </div>
</main>
<?php render_mobile_cta(); ?>
<?php render_footer(); ?>
