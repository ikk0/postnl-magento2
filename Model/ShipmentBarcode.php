<?php
/**
 *
 *          ..::..
 *     ..::::::::::::..
 *   ::'''''':''::'''''::
 *   ::..  ..:  :  ....::
 *   ::::  :::  :  :   ::
 *   ::::  :::  :  ''' ::
 *   ::::..:::..::.....::
 *     ''::::::::::::''
 *          ''::''
 *
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Creative Commons License.
 * It is available through the world-wide-web at this URL:
 * http://creativecommons.org/licenses/by-nc-nd/3.0/nl/deed.en_US
 * If you are unable to obtain it through the world-wide-web, please send an email
 * to servicedesk@tig.nl so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this module to newer
 * versions in the future. If you wish to customize this module for your
 * needs please contact servicedesk@tig.nl for more information.
 *
 * @copyright   Copyright (c) Total Internet Group B.V. https://tig.nl/copyright
 * @license     http://creativecommons.org/licenses/by-nc-nd/3.0/nl/deed.en_US
 */
namespace TIG\PostNL\Model;

use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;

/**
 * @method $this setShipmentId(string $value)
 * @method null|string getShipmentId
 * @method $this setType(string $value)
 * @method null|string getType
 * @method $this setNumber(string $value)
 * @method null|string getNumber
 * @method $this setValue(string $value)
 * @method null|string getValue
 */
class ShipmentBarcode extends AbstractModel implements ShipmentBarcodeInterface, IdentityInterface
{
    const CACHE_TAG = 'tig_postnl_shipment_barcode';

    const BARCODE_TYPE_SHIPMENT = 'shipment';
    const BARCODE_TYPE_RETURN   = 'return';

    /**
     * Constructor
     */
    // @codingStandardsIgnoreLine
    protected function _construct()
    {
        // @codingStandardsIgnoreLine
        $this->_init('TIG\PostNL\Model\ResourceModel\ShipmentBarcode');
    }

    /**
     * @return array
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}