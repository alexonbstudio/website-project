<?php header('Content-type: application/xml; charset=utf-8'); ?>
<?php echo '
<rdf:RDF xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
	xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#"
	xmlns:dc="http://purl.org/dc/elements/1.1/"
	xmlns:dcterms="http://purl.org/dc/terms/"
	xmlns:dcmitype="http://purl.org/dc/dcmitype/"
	xmlns:admin="http://webns.net/mvcb/">

<rdf:Description rdf:about="'.$protocols.'://'.$domainTLD.'">
	<dc:title>'.$sites['name'].' '.$general['index']['title'].'</dc:title>
	<dc:description>'.$general['index']['description'].'</dc:description>
	<dc:subject>
		<rdf:Bag>
			<rdf:li>alexonbstudio</rdf:li>
			<rdf:li>wp</rdf:li>
			<rdf:li>website project</rdf:li>
			<rdf:li>'.$sites['name'].'</rdf:li>
		</rdf:Bag>
	</dc:subject>
	<dc:language>fr</dc:language>
	<dc:creator dc:source="'.$protocols.'://alexonbstudio.fr" rdfs:Literal="alexonbstudio" />
	<dc:publisher dc:source="'.$protocols.'://'.$domainTLD.'" rdfs:Literal="'.$sites['name'].'" />
	<dc:license dc:source="'.$protocols.'://'.$domainTLD.'" rdfs:Literal="CC-BY-SA" />
	<dcterms:Created><dcterms:W3CDTF><rdf:value>'.$sites['update']['rdf'].' '.$sites['name'].'</rdf:value></dcterms:W3CDTF></dcterms:Created>
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