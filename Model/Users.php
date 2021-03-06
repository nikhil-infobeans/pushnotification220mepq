<?php
/**
 * InfoBeans PushNotification Extension
 *
 * @category   Infobeans
 * @package    PushNotification
 * @version    1.0.0
 * @description Registered user model
 *
 * Release with version 1.0.0
 *
 * @author      InfoBeans Technologies Limited http://www.infobeans.com/
 * @copyright   Copyright (c) 2019 InfoBeans Technologies Limited
 */

namespace Infobeans\PushNotification\Model;

use Magento\Framework\Model\AbstractModel;

class Users extends AbstractModel
{
    // @codingStandardsIgnoreStart
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\Infobeans\PushNotification\Model\ResourceModel\Users::class);
    }
    // @codingStandardsIgnoreEnd
}
