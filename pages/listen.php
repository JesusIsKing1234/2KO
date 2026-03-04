<?php
require_once __DIR__ . '/../includes/layout.php';
render_head('Listen | Artist Album Hub', 'All tracks and singles with preview-first listening and strong buy CTA.');
render_header('/listen');
?>
<main id="main" class="section">
  <div class="container">
    <p class="eyebrow">Listen</p>
    <h1>All tracks and singles</h1>
    <p>Preview every track and jump to checkout whenever you are ready.</p>
    <div class="split-2">
      <?php foreach ($tracks as $track): ?>
      <article class="card track">
        <strong><?php echo (int)$track['number']; ?>. <?php echo htmlspecialchars($track['title']); ?></strong>
        <small><?php echo htmlspecialchars($track['duration']); ?></small>
        <div class="audio-placeholder">Preview player placeholder (30-60 sec)</div>
        <?php if (!empty($track['full'])): ?><span class="badge">Full single available</span><?php endif; ?>
        <div class="cta-row">
          <a class="btn" href="/shop">Buy album</a>
          <a class="btn" href="/album">Album story</a>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</main>
<?php render_mobile_cta(); ?>
<?php render_footer(); ?>
