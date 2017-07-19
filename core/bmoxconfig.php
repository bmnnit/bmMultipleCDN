<?php
/*
 * ----------------------------------------------------------------------------
 * "THE BEER-WARE LICENSE" (Revision 42):
 * <info@bmnnit.com> wrote this file. As long as you retain this notice you
 * can do whatever you want with this stuff. If we meet some day, and you think
 * this stuff is worth it, you can buy me a beer in return Johannes Baumann
 * ----------------------------------------------------------------------------
 */
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
  