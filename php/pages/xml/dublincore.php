<?php header('Content-type: application/xml; charset=utf-8'); ?>
<?php echo '
<rdf:RDF xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
	xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#"
	xmlns:dc="http://purl.org/dc/elements/1.1/"
	xmlns:dcterms="http://purl.org/dc/terms/"
	xmlns:dcmitype="http://purl.org/dc/dcmitype/"
	xmlns:admin="http://webns.net/mvcb/">

<rdf:Description rdf:about="'.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'">
	<dc:title>'.$website['info']['site']['name'].'</dc:title>
	<dc:description>'.$website['home']['description'].'</dc:description>
	<dc:subject>
		<rdf:Bag>
			<rdf:li>artisan</rdf:li>
			<rdf:li>dépanneur</rdf:li>
			<rdf:li>artisan dépannage</rdf:li>
			<rdf:li>plombier</rdf:li>
			<rdf:li>plombier paris</rdf:li>
			<rdf:li>plomberie</rdf:li>
			<rdf:li>dépannage</rdf:li>
			<rdf:li>chauffagiste</rdf:li>
			<rdf:li>chauffage</rdf:li>
			<rdf:li>vitrier</rdf:li>
			<rdf:li>vitrerie</rdf:li>
			<rdf:li>électricien</rdf:li>
			<rdf:li>électricité</rdf:li>
			<rdf:li>volet roulant et store</rdf:li>
			<rdf:li>serrurie</rdf:li>
			<rdf:li>serrurier</rdf:li>
		</rdf:Bag>
	</dc:subject>
	<dc:language>fr</dc:language>
	<dc:creator dc:source="https://www.alexonbalangue.me" rdfs:Literal="Alexon Balangue" />
	<dc:license dc:source="'.$website['info']['langs']['protocol'].'://'.$website['info']['site']['default-url'].'" rdfs:Literal="CC" />
	<dcterms:Created><dcterms:W3CDTF><rdf:value>2018-04-30</rdf:value></dcterms:W3CDTF></dcterms:Created>
	<dc:type rdfs:value="http://purl.org/dc/dcmitype/Collection" />
	<dc:type rdfs:value="http://purl.org/dc/dcmitype/Dataset" />
	<dc:type rdfs:value="http://purl.org/dc/dcmitype/Event" />
	<dc:type rdfs:value="http://purl.org/dc/dcmitype/Image" />
	<dc:type rdfs:value="http://purl.org/dc/dcmitype/Service" />
	<dc:type rdfs:value="http://purl.org/dc/dcmitype/Software" />
	<dc:type rdfs:value="http://purl.org/dc/dcmitype/StillImage"/>
	<dc:type rdfs:value="http://purl.org/dc/dcmitype/Text" />
</rdf:Description>
</rdf:RDF>';

?>