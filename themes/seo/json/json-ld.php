<?php ##########	OWNER	########## ?>
[{
    "@context": "https://schema.org",
	"@type": "WebPage",
	"@id": "#webpage",
	"url": "<?php echo $protocols.'://'.$domainTLD.'/'.$urls; ?>",
	"name":"<?php echo htmlentities($sites['name']); ?>",
	"description":"<?php echo htmlentities($description); ?>",
    "headline": "<?php echo htmlentities($title); ?>"<?php if(!empty($imgs)){ ?>,
	"inLanguage":"<?php echo $meta_langs; ?>",
    "image": [
      "<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$imgs; ?>"
     ],<?php } ?>
     "speakable":
     {
      "@type": "SpeakableSpecification",
      "xpath": [
        "/html/head/title",
        "/html/head/meta[@name='description']/@content"
        ]
      },
	"potentialAction":[
		{
			"@type":"ReadAction",
			"target":[
				"<?php echo $protocols.'://'.$domainTLD.'/'.$urls; ?>"
			]
		}
	]
	
},<?php /*
{
      "@type": "VideoObject",
      "name": "Cat video",
      "duration": "P10M",
      "uploadDate": "2019-07-19",
      "thumbnailUrl": "<?php echo $protocols.'://'.$domainTLD.'/'; ?>"",
      "description": "Watch this cat jump over a fence!",
      "contentUrl": "<?php echo $protocols.'://'.$domainTLD.'/'; ?>"",
      "hasPart": [{
        "@type": "Clip",
        "name": "Cat jumps",
        "url": "<?php echo $protocols.'://'.$domainTLD.'/'; ?>"
      },
      {
        "@type": "Clip",
        "name": "Cat misses the fence",
        "url": "<?php echo $protocols.'://'.$domainTLD.'/'; ?>"
      }]
}, */?>
{
	"@type":"WebSite",
	"@id":"#website",
	"url":"<?php echo $protocols.'://'.$domainTLD.'/'; ?>",
	"name":"<?php echo htmlentities($sites['name']); ?>",
	"description":"<?php echo htmlentities($general['index']['description']); ?>",
	"inLanguage":"<?php echo $meta_langs; ?>"
},
<?php ##########	Breadcrumb	########## ?>
{
	"@type":"BreadcrumbList",
	"@id":"#breadcrumb",
	"itemListElement":[
		{
			"@type":"ListItem",
			"position":1,
			"item":{
				"@type":"WebPage",
				"@id":"<?php echo $protocols.'://'.$domainTLD; ?>",
				"url":"<?php echo $protocols.'://'.$domainTLD; ?>",
				"name":"<?php echo htmlentities($general['index']['title']); ?>"
			}
		},
		{
			"@type":"ListItem",
			"position":2,
			"item":{
				"@type":"WebPage",
				"@id":"<?php echo $protocols.'://'.$domainTLD.'/'.$urls; ?>",
				"url":"<?php echo $protocols.'://'.$domainTLD.'/'.$urls; ?>",
				"name":"<?php echo htmlentities($title); ?>"
			}
		}
	]
},
{
	"@type":"ImageObject",
	"@id":"#primaryimage",
	"inLanguage":"<?php echo $meta_langs; ?>",
	"url":"<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$imgs; ?>",
	"width":718,
	"height":403,
	"caption":"<?php echo $title; ?>"
}<?php if(!empty($private['name'])){ ?>,
  {
  "@context": "http://schema.org/",
  "@type": "Person",
  "name": "<?php echo htmlentities($private['name']); ?>"<?php if(!empty($private['mobile']['number'])){ ?>,
  "telephone": "<?php echo $private['mobile']['code']; ?><?php echo $private['mobile']['number']; ?>"<?php } ?>,
  "url": "<?php echo $protocols.'://'.$domainTLD; ?>"<?php if(!empty($private['name'])){ ?>,
  "sameAs":[
		<?php if(!empty($social['linkedin']['name'])){ echo '"'.$social['linkedin']['url'].'",'; } ?>
		<?php if(!empty($social['github']['name'])){ echo '"'.$social['github']['url'].'",'; } ?>
		<?php if(!empty($social['viadeo']['name'])){ echo '"'.$social['viadeo']['url'].'",'; } ?>
		"<?php echo htmlentities($private['name']);  ?>",
		"<?php echo htmlentities($sites['name']); ?>"
	]<?php } ?>
}<?php } ?>
<?php ##########	BUSINESS PAGE | You need Absolute CHANGE for Adapt your Business Local categories	########## ?>
<?php if(!empty($business['local']['name'])){ ?>,
{
	"@context": "https://schema.org",
	"@type": "Organization",
	"url": "<?php echo $protocols.'://'.$domainTLD; ?>"<?php if(!empty($business['local']['phone']['number'])){ ?>,
	"telephone": "<?php echo $business['local']['phone']['code']; ?><?php echo $business['local']['phone']['number']; ?>"<?php } ?>,
	"logo": "<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['logo']['normal']; ?>",
	"name": "<?php echo htmlentities($business['local']['name']); ?>",
	"address": {
		"@type": "PostalAddress",
		"streetAddress": "<?php echo htmlentities($business['local']['address']); ?>",
		"addressLocality": "<?php echo htmlentities($business['local']['city']); ?>",
		<?php if(!empty($business['local']['region'])){ ?>"addressRegion": "<?php echo htmlentities($business['local']['region']).','; ?>"<?php } ?>
		"postalCode": "<?php echo $business['local']['postal']; ?>",
		"addressCountry": "<?php echo htmlentities($business['local']['contry']); ?>"
	},
	"geo": {
		"@type": "GeoCoordinates",
		"latitude": <?php echo $business['local']['geo']['latitude']; ?>,
		"longitude": <?php echo $business['local']['geo']['longitude']; ?>
	}<?php if(!empty($private['name'])){ ?>,
	"sameAs":[
		<?php if(!empty($social['twitter']['name'])){ echo '"'.$social['twitter']['url'].'",'; } ?>
		<?php if(!empty($social['dailymotion']['name'])){ echo '"'.$social['facebook']['url'].'",'; } ?>
		<?php if(!empty($social['facebook']['name'])){ echo '"'.$social['instagram']['url'].'",'; } ?> 
		<?php if(!empty($social['linkedin']['team']['name'])){ echo '"'.$social['linkedin']['team']['url'].'",'; } ?>
		<?php if(!empty($social['youtube']['name'])){ echo '"'.$social['youtube']['url'].'",'; } ?>
		<?php if(!empty($social['twitch']['name'])){ echo '"'.$social['twitch']['url'].'",'; } ?>
		<?php if(!empty($social['github']['name'])){ echo '"'.$social['github']['url'].'",'; } ?>
		<?php if(!empty($social['discord']['name'])){ echo '"'.$social['discord']['url'].'",'; } ?>
		<?php if(!empty($social['viadeo']['team']['name'])){ echo '"'.$social['viadeo']['team']['url'].'",'; } ?>
		<?php if(!empty($social['mixcloud']['name'])){ echo '"'.$social['mixcloud']['url'].'",'; } ?>
		<?php if(!empty($social['dailymotion']['name'])){ echo '"'.$social['dailymotion']['url'].'",'; } ?>
		<?php if(!empty($private['name'])){ echo '"'.htmlentities($private['name']).'",'; } ?>
		"<?php echo htmlentities($sites['name']); ?>"
	]<?php } ?>
}<?php } ?>]