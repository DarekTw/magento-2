<?php

/**
 * PAYONE Magento 2 Connector is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * PAYONE Magento 2 Connector is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with PAYONE Magento 2 Connector. If not, see <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 *
 * @category  Payone
 * @package   Payone_Magento2_Plugin
 * @author    FATCHIP GmbH <support@fatchip.de>
 * @copyright 2003 - 2017 Payone GmbH
 * @license   <http://www.gnu.org/licenses/> GNU Lesser General Public License
 * @link      http://www.payone.de
 */

namespace Payone\Core\Block\Onepage\Review;

use Magento\Sales\Model\Order\Address;
use Magento\Checkout\Block\Cart\Totals;

class Details extends Totals
{
    /**
     * Address object
     *
     * @var Address
     */
    protected $_address;

    /**
     * Returns the totals of the current quote
     *
     * @return array
     */
    public function getTotals()
    {
        return $this->getQuote()->getTotals();
    }

    /**
     * Returns the current shipping address of the quote
     *
     * @return Address
     */
    public function getAddress()
    {
        if (!$this->_address) {
            $this->_address = $this->getQuote()->getShippingAddress();
        }
        return $this->_address;
    }
}
