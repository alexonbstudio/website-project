<?php











namespace Composer;

use Composer\Semver\VersionParser;






class InstalledVersions
{
private static $installed = array (
  'root' => 
  array (
    'pretty_version' => '2.0.8',
    'version' => '2.0.8.0',
    'aliases' => 
    array (
    ),
    'reference' => NULL,
    'name' => 'alexonbstudio/website-project',
  ),
  'versions' => 
  array (
    'alexonbstudio/website-project' => 
    array (
      'pretty_version' => '2.0.8',
      'version' => '2.0.8.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'giggsey/libphonenumber-for-php' => 
    array (
      'pretty_version' => '8.12.25',
      'version' => '8.12.25.0',
      'aliases' => 
      array (
      ),
      'reference' => '7d397cbd2e01e78cf79ff347e40a403dbc4c22fa',
    ),
    'giggsey/locale' => 
    array (
      'pretty_version' => '1.9',
      'version' => '1.9.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b07f1eace8072ccc61445ad8fbd493ff9d783043',
    ),
    'google/recaptcha' => 
    array (
      'pretty_version' => '1.2.4',
      'version' => '1.2.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '614f25a9038be4f3f2da7cbfd778dc5b357d2419',
    ),
    'icamys/php-sitemap-generator' => 
    array (
      'pretty_version' => '2.0.3',
      'version' => '2.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '37321c460b23081e9e21ff0ec67d28e45c2b1108',
    ),
    'joomla/string' => 
    array (
      'pretty_version' => '1.4.5',
      'version' => '1.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '21269bfcddef4e676c6a1a49b7d959f896522a96',
    ),
    'joomla/utilities' => 
    array (
      'pretty_version' => '1.6.2',
      'version' => '1.6.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '9f7d9fda537ca005f7467de68f92506d48f348f5',
    ),
    'matthiasmullie/minify' => 
    array (
      'pretty_version' => '1.3.66',
      'version' => '1.3.66.0',
      'aliases' => 
      array (
      ),
      'reference' => '45fd3b0f1dfa2c965857c6d4a470bea52adc31a6',
    ),
    'matthiasmullie/path-converter' => 
    array (
      'pretty_version' => '1.1.3',
      'version' => '1.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e7d13b2c7e2f2268e1424aaed02085518afa02d9',
    ),
    'phpmailer/phpmailer' => 
    array (
      'pretty_version' => 'v6.5.0',
      'version' => '6.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a5b5c43e50b7fba655f793ad27303cd74c57363c',
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '2df51500adbaebdc4c38dea4c89a2e131c45c8a1',
    ),
    'visualappeal/php-ssllabs-api' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '51d5d6fab1613620ca7f5c3f88ce4d9936716435',
    ),
  ),
);







public static function getInstalledPackages()
{
return array_keys(self::$installed['versions']);
}









public static function isInstalled($packageName)
{
return isset(self::$installed['versions'][$packageName]);
}














public static function satisfies(VersionParser $parser, $packageName, $constraint)
{
$constraint = $parser->parseConstraints($constraint);
$provided = $parser->parseConstraints(self::getVersionRanges($packageName));

return $provided->matches($constraint);
}










public static function getVersionRanges($packageName)
{
if (!isset(self::$installed['versions'][$packageName])) {
throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}

$ranges = array();
if (isset(self::$installed['versions'][$packageName]['pretty_version'])) {
$ranges[] = self::$installed['versions'][$packageName]['pretty_version'];
}
if (array_key_exists('aliases', self::$installed['versions'][$packageName])) {
$ranges = array_merge($ranges, self::$installed['versions'][$packageName]['aliases']);
}
if (array_key_exists('replaced', self::$installed['versions'][$packageName])) {
$ranges = array_merge($ranges, self::$installed['versions'][$packageName]['replaced']);
}
if (array_key_exists('provided', self::$installed['versions'][$packageName])) {
$ranges = array_merge($ranges, self::$installed['versions'][$packageName]['provided']);
}

return implode(' || ', $ranges);
}





public static function getVersion($packageName)
{
if (!isset(self::$installed['versions'][$packageName])) {
throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}

if (!isset(self::$installed['versions'][$packageName]['version'])) {
return null;
}

return self::$installed['versions'][$packageName]['version'];
}





public static function getPrettyVersion($packageName)
{
if (!isset(self::$installed['versions'][$packageName])) {
throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}

if (!isset(self::$installed['versions'][$packageName]['pretty_version'])) {
return null;
}

return self::$installed['versions'][$packageName]['pretty_version'];
}





public static function getReference($packageName)
{
if (!isset(self::$installed['versions'][$packageName])) {
throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}

if (!isset(self::$installed['versions'][$packageName]['reference'])) {
return null;
}

return self::$installed['versions'][$packageName]['reference'];
}





public static function getRootPackage()
{
return self::$installed['root'];
}







public static function getRawData()
{
return self::$installed;
}



















public static function reload($data)
{
self::$installed = $data;
}
}
