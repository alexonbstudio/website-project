<?php header('Content-type: application/xml; charset=utf-8'); ?>
<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<?php echo '<rss version="2.0">
	<channel>
		<link>'.$protocols.'://'.$sites['domain'].'</link>
		<description>'.$general['index']['description'].'</description>
		<title>'.$sites['name'].'</title>
		<item>
			<link>'.$protocols.'://'.$sites['domain'].'/'.$general['index']['url']['default'].'</link>
			<description>'.$general['index']['description'].'</description>
			<title>'.$sites['name'].' '.$general['index']['title'].'</title>
		</item>
		<item>
			<link>'.$protocols.'://'.$sites['domain'].'/'.$sponsor['index']['url']['default'].'</link>
			<description>'.$sponsor['index']['description'].'</description>
			<title>'.$sites['name'].' '.$sponsor['index']['title'].'</title>
		</item>
		<item>
			<link>'.$protocols.'://'.$sites['domain'].'/'.$partner['index']['url']['default'].'</link>
			<description>'.$partner['index']['description'].'</description>
			<title>'.$sites['name'].' '.$partner['index']['title'].'</title>
		</item>
		<item>
			<link>'.$protocols.'://'.$sites['domain'].'/'.$email['index']['url']['default'].'</link>
			<description>'.$partner['index']['description'].'</description>
			<title>'.$sites['name'].' '.$email['index']['title'].'</title>
		</item>
		<item>
			<link>'.$protocols.'://'.$sites['domain'].'/'.$law['pages']['url']['default'].'</link>
			<description>'.$law['pages']['description'].'</description>
			<title>'.$sites['name'].' '.$law['pages']['title'].'</title>
		</item>
	</channel>
</rss>'; ?>