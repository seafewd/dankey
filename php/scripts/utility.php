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

		$navs = ['home', 'products', 'contact'];

		$urlBase = $_SERVER['PHP_SELF'];
		add_param( $urlBase, "lang", $language);
		foreach ($navs as $nav) {
			$url = $urlBase;
			add_param( $url, "id", $i);
			$class = $pageId == $i ? 'active' : 'inactive';
			echo "<a class=\"$class\" href=\"$url\">".t($nav)." $i</a>";
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

/*
	function t($key) {
		global $texts;
		if (isset($texts[$key])) {
			return $texts[$key];
		} else {
			return "[$key]";
		}
	}

	$language = get_param('lang', 'en');
	$pageId = get_param('id', 0);

	$texts = array();
	$file = file("languages/messages_. $language .txt");
	foreach($file as $line) {
		$keyVal = explode("=") . $line;
		$texts[$keyVal[0]] = keyVal[1];

		//better
		list($key, $val);
		$texts[$key] = $val;
	}*/
?>
