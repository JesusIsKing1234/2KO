<?php
require_once __DIR__ . '/../data/content.php';

function render_head(string $title, string $description, string $canonical = ''): void
{
    global $site;
    $canon = $canonical !== '' ? $canonical : $_SERVER['REQUEST_URI'] ?? '/';
    ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo htmlspecialchars($title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($description); ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($description); ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo htmlspecialchars($site['og_default']); ?>">
    <link rel="canonical" href="<?php echo htmlspecialchars($canon); ?>">
    <link rel="stylesheet" href="/assets/css/styles.css">
</head>
<body>
<a class="skip-link" href="#main">Skip to content</a>
<?php
}

function render_header(string $current = ''): void
{
    global $site;
    $nav = [
        'Home' => '/',
        'Album' => '/album',
        'Listen' => '/listen',
        'Shop/Support' => '/shop',
        'Videos' => '/videos',
        'About' => '/about',
        'Book' => '/book',
        'EPK' => '/epk',
        'Link in Bio' => '/link-in-bio',
    ];
    ?>
<header class="site-header">
    <div class="container nav-wrap">
        <a class="brand" href="/"><?php echo htmlspecialchars($site['name']); ?></a>
        <button class="menu-toggle" aria-expanded="false" aria-controls="site-nav">Menu</button>
        <nav id="site-nav" aria-label="Primary">
            <ul>
                <?php foreach ($nav as $label => $path): ?>
                    <li><a <?php echo $current === $path ? 'aria-current="page"' : ''; ?> href="<?php echo $path; ?>"><?php echo $label; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </nav>
        <a class="btn btn-dark" href="/shop">Buy</a>
    </div>
</header>
<?php
}

function render_mobile_cta(): void
{
    ?>
<div class="mobile-cta" aria-label="Quick actions">
    <a href="/listen">Listen</a>
    <a href="/shop">Buy</a>
    <a href="/#join-list">Join</a>
</div>
<?php
}

function render_footer(): void
{
    global $site;
    ?>
<footer class="site-footer">
    <div class="container footer-grid">
        <div>
            <h3><?php echo htmlspecialchars($site['name']); ?></h3>
            <p><?php echo htmlspecialchars($site['tagline']); ?></p>
        </div>
        <div>
            <h4>Explore</h4>
            <a href="/album">Album</a>
            <a href="/listen">Listen</a>
            <a href="/videos">Videos</a>
            <a href="/book">Book</a>
        </div>
        <div>
            <h4>Legal</h4>
            <a href="/privacy">Privacy Policy</a>
            <a href="/terms">Terms</a>
        </div>
        <div>
            <h4>Support</h4>
            <p><a href="mailto:<?php echo htmlspecialchars($site['support_email']); ?>"><?php echo htmlspecialchars($site['support_email']); ?></a></p>
            <p><a href="/thank-you?product=album">Purchase success page</a></p>
        </div>
    </div>
</footer>
<script src="/assets/js/main.js"></script>
</body>
</html>
<?php
}
