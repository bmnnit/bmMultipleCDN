<?php
$aModule = array('id'  => 'bmmultiplecdn',
	'title'        => '[BM] Bmnnit multiple CDN',
        'description' => array(
            'de' => 'BmnnIT multiple CDN Module ermöglicht schnellere Ladezeiten durch die Auslieferung von mehreren CDN Servern für OXID E-Shop',
            'en' => 'BmnnIT multiple CDN Module enables multiple CDN Servers for faster image loading for OXID E-Shop',
        ),
	'thumbnail'    => 'logo.png',
	'version'      => '0.1',
	'author'       => 'Johannes Baumann',
        'email'	       => 'info@bmnnit.com',
        'url'          => 'http://www.bmnnit.com',
	'extend'       => array(
            'oxconfig' => 'bmnnit/bmMultipleCDN/core/bmoxconfig',
        )
);

