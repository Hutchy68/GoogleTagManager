<?php

// Set the default global variables

$wgAvailableRights[] = 'noanalytics';
$wgGroupPermissions['sysop']['noanalytics'] = true;
$wgGroupPermissions['bot']['noanalytics'] = true;
$wgGoogleTagManagerContainerID = '';
$wgGoogleTabManagerTagData = '';

class TagManager {

	public static function onBeforePageDisplay( OutputPage $out, Skin $skin ) {
		global $wgGoogleTagManagerContainerID, $wgGoogleTagManagerIgnoreSysops, $wgGoogleTagManagerIgnoreBots, $wgUser;
		if ( $wgUser->isAllowed( 'noanalytics' ) ) {
			$text = "\n<!-- Google Tag Manager tracking is disabled for this user -->";
        	$out->prependHTML($text);
        	return true;
		}
		if ( $wgGoogleTagManagerContainerID == '' ) {
			$text = "\n<!-- Set \$wgGoogleTagManagerContainerID to your container ID provided by Google Tag Manager in LocalSettings.php. -->";
        	$out->prependHTML($text);
        	return true;
		} else {
			$text = "<!-- Google Tag Manager (added by extension GoogleTagManager) -->
<noscript><iframe src=\"//www.googletagmanager.com/ns.html?id=$wgGoogleTagManagerContainerID\"
height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','$wgGoogleTagManagerContainerID');</script>
<!-- End Google Tag Manager -->";
        	$out->prependHTML($text);
    		return true;
        }

	}

}