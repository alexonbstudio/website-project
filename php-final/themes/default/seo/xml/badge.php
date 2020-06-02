<?php header('Content-type: application/xml; charset=utf-8'); ?>
<?php 
echo '
<browserconfig>
	<msapplication>
		<tile>
			<square70x70logo src="'.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/assets/images/pinned/mstile-70x70.png"/>
			<square150x150logo src="'.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/assets/images/pinned/mstile-150x150.png"/>
			<wide310x150logo src="'.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/assets/images/pinned/mstile-310x310.png"/>
			<square310x310logo src="'.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/assets/images/pinned/mstile-310x150.png"/>
			<TileColor>#da532c</TileColor>
		</tile>
		<notification>
			<polling-uri src="'.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/rss.xml&amp;id=1"/>
			<polling-uri2 src="'.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/rss.xml&amp;id=2"/>
			<polling-uri3 src="'.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/rss.xml&amp;id=3"/>
			<polling-uri4 src="'.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/rss.xml&amp;id=4"/>
			<polling-uri5 src="'.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/rss.xml&amp;id=5"/>
			<frequency>30</frequency>
			<cycle>1</cycle>
		</notification>
	</msapplication>
</browserconfig>
';
?>