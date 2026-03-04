<?php
require_once __DIR__ . '/../includes/layout.php';
render_head('Shop / Support | Artist Album Hub', 'Buy the album directly or support with PayPal/PayFast.');
render_header('/shop');
?>
<main id="main" class="section">
  <div class="container">
    <p class="eyebrow">Shop / Support</p>
    <h1>Direct support, no streaming middleman</h1>
    <p>Choose your edition, checkout in your preferred currency, and receive delivery details on the success page.</p>
    <div class="pricing-grid">
      <?php foreach ($products as $product): ?>
      <article class="card">
        <h2><?php echo htmlspecialchars($product['name']); ?></h2>
        <p class="price"><?php echo htmlspecialchars($product['price']); ?></p>
        <p><?php echo htmlspecialchars($product['includes']); ?></p>
        <p class="badge"><?php echo htmlspecialchars($product['delivery_notes']); ?></p>
        <div class="cta-row">
          <a class="btn" href="<?php echo htmlspecialchars($product['paypal_url']); ?>">PayPal (Global)</a>
          <a class="btn" href="<?php echo htmlspecialchars($product['payfast_url']); ?>">PayFast (SA)</a>
          <a class="btn btn-dark" href="/thank-you?product=<?php echo urlencode(strtolower(str_replace(' ', '-', $product['name']))); ?>">Success instructions</a>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
    <section class="section" id="join-list">
      <article class="card">
        <h3>Join list for future releases</h3>
        <form action="<?php echo htmlspecialchars($site['mailerlite_action']); ?>" method="post">
          <label for="shop-email">Email</label>
          <input id="shop-email" name="fields[email]" type="email" required>
          <button class="btn btn-brand" type="submit">Join</button>
          <p>Consent line: by subscribing you agree to our <a href="/privacy">Privacy Policy</a>.</p>
        </form>
      </article>
    </section>
  </div>
</main>
<?php render_mobile_cta(); ?>
<?php render_footer(); ?>
