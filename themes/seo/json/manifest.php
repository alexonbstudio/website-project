<?php header('Content-Type: application/json; charset=utf-8'); ?>
{
    "name": "<?php echo $sites['name']; ?>",
    "short_name": "<?php echo $general['index']['title']; ?>",
	"description": "<?php echo $general['index']['description']; ?>",
	"display": "standalone",
	"start_url": "<?php echo $protocols.'://'.$domainTLD; ?>/",
    "icons": [
        {
            "src": "<?php echo $protocols.'://'.$domainTLD.'/'.$images['dir'].'/'.$images['dir'].'/'.$images['manager']['pinned']['s:57x57']; ?>",
            "sizes": "57x57",
            "type": "image/png"
        },
        {
            "src": "<?php echo $protocols.'://'.$domainTLD.'/'.$images['dir'].'/'.$images['manager']['pinned']['s:60x60']; ?>",
            "sizes": "60x60",
            "type": "image/png"
        },
        {
            "src": "<?php echo $protocols.'://'.$domainTLD.'/'.$images['dir'].'/'.$images['manager']['pinned']['s:72x72']; ?>",
            "sizes": "72x72",
            "type": "image/png"
        },
        {
            "src": "<?php echo $protocols.'://'.$domainTLD.'/'.$images['dir'].'/'.$images['manager']['pinned']['s:76x76']; ?>",
            "sizes": "76x76",
            "type": "image/png"
        },
        {
            "src": "<?php echo $protocols.'://'.$domainTLD.'/'.$images['dir'].'/'.$images['manager']['pinned']['s:114x114']; ?>",
            "sizes": "114x114",
            "type": "image/png"
        },
        {
            "src": "<?php echo $protocols.'://'.$domainTLD.'/'.$images['dir'].'/'.$images['manager']['pinned']['s:70x70']; ?>",
            "sizes": "70x70",
            "type": "image/png"
        },
        {
            "src": "<?php echo $protocols.'://'.$domainTLD.'/'.$images['dir'].'/'.$images['manager']['pinned']['s:144x144']; ?>",
            "sizes": "144x144",
            "type": "image/png"
        },
        {
            "src": "<?php echo $protocols.'://'.$domainTLD.'/'.$images['dir'].'/'.$images['manager']['pinned']['s:150x150']; ?>",
            "sizes": "150x150",
            "type": "image/png"
        },
        {
            "src": "<?php echo $protocols.'://'.$domainTLD.'/'.$images['dir'].'/'.$images['manager']['pinned']['s:310x150']; ?>",
            "sizes": "310x150",
            "type": "image/png"
        },
        {
            "src": "<?php echo $protocols.'://'.$domainTLD.'/'.$images['dir'].'/'.$images['manager']['pinned']['s:310x310']; ?>",
            "sizes": "310x310",
            "type": "image/png"
        },
        {
            "src": "<?php echo $protocols.'://'.$domainTLD.'/'.$images['dir'].'/'.$images['manager']['pinned']['s:192x192']; ?>",
            "sizes": "192x192",
            "type": "image/png"
        },
		{
            "src": "<?php echo $protocols.'://'.$domainTLD.'/'.$images['dir'].'/'.$images['manager']['pinned']['s:16x16']; ?>",
            "sizes": "16x16",
            "type": "image/png"
        },
        {
            "src": "<?php echo $protocols.'://'.$domainTLD.'/'.$images['dir'].'/'.$images['manager']['pinned']['s:32x32']; ?>",
            "sizes": "32x32",
            "type": "image/png"
        }
    ],
    "theme_color": "<?php echo $seo['browsers']['color']['themes']; ?>",
    "background_color": "<?php echo $seo['browsers']['color']['background']; ?>"
}
