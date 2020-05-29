<?php 
function ob_html_compress($buf){
    return str_replace(array("\n","\r","\t"),'',$buf);
	return preg_replace(array('/<!--(.*)-->/Uis',"/[[:blank:]]+/"),array('',' '),str_replace(array("\n","\r","\t"),'',$buf));
}
?>