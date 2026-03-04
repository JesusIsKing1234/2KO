<?php
require_once __DIR__ . '/../includes/layout.php';

$release = $releases[0];
render_head('Home | Artist Album Hub', 'Listen to worship previews, buy directly, and join the list for future releases.');
render_header('/');
?>
<main id="main">
    <section class="hero">
        <div class="container hero-grid">
            <div>
                <p class="eyebrow">New Worship Release</p>
                <h1>PLACEHOLDER: Album headline that speaks to worship and hope.</h1>
                <p>Listen to previews, buy direct, and join the list for future songs, devotionals, and live worship updates.</p>
                <div class="cta-row">
                    <a class="btn btn-brand" href="/listen">Listen now</a>
                    <a class="btn btn-dark" href="/shop">Buy album</a>
                    <a class="btn" href="#join-list">Join the list</a>
                </div>
                <p class="notice" style="margin-top:1rem;">Global checkout: PayPal (USD/EUR/GBP). South Africa: PayFast (ZAR + Instant EFT).</p>
            </div>
            <img class="hero-image" src="<?php echo htmlspecialchars($release['hero']); ?>" alt="Artist worship portrait placeholder image">
        </div>
    </section>

    <section class="section">
        <div class="container split-2">
            <article class="card">
                <p class="eyebrow">Featured Release</p>
                <h2><?php echo htmlspecialchars($release['title']); ?></h2>
                <p><?php echo htmlspecialchars($release['short']); ?></p>
                <p><span class="badge">Standard <?php echo htmlspecialchars($release['prices']['standard']); ?></span> <span class="badge">Supporter <?php echo htmlspecialchars($release['prices']['supporter']); ?></span></p>
                <div class="cta-row">
                    <a class="btn" href="/album">View album page</a>
                    <a class="btn btn-dark" href="/shop">Buy now</a>
                </div>
            </article>
            <article class="card">
                <p class="eyebrow">Image Placeholder Specs</p>
                <p><strong>Hero:</strong> 1800x1200 (landscape)</p>
                <p><strong>Album cover:</strong> 1000x1000 (square)</p>
                <p><strong>Portrait:</strong> 1400x1750 (4:5)</p>
                <p><strong>Video thumbnail:</strong> 1280x720</p>
                <p><strong>OG/social image:</strong> 1200x630</p>
            </article>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <p class="eyebrow">Listen Previews</p>
            <h2>Preview tracks before you buy.</h2>
            <div class="split-2">
                <?php foreach (array_slice($tracks, 0, 4) as $track): ?>
                    <article class="card track">
                        <div>
                            <strong><?php echo (int)$track['number']; ?>. <?php echo htmlspecialchars($track['title']); ?></strong>
                            <small><?php echo htmlspecialchars($track['duration']); ?></small>
                        </div>
                        <div class="audio-placeholder">Preview player placeholder (30-60 sec)</div>
                        <?php if ($track['is_single']): ?><span class="badge">Single available</span><?php endif; ?>
                        <div class="cta-row">
                            <a class="btn" href="/listen">Listen</a>
                            <a class="btn btn-dark" href="/shop">Buy</a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container split-2">
            <article class="card">
                <p class="eyebrow">Watch</p>
                <h2>Live sets and acoustic moments</h2>
                <iframe class="video" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Featured worship video placeholder" allowfullscreen></iframe>
                <div class="cta-row"><a class="btn" href="/videos">View all videos</a></div>
            </article>
            <article class="card">
                <p class="eyebrow">The Heart Behind The Songs</p>
                <p>PLACEHOLDER: Share testimony, scripture anchors, and pastoral intent for these songs.</p>
                <p class="kpi">"PLACEHOLDER QUOTE"</p>
                <p>Use this space for a one-paragraph editorial statement.</p>
            </article>
        </div>
    </section>

    <section class="section" id="join-list">
        <div class="container split-2">
            <article class="card">
                <p class="eyebrow">Join The List</p>
                <h2>Email first access for future releases</h2>
                <form action="<?php echo htmlspecialchars($site['mailerlite_action']); ?>" method="post" aria-label="MailerLite signup form">
                    <div>
                        <label for="ml-name">First name (optional)</label>
                        <input id="ml-name" name="fields[name]" type="text" autocomplete="given-name">
                    </div>
                    <div>
                        <label for="ml-email">Email address</label>
                        <input id="ml-email" name="fields[email]" type="email" required autocomplete="email">
                    </div>
                    <button class="btn btn-brand" type="submit">Join now</button>
                    <p>By subscribing, you agree to our <a href="/privacy">Privacy Policy</a>.</p>
                </form>
            </article>
            <article class="card">
                <p class="eyebrow">Trust Signals</p>
                <?php foreach ($testimonials as $t): ?>
                    <blockquote>
                        <p><?php echo htmlspecialchars($t['quote']); ?></p>
                        <cite><?php echo htmlspecialchars($t['name'] . ' - ' . $t['role']); ?></cite>
                    </blockquote>
                <?php endforeach; ?>
                <div class="cta-row">
                    <a class="btn" href="/book">Book the artist</a>
                    <a class="btn" href="/epk">View EPK</a>
                </div>
            </article>
        </div>
    </section>
</main>
<?php render_mobile_cta(); ?>
<?php render_footer(); ?>
