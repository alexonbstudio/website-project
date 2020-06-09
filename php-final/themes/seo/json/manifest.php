<?php header('Content-Type: application/json; charset=utf-8'); ?>
{
    "name": "<?php echo $sites['name']; ?>",
    "short_name": "<?php echo $general['index']['title']; ?>",
	"description": "<?php echo $general['index']['description']; ?>",
	"display": "standalone",
	"start_url": "/",
    "icons": [
        {
            "src": "<?php echo $protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'; ?>pinned/apple-touch-icon-57x57.png",
            "sizes": "57x57",
            "type": "image/png"
        },
        {
            "src": "<?php echo $protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'; ?>pinned/apple-touch-icon-60x60.png",
            "sizes": "60x60",
            "type": "image/png"
        },
        {
            "src": "<?php echo $protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'; ?>pinned/apple-touch-icon-72x72.png",
            "sizes": "72x72",
            "type": "image/png"
        },
        {
            "src": "<?php echo $protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'; ?>pinned/apple-touch-icon-76x76.png",
            "sizes": "76x76",
            "type": "image/png"
        },
        {
            "src": "<?php echo $protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'; ?>pinned/apple-touch-icon-114x114.png",
            "sizes": "114x114",
            "type": "image/png"
        },
        {
            "src": "<?php echo $protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'; ?>pinned/mstile-70x70.png",
            "sizes": "70x70",
            "type": "image/png"
        },
        {
            "src": "<?php echo $protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'; ?>pinned/mstile-144x144.png",
            "sizes": "144x144",
            "type": "image/png"
        },
        {
            "src": "<?php echo $protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'; ?>pinned/mstile-150x150.png",
            "sizes": "150x150",
            "type": "image/png"
        },
        {
            "src": "<?php echo $protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'; ?>pinned/mstile-310x150.png",
            "sizes": "310x150",
            "type": "image/png"
        },
        {
            "src": "<?php echo $protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'; ?>pinned/mstile-310x310.png",
            "sizes": "310x310",
            "type": "image/png"
        },
        {
            "src": "<?php echo $protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'; ?>pinned/android-chrome-192x192.png",
            "sizes": "192x192",
            "type": "image/png"
        },
        {
            "src": "<?php echo $protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'; ?>pinned/android-chrome-512x512.png",
            "sizes": "512x512",
            "type": "image/png"
        },
        {
            "src": "<?php echo $protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'; ?>pinned/favicon-16x16.png",
            "sizes": "16x16",
            "type": "image/png"
        },
        {
            "src": "<?php echo $protocols.'://'.$sites['domain'].'/'.$images['dir'].'/'; ?>pinned/favicon-32x32.png",
            "sizes": "32x32",
            "type": "image/png"
        }
    ],
    "theme_color": "#ffffff",
    "background_color": "#ffffff"
}
