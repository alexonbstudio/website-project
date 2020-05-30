<?php header('Content-type: application/xml; charset=utf-8'); ?>
<?php 
echo '
<browserconfig>
	<msapplication>
		<tile>
			<square70x70logo src="'.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/assets/images/pinned/70x70.jpg"/>
			<square150x150logo src="'.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/assets/images/pinned/150x150.jpg"/>
			<wide310x150logo src="'.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/assets/images/pinned/310x150.jpg"/>
			<square310x310logo src="'.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'/assets/images/pinned/310x310.jpg"/>
			<TileColor>#2b5797</TileColor>
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