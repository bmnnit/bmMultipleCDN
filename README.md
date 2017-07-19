# bmMultipleCDN

## Allgemein

Erweitert oxconfig und gibt einen von mehreren konfigurierten CDN Servern zurück. 

## Konfiguration

```php
    $this->sAltImageUrl = 'enabled'; //content doesnt matter anymore, but need to be set
    $this->sSSLAltImageUrl= 'enabled'; //content doesnt matter anymore, but need to be set

    $this->sSSLAltImageUrlCDN = array (
              "https://inst-0.yourcnd.de/instanz_cdn/out/pictures",
              "https://inst-1.yourcnd.de/instanz_cdn/out/pictures"
             );
    $this->sAltImageUrlCDN = array ( 
              "http://inst-0.yourcnd.de/instanz_cdn/out/pictures",
              "http://inst-1.yourcnd.de/instanz_cdn/out/pictures"
            );
```

## Syncronisation des out Verzeichnisses

kann z.B über Rsync erfolgen. Hier sind wir Ihnen gerne behilflich.

## Lizenz

Beerware (Revision 42)