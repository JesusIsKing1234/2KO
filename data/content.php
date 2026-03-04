<?php

$site = [
    'name' => 'Artist Name',
    'tagline' => 'New worship album out now',
    'support_email' => 'support@artistname.com',
    'booking_email' => 'booking@artistname.com',
    'mailerlite_action' => 'https://assets.mailerlite.com/jsonp/000000/forms/000000000000000000/subscribe',
    'paypal_album_url' => 'https://www.paypal.com/paypalme/artistname/12',
    'payfast_album_url' => 'https://www.payfast.co.za/eng/process?merchant_id=10000100&merchant_key=46f0cd694581a',
    'paypal_support_url' => 'https://www.paypal.com/donate/?hosted_button_id=PLACEHOLDER',
    'payfast_support_url' => 'https://www.payfast.co.za/eng/process?merchant_id=10000100&merchant_key=46f0cd694581a&amount=',
    'og_default' => 'assets/images/og-default.jpg',
];

$releases = [
    [
        'slug' => 'first-worship-album',
        'title' => 'Album Title Placeholder',
        'short' => 'A worship record born from prayer, testimony, and local church nights.',
        'story' => 'PLACEHOLDER: Share the heart behind this album, how the songs were written, and the ministry vision.',
        'release_date' => '2026-05-01',
        'cover' => 'https://placehold.co/1000x1000?text=Album+Cover+1000x1000',
        'hero' => 'https://placehold.co/1800x1200?text=Hero+Image+1800x1200',
        'prices' => [
            'standard' => '$12 / R220',
            'supporter' => '$25 / R450',
            'team' => '$59 / R1050',
        ],
        'paypal_url' => 'https://www.paypal.com/paypalme/artistname/12',
        'payfast_url' => 'https://www.payfast.co.za/eng/process?merchant_id=10000100&merchant_key=46f0cd694581a',
    ],
];

$tracks = [
    [
        'title' => 'Song of Surrender',
        'release_slug' => 'first-worship-album',
        'number' => 1,
        'duration' => '4:26',
        'preview' => '#',
        'full' => '#',
        'is_single' => true,
        'lyrics' => 'PLACEHOLDER: Lyrics excerpt for Song of Surrender.',
    ],
    [
        'title' => 'Holy in This Place',
        'release_slug' => 'first-worship-album',
        'number' => 2,
        'duration' => '5:03',
        'preview' => '#',
        'full' => '',
        'is_single' => false,
        'lyrics' => 'PLACEHOLDER: Lyrics excerpt for Holy in This Place.',
    ],
    [
        'title' => 'You Are Enough',
        'release_slug' => 'first-worship-album',
        'number' => 3,
        'duration' => '3:58',
        'preview' => '#',
        'full' => '#',
        'is_single' => true,
        'lyrics' => 'PLACEHOLDER: Lyrics excerpt for You Are Enough.',
    ],
    [
        'title' => 'Light in the Valley',
        'release_slug' => 'first-worship-album',
        'number' => 4,
        'duration' => '4:11',
        'preview' => '#',
        'full' => '',
        'is_single' => false,
        'lyrics' => 'PLACEHOLDER: Lyrics excerpt for Light in the Valley.',
    ],
];

$products = [
    [
        'name' => 'Standard Album',
        'type' => 'album',
        'price' => '$12 / R220',
        'includes' => 'MP3 download.',
        'paypal_url' => 'https://www.paypal.com/paypalme/artistname/12',
        'payfast_url' => 'https://www.payfast.co.za/eng/process?merchant_id=10000100&merchant_key=46f0cd694581a',
        'delivery_notes' => 'Download link emailed within 5 minutes.',
    ],
    [
        'name' => 'Supporter Edition',
        'type' => 'supporter',
        'price' => '$25 / R450',
        'includes' => 'MP3 + WAV/FLAC + bonus acoustic.',
        'paypal_url' => 'https://www.paypal.com/paypalme/artistname/25',
        'payfast_url' => 'https://www.payfast.co.za/eng/process?merchant_id=10000100&merchant_key=46f0cd694581a',
        'delivery_notes' => 'Download link emailed within 5 minutes.',
    ],
    [
        'name' => 'Worship Team Pack',
        'type' => 'team',
        'price' => '$59 / R1050',
        'includes' => 'MP3 + WAV + chord charts + lyric PDF + stems placeholders.',
        'paypal_url' => 'https://www.paypal.com/paypalme/artistname/59',
        'payfast_url' => 'https://www.payfast.co.za/eng/process?merchant_id=10000100&merchant_key=46f0cd694581a',
        'delivery_notes' => 'Download link emailed within 5 minutes.',
    ],
    [
        'name' => 'Support / Donate',
        'type' => 'support',
        'price' => 'Custom amount (or select R100/R250/R500)',
        'includes' => 'Support the ministry and future releases.',
        'paypal_url' => 'https://www.paypal.com/donate/?hosted_button_id=PLACEHOLDER',
        'payfast_url' => 'https://www.payfast.co.za/eng/process?merchant_id=10000100&merchant_key=46f0cd694581a&amount=',
        'delivery_notes' => 'Thank-you confirmation emailed within 5 minutes.',
    ],
];

$videos = [
    [
        'title' => 'Live Worship Set - Placeholder',
        'youtube' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
        'category' => 'live',
    ],
    [
        'title' => 'Acoustic Session - Placeholder',
        'youtube' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
        'category' => 'acoustic',
    ],
    [
        'title' => 'Song Story - Placeholder',
        'youtube' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
        'category' => 'story',
    ],
];

$testimonials = [
    [
        'name' => 'Pastor Name',
        'role' => 'Local Church',
        'quote' => 'PLACEHOLDER: This music has deeply served our congregation in worship.',
    ],
    [
        'name' => 'Worship Leader Name',
        'role' => 'Conference Team',
        'quote' => 'PLACEHOLDER: Honest songs, strong theology, and real presence.',
    ],
];

$press_assets = [
    ['name' => 'EPK One Sheet', 'type' => 'pdf', 'url' => '#'],
    ['name' => 'Press Photos', 'type' => 'zip', 'url' => '#'],
    ['name' => 'Artist Bio', 'type' => 'doc', 'url' => '#'],
];
