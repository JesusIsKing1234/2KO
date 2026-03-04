<?php
require_once __DIR__ . '/includes/layout.php';
render_head('About / Ministry | Artist Album Hub', 'Bio, mission, testimony, and ministry context.');
render_header('about.php');
?>
<main id="main" class="section">
  <div class="container split-2">
    <article class="card">
      <p class="eyebrow">About / Ministry</p>
      <h1>PLACEHOLDER: Artist bio headline</h1>
      <p>PLACEHOLDER: Long-form bio with faith journey, local church context, and ministry mission.</p>
      <p>PLACEHOLDER: Testimony and vision statement.</p>
    </article>
    <article class="card">
      <h2>Endorsements</h2>
      <?php foreach ($testimonials as $t): ?>
      <blockquote>
        <p><?php echo htmlspecialchars($t['quote']); ?></p>
        <cite><?php echo htmlspecialchars($t['name']); ?>, <?php echo htmlspecialchars($t['role']); ?></cite>
      </blockquote>
      <?php endforeach; ?>
    </article>
  </div>
</main>
<?php render_mobile_cta(); ?>
<?php render_footer(); ?>
