<?php
require_once __DIR__ . '/../includes/layout.php';
render_head('Page Not Found | Artist Album Hub', 'The page you are looking for does not exist.');
render_header('');
?>
<main id="main" class="section">
  <div class="container card">
    <h1>404: Page not found</h1>
    <p>The page you requested could not be found.</p>
    <div class="cta-row">
      <a class="btn btn-dark" href="/">Back home</a>
      <a class="btn" href="/album">View album</a>
    </div>
  </div>
</main>
<?php render_footer(); ?>
