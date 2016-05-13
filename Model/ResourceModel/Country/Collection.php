<?php
/**
 * Copyright © 2016 Originalapp. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Originalapp\MoroccanSahara\Model\ResourceModel\Country;

/**
 * Class Collection
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Collection extends \Magento\Directory\Model\ResourceModel\Country\Collection
{
    private static $_phantomState = "HE";
    /**
     * Load allowed countries for current store
     *
     * @param null|int|string|\Magento\Store\Model\Store $store
     * @return \Magento\Directory\Model\ResourceModel\Country\Collection
     */
    public function loadByStore($store = null)
    {
        $allowCountries = explode(',',
            (string)$this->_scopeConfig->getValue(
                'general/country/allow',
                \Magento\Store\Model\ScopeInterface::SCOPE_STORE,
                $store
            )
        );

        $allowCountries = $this->removePhantomState($allowCountries);

        if (!empty($allowCountries)) {
            $this->addFieldToFilter("country_id", ['in' => $allowCountries]);
        }
        return $this;
    }
    /**
     * Remove the phantom state
     *
     * @param null|array $allowCountries
     * @return null|array
     */
    private function removePhantomState($allowCountries)
    {
        if(($key = array_search("EH", $allowCountries)) !== false) {
            unset($allowCountries[$key]);
        }
        return $allowCountries;
    }
}
