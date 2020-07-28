<?php echo '<rss version="2.0">
	<channel>
		<link>'.$protocols.'://'.$domainTLD.'</link>
		<description>'.$general['index']['description'].'</description>
		<title>'.$sites['name'].'</title>
		<item>
			<link>'.$protocols.'://'.$domainTLD.'/'.$general['index']['url']['default'].'</link>
			<description>'.$general['index']['description'].'</description>
			<title>'.$sites['name'].' '.$general['index']['title'].'</title>
		</item>
		<item>
			<link>'.$protocols.'://'.$domainTLD.'/'.$about['index']['url']['default'].'</link>
			<description>'.$about['index']['description'].'</description>
			<title>'.$sites['name'].' '.$about['index']['title'].'</title>
		</item>
		<item>
			<link>'.$protocols.'://'.$domainTLD.'/'.$sponsor['index']['url']['default'].'</link>
			<description>'.$sponsor['index']['description'].'</description>
			<title>'.$sites['name'].' '.$sponsor['index']['title'].'</title>
		</item>
		<item>
			<link>'.$protocols.'://'.$domainTLD.'/'.$partner['index']['url']['default'].'</link>
			<description>'.$partner['index']['description'].'</description>
			<title>'.$sites['name'].' '.$partner['index']['title'].'</title>
		</item>
		<item>
			<link>'.$protocols.'://'.$domainTLD.'/'.$email['index']['url']['default'].'</link>
			<description>'.$email['index']['description'].'</description>
			<title>'.$sites['name'].' '.$email['index']['title'].'</title>
		</item>
		<item>
			<link>'.$protocols.'://'.$domainTLD.'/'.$about['index']['url']['default'].'</link>
			<description>'.$about['index']['description'].'</description>
			<title>'.$sites['name'].' '.$about['index']['title'].'</title>
		</item>
		<item>
			<link>'.$protocols.'://'.$domainTLD.'/'.$law['pages']['url']['default'].'</link>
			<description>'.$law['pages']['description'].'</description>
			<title>'.$sites['name'].' '.$law['pages']['title'].'</title>
		</item>
	</channel>
</rss>'; ?>