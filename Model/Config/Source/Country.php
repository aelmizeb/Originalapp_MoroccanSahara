<?php
/**
 * Copyright © 2015 Originalapp. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Originalapp\MoroccanSahara\Model\Config\Source;

class Country extends \Magento\Directory\Model\Config\Source\Country
{
    /**
     * @param \Magento\Directory\Model\ResourceModel\Country\Collection $countryCollection
     */
    public function __construct(\Magento\Directory\Model\ResourceModel\Country\Collection $countryCollection)
    {
        $this->_countryCollection = $countryCollection->addFieldToFilter(
                    'country_id', array('neq' => 'EH')
        );
    }
}
