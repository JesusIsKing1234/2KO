<?php
require_once __DIR__ . '/../includes/layout.php';

$release = $releases[0];
$album_tracks = array_values(array_filter($tracks, static fn($t) => $t['release_slug'] === $release['slug']));
render_head('Album | Artist Album Hub', 'Album story, previews, editions, and direct checkout for global and South African buyers.');
render_header('/album');
?>
<main id="main">
    <section class="hero">
        <div class="container hero-grid">
            <div>
                <p class="eyebrow">Flagship Release</p>
                <h1><?php echo htmlspecialchars($release['title']); ?></h1>
                <p><?php echo htmlspecialchars($release['short']); ?></p>
                <p><strong>Released:</strong> <?php echo htmlspecialchars($release['release_date']); ?></p>
                <div class="cta-row">
                    <a class="btn btn-dark" href="/shop">Buy now</a>
                    <a class="btn" href="/listen">Listen previews</a>
                    <a class="btn" href="#join-list">Join list</a>
                </div>
            </div>
            <img class="hero-image" src="<?php echo htmlspecialchars($release['cover']); ?>" alt="Album cover placeholder">
        </div>
    </section>

    <section class="section">
        <div class="container split-2">
            <article class="card">
                <p class="eyebrow">Album Story</p>
                <h2>Why these songs exist</h2>
                <p><?php echo htmlspecialchars($release['story']); ?></p>
                <p>PLACEHOLDER: add scriptures, season context, and listener invitation.</p>
            </article>
            <article class="card">
                <p class="eyebrow">Delivery V1</p>
                <h2>What happens after purchase</h2>
                <p>Download link emailed within 5 minutes.</p>
                <p>Check spam/promotions first.</p>
                <p>If not received, use the resend-link instructions on the success page or email <a href="mailto:<?php echo htmlspecialchars($site['support_email']); ?>"><?php echo htmlspecialchars($site['support_email']); ?></a>.</p>
            </article>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <p class="eyebrow">Tracklist + Previews</p>
            <h2>Listen to each track preview</h2>
            <div class="split-2">
                <?php foreach ($album_tracks as $track): ?>
                    <article class="card track">
                        <div><strong><?php echo (int)$track['number']; ?>. <?php echo htmlspecialchars($track['title']); ?></strong> <small><?php echo htmlspecialchars($track['duration']); ?></small></div>
                        <div class="audio-placeholder">Audio preview player placeholder</div>
                        <details>
                            <summary>View lyrics snippet</summary>
                            <p><?php echo htmlspecialchars($track['lyrics']); ?></p>
                        </details>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <p class="eyebrow">Choose Your Edition</p>
            <h2>Direct support with instant checkout options</h2>
            <div class="pricing-grid">
                <?php foreach (array_slice($products, 0, 3) as $product): ?>
                    <article class="card">
                        <h3><?php echo htmlspecialchars($product['name']); ?></h3>
                        <p class="price"><?php echo htmlspecialchars($product['price']); ?></p>
                        <p><?php echo htmlspecialchars($product['includes']); ?></p>
                        <p class="badge"><?php echo htmlspecialchars($product['delivery_notes']); ?></p>
                        <div class="cta-row">
                            <a class="btn" href="<?php echo htmlspecialchars($product['paypal_url']); ?>">PayPal (Global)</a>
                            <a class="btn" href="<?php echo htmlspecialchars($product['payfast_url']); ?>">PayFast (SA)</a>
                            <a class="btn btn-dark" href="/thank-you?product=<?php echo urlencode(strtolower(str_replace(' ', '-', $product['name']))); ?>">View success page</a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container split-2">
            <article class="card">
                <h3>FAQ</h3>
                <p><strong>How do I receive files?</strong> You get a download link by email in 5 minutes.</p>
                <p><strong>What if I don\'t receive it?</strong> Check spam/promotions, then contact support.</p>
                <p><strong>Can worship teams use these songs?</strong> PLACEHOLDER licensing text.</p>
            </article>
            <article class="card" id="join-list">
                <h3>Stay connected</h3>
                <p>Get next releases and devotionals first.</p>
                <form action="<?php echo htmlspecialchars($site['mailerlite_action']); ?>" method="post" aria-label="MailerLite album signup">
                    <label for="join-email">Email address</label>
                    <input id="join-email" name="fields[email]" type="email" required>
                    <button class="btn btn-brand" type="submit">Join the list</button>
                    <p>Consent + privacy: <a href="/privacy">Privacy Policy</a>.</p>
                </form>
            </article>
        </div>
    </section>
</main>
<?php render_mobile_cta(); ?>
<?php render_footer(); ?>
