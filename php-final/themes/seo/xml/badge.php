<?php header('Content-type: application/xml; charset=utf-8'); ?>
<?php 
echo '
<browserconfig>
	<msapplication>
		<tile>
			<square70x70logo src="'.$protocols.'://'.$sites['domain'].'/assets/images/pinned/mstile-70x70.png"/>
			<square150x150logo src="'.$protocols.'://'.$sites['domain'].'/assets/images/pinned/mstile-150x150.png"/>
			<wide310x150logo src="'.$protocols.'://'.$sites['domain'].'/assets/images/pinned/mstile-310x310.png"/>
			<square310x310logo src="'.$protocols.'://'.$sites['domain'].'/assets/images/pinned/mstile-310x150.png"/>
			<TileColor>#da532c</TileColor>
		</tile>
		<notification>
			<polling-uri src="'.$protocols.'://'.$sites['domain'].'/rss.xml&amp;id=1"/>
			<polling-uri2 src="'.$protocols.'://'.$sites['domain'].'/rss.xml&amp;id=2"/>
			<polling-uri3 src="'.$protocols.'://'.$sites['domain'].'/rss.xml&amp;id=3"/>
			<polling-uri4 src="'.$protocols.'://'.$sites['domain'].'/rss.xml&amp;id=4"/>
			<polling-uri5 src="'.$protocols.'://'.$sites['domain'].'/rss.xml&amp;id=5"/>
			<frequency>30</frequency>
			<cycle>1</cycle>
		</notification>
	</msapplication>
</browserconfig>
';
?>