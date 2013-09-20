<?php

class alwaysvat extends alwaysvat_parent
{

    /**
     * get VAT for user, can NOT be null
     *
     * @param oxUser $oUser        given user object
     * @param bool   $blCacheReset reset cache
     *
     * @throws oxObjectException if wrong country
     * @return double | false
     */
    public function getUserVat( oxUser $oUser, $blCacheReset = false )
    {
        if (!$blCacheReset) {
            $sId = $oUser->getId();
            if ( array_key_exists( $sId, self::$_aUserVatCache ) &&
                 self::$_aUserVatCache[$sId] !== null) {
                return self::$_aUserVatCache[$sId];
            }
        }

        $ret = false;

        self::$_aUserVatCache[$oUser->getId()] = $ret;
        return $ret;
    }

}