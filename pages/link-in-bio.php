<?php
require_once __DIR__ . '/../includes/layout.php';
render_head('Link in Bio | Artist Album Hub', 'Quick access page for listen, buy, watch, and book links.');
render_header('/link-in-bio');
?>
<main id="main" class="section">
  <div class="container" style="max-width:720px;">
    <article class="card">
      <p class="eyebrow">Link In Bio</p>
      <h1><?php echo htmlspecialchars($site['name']); ?></h1>
      <p>Direct paths for listeners, worship teams, and event organisers.</p>
      <div class="split-2">
        <a class="btn btn-dark" href="/listen">Listen previews</a>
        <a class="btn btn-brand" href="/shop">Buy album</a>
        <a class="btn" href="/videos">Watch videos</a>
        <a class="btn" href="/album">Album story</a>
        <a class="btn" href="/book">Book</a>
        <a class="btn" href="/epk">EPK</a>
      </div>
    </article>
  </div>
</main>
<?php render_footer(); ?>
