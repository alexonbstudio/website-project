<?php header('Content-type: application/xml; charset=utf-8'); ?>
<?php echo '<rss version="2.0">
	<channel>
		<link>'.$protocols.'://'.$sites['domain'].'</link>
		<description>'.$general['index']['description'].'</description>
		<title>'.$sites['name'].'</title>
		<item>
			<link>'.$protocols.'://'.$sites['domain'].'/'.$general['index']['url'].'</link>
			<description>'.$general['index']['description'].'</description>
			<title>'.$sites['name'].' '.$general['index']['title'].'</title>
		</item>
	</channel>
</rss>'; ?>