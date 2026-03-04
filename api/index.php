<?php

declare(strict_types=1);

$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$path = rtrim((string)$path, '/');
$path = $path === '' ? '/' : $path;

$routes = [
    '/' => __DIR__ . '/../pages/index.php',
    '/album' => __DIR__ . '/../pages/album.php',
    '/listen' => __DIR__ . '/../pages/listen.php',
    '/shop' => __DIR__ . '/../pages/shop.php',
    '/videos' => __DIR__ . '/../pages/videos.php',
    '/about' => __DIR__ . '/../pages/about.php',
    '/book' => __DIR__ . '/../pages/book.php',
    '/epk' => __DIR__ . '/../pages/epk.php',
    '/link-in-bio' => __DIR__ . '/../pages/link-in-bio.php',
    '/thank-you' => __DIR__ . '/../pages/thank-you.php',
    '/terms' => __DIR__ . '/../pages/terms.php',
    '/privacy' => __DIR__ . '/../pages/privacy.php',
    '/admin-launch-checklist' => __DIR__ . '/../pages/admin-launch-checklist.php',
    '/home' => __DIR__ . '/../pages/index.php',
];

if (isset($routes[$path])) {
    require $routes[$path];
    return;
}

http_response_code(404);
require __DIR__ . '/../pages/404.php';
