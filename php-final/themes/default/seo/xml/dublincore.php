<?php header('Content-type: application/xml; charset=utf-8'); ?>
<?php echo '
<rdf:RDF xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
	xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#"
	xmlns:dc="http://purl.org/dc/elements/1.1/"
	xmlns:dcterms="http://purl.org/dc/terms/"
	xmlns:dcmitype="http://purl.org/dc/dcmitype/"
	xmlns:admin="http://webns.net/mvcb/">

<rdf:Description rdf:about="'.$protocols.'://'.$sites['domain'].'">
	<dc:title>'.$website['info']['site']['name'].'</dc:title>
	<dc:description>'.$trad['default']['index']['description'].'</dc:description>
	<dc:subject>
		<rdf:Bag>
			<rdf:li>alexonbstudio</rdf:li>
			<rdf:li>alexonb studio</rdf:li>
			<rdf:li>alexon balangue</rdf:li>
			<rdf:li>Dépannage informatique</rdf:li>
			<rdf:li>assistant informatique</rdf:li>
			<rdf:li>technicien informatique</rdf:li>
			<rdf:li>webmestre</rdf:li>
			<rdf:li>IT</rdf:li>
			<rdf:li>internet</rdf:li>
		</rdf:Bag>
	</dc:subject>
	<dc:language>fr</dc:language>
	<dc:creator dc:source="'.$protocols.'://'.$sites['domain'].'" rdfs:Literal="Alexon Balangue" />
	<dc:publisher dc:source="'.$protocols.'://'.$sites['domain'].'" rdfs:Literal="Alexon Balangue" />
	<dc:license dc:source="'.$protocols.'://'.$sites['domain'].'" rdfs:Literal="CC" />
	<dcterms:Created><dcterms:W3CDTF><rdf:value>2020-06-01</rdf:value></dcterms:W3CDTF></dcterms:Created>
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