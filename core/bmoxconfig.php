<?php

class bmoxconfig extends bmoxconfig_parent {

    /**
     * overrides sAltImageUrl and sSSLAltImageUrl return values with cdn 
     *
     * @return int
     */
    public function getConfigParam( $sName )
    {
        if ($sName == 'sAltImageUrl') {
            $cdnServers = oxRegistry::getConfig()->getShopConfVar('sAltImageUrlCDN');
            $randCDNServer = array_rand($cdnServers, 1);
            if ( is_null ($randCDNServer)) {
                return parent::getConfigParam( $sName );
            }
            return $cdnServers[$randCDNServer];
        }
        if ($sName == 'sSSLAltImageUrl') {
            $cdnServers = oxRegistry::getConfig()->getShopConfVar('sSSLAltImageUrlCDN');
            $randCDNServer = array_rand($cdnServers, 1);
            if ( is_null ($randCDNServer)) {
                return parent::getConfigParam( $sName );
            }
            return $cdnServers[$randCDNServer];
        }
        return parent::getConfigParam( $sName );
    }
}
  