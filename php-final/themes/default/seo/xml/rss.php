<?php header('Content-type: application/xml; charset=utf-8'); ?>
<?php echo '<rss version="2.0">
	<channel>
		<link>'.$protocols.'://'.$defaulturl_site.'/'.$trad['default']['index']['url-full'].'</link>
		<description>'.$trad['default']['index']['description'].'</description>
		<title>'.$website['info']['site']['name'].'</title>
		<item>
			<link>'.$protocols.'://'.$sites['domain'].'/'.$trad['pages']['index']['url-full'].'</link>
			<description>'.$trad['pages']['index']['description'].'</description>
			<title>'.$trad['pages']['index']['title'].'</title>
		</item>
	</channel>
</rss>'; ?>