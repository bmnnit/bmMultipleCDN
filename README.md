# bmMultipleCDN

Erweitert oxconfig und gibt einen von mehreren konfigurierten CDN Servern zurück. 


```php
    $this->sAltImageUrl = 'enabled'; //content doesnt matter anymore, but need to be set
    $this->sSSLAltImageUrl= 'enabled'; //content doesnt matter anymore, but need to be set

    $this->sSSLAltImageUrlCDN = array (
              "https://inst-0.yourcnd.de/hs_cdn/out/pictures",
              "https://inst-1.yourcnd.de/hs_cdn/out/pictures"
             );
    $this->sAltImageUrlCDN = array ( 
              "http://inst-0.yourcnd.de/hs_cdn/out/pictures",
              "http://inst-1.yourcnd.de/hs_cdn/out/pictures"
            );
```