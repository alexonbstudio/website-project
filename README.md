# Website Project WP

Video want help for [french](https://dai.ly/x7vaz18) or [english](https://dai.ly/x7vaz18)

## Are you interested to add compagny or non profit

	Read the notice on https://github.com/alexonbstudio/wp-api
	and then we i'll add your compagny name and non profit soon purpose
	


## Documentation 

Files [PDF need teorique French](docs/website-project-wp-documents-french.pdf)


Vous avez la flem [generator sitemap](https://xmlsitemapgenerator.org/) 

For more information on my website to [alexonbstudio.fr](https://www.alexonbstudio.fr) 

## News Possible 

GET data from website project wp with [Plugin System Shortcode](https://github.com/alexonbstudio/plg-shortcode-joomla/releases/) integrated, beginning with Joomla 3.9, Joomla 4.0 not supported you can download that now for free and then...

## Auto generate sitemap access

Access to the next url for generate your own sitemap | if you edit generate again

	<your-site-dot-tld>/automate/generator/sitemap-index
	<your-site-dot-tld>/automate/generator/sitemap-fr
	<your-site-dot-tld>/automate/generator/sitemap-en

will host on the intern directory site link <your-site-dot-tld>

	<your-site-dot-tld>/sitemap-index.xml
	<your-site-dot-tld>/sitemap-fr.xml
	<your-site-dot-tld>/sitemap-en.xml

## install on linux exemple on ubuntu

+ -Want automate install [composer with packagist](https://github.com/website-project-WP/composer-wp)
+ -Manual install[free version](https://github.com/website-project-WP/free-wp) && [Commercial version](https://github.com/website-project-WP/commercial-wp)

* notice: Hosting shared take Manual install

## One Libs add from Joomla CMS 4.0

### How to use add the files index.php exemple

	#Joomla utilities
	require 'libs/joomla/utilities/src/IpHelper.php';
	use Joomla\Utilities\IpHelper;

	#anti spam with CAPTCHA
	$Response = file_get_contents('https://captcha/verify?secret='.secret.'&response='.$_POST['response'].'&remoteip='.IpHelper::getIp());
	$Data = json_decode($Response);
	#etc...

# Duration 

	2 month + 3day Totaly = every 4 hours on 12 days + 10min 1day + 6h 1day
	Dev/Manage Structure/Imagine/Thinking to build simple
	#No Frameworks & No CMS

# composer using

	composer require alexonbstudio/website-project --no-dev
	
# Docker using

	docker-compose.yml
		
	
# back full developement

+ https://github.com/alexonbstudio/website-project
	
# Copyright

#### @alexonbstudio 2020

(c) CC-BY-SA - Website Project (WP)
