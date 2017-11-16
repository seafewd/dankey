<?php
  function alertbox($text) {
    echo '<script type="text/javascript">alert("' . $text . '");</script>';
  }

  function get_param($name, $default) {
  		if (isset($_GET[$name]))
  			return urldecode($_GET[$name]);
  		else
  			return $default;
  	}
  	function add_param(&$url, $name, $value) {
  		$sep = strpos($url, '?') !== false ? '&' : '?';
  		$url .= $sep . $name . "=" . urlencode($value);
  		return $url;
  	}
  	function navigation($language, $pageId) {
  		$urlBase = $_SERVER['PHP_SELF'];
  		add_param( $urlBase, "lang", $language);
  		for ($i = 0; $i <= 5; $i++) {
  			$url = $urlBase;
  			add_param( $url, "id", $i);
  			$class = $pageId == $i ? 'active' : 'inactive';
  			echo "<a class=\"$class\" href=\"$url\">".t('page')." $i</a>";
  		}
  	}
  	function content($pageId) {
  		echo t('content') . " $pageId";
  	}
  	function languages($language, $pageId) {
  		$languages = array('de','fr', 'en');
  		$urlBase = $_SERVER['PHP_SELF'];
  		add_param($urlBase, 'id', $pageId);
  		foreach( $languages as $lang ) {
  			$url = $urlBase;
  			$class = $language == $lang ? 'active' : 'inactive';
  			echo "<a class=\"$class\" href=\"".add_param($url,'lang', $lang)."\">".strtoupper($lang)."</a>";
  		}
  	}


  	function t($key) {
  		global $language;
  		$texts = array(
  				'page' => array(
  						'de'=>'Seite',
  						'fr'=>'Page',
  						'en'=>'Page'
  				),
  				'content' => array(
  						'de'=>'Willkommen auf der Seite ',
  						'fr'=>'Bienvenue Ã  la page ', 
  						'en'=>'Welcome to the page ')
  		);
  		if (isset($texts[$key][$language])) {
  			return $texts[$key][$language];
  		} else {
  			return "[$key]";
  		}
  	}

  	$language = get_param('lang', 'de');
  	$pageId = get_param('id', 0);
?>
