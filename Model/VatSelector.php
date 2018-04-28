<?php
/*    Please retain this copyright header in all versions of the software
 *
 *    Copyright (C) Josef A. Puckl | eComStyle.de
 *
 *    This program is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License as published by
 *    the Free Software Foundation, either version 3 of the License, or
 *    (at your option) any later version.
 *
 *    This program is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU General Public License
 *    along with this program.  If not, see {http://www.gnu.org/licenses/}.
 */

namespace Ecs\AlwaysVat\Model;

class VatSelector extends VatSelector_parent
{
    public function getUserVat(\OxidEsales\Eshop\Application\Model\User $oUser, $blCacheReset = false)
    {
        $cacheId = $oUser->getId() . '_' . $oUser->oxuser__oxcountryid->value;

        if (!$blCacheReset) {
            if (array_key_exists($cacheId, self::$_aUserVatCache) &&
                self::$_aUserVatCache[$cacheId] !== null
            ) {
                return self::$_aUserVatCache[$cacheId];
            }
        }

        $ret = false;

        $sCountryId = $this->_getVatCountry($oUser);

        if ($sCountryId) {
            $oCountry = oxNew(\OxidEsales\Eshop\Application\Model\Country::class);
            if (!$oCountry->load($sCountryId)) {
                throw oxNew(\OxidEsales\Eshop\Core\Exception\ObjectException::class);
            }
            /*
            if ($oCountry->isForeignCountry()) {
                $ret = $this->_getForeignCountryUserVat($oUser, $oCountry);
            }
            */
        }

        self::$_aUserVatCache[$cacheId] = $ret;

        return $ret;
    }
}
