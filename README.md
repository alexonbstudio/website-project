# Website Project WP

Vous avez la flem [generator sitemap](https://xmlsitemapgenerator.org/) 

For more information on my website to [alexonbstudio.fr](https://www.alexonbstudio.fr) 


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

	60 Days Totaly every 4 hours 
	Dev/Manage Structure/Imagine/Thinking to build simple
	#No Frameworks & No CMS

# composer using

	composer require alexonbstudio/website-project --no-dev
	
	
# back full developement

+ https://github.com/alexonbstudio/website-project
	
# Copyright

#### @alexonbstudio 2020

(c) CC-BY-SA - Website Project (WP)
