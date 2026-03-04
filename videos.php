<?php
require_once __DIR__ . '/includes/layout.php';
render_head('Videos | Artist Album Hub', 'Live worship, acoustic sessions, and song stories.');
render_header('videos.php');
?>
<main id="main" class="section">
  <div class="container">
    <p class="eyebrow">Videos</p>
    <h1>Live, acoustic, and story videos</h1>
    <div class="split-2">
      <?php foreach ($videos as $video): ?>
      <article class="card">
        <h2><?php echo htmlspecialchars($video['title']); ?></h2>
        <iframe class="video" src="<?php echo htmlspecialchars($video['youtube']); ?>" title="<?php echo htmlspecialchars($video['title']); ?>" allowfullscreen></iframe>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</main>
<?php render_mobile_cta(); ?>
<?php render_footer(); ?>
