<?php
/**
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the GNU General Public License (GPL 3)
 * that is bundled with this package in the file LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Payone_Core to newer
 * versions in the future. If you wish to customize Payone_Core for your
 * needs please refer to http://www.payone.de for more information.
 *
 * @category        Payone
 * @package         Payone_Core_Block
 * @subpackage      Payment
 * @copyright       Copyright (c) 2012 <info@noovias.com> - www.noovias.com
 * @author          Matthias Walter <info@noovias.com>
 * @license         <http://www.gnu.org/licenses/> GNU General Public License (GPL 3)
 * @link            http://www.noovias.com
 */

/**
 *
 * @category        Payone
 * @package         Payone_Core_Block
 * @subpackage      Payment
 * @copyright       Copyright (c) 2012 <info@noovias.com> - www.noovias.com
 * @license         <http://www.gnu.org/licenses/> GNU General Public License (GPL 3)
 * @link            http://www.noovias.com
 */
class Payone_Core_Block_Payment_Method_Info_DebitPayment
    extends Payone_Core_Block_Payment_Method_Info_Abstract
{
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('payone/core/payment/method/info/debitpayment.phtml');

    }

    /**
     * @return string
     */
    public function getPayoneAccountOwner()
    {
        return $this->getInfo()->getPayoneAccountOwner();
    }

    /**
     * @return string
     */
    public function getPayoneAccountNumber()
    {
        $accountNumber = $this->getInfo()->getPayoneAccountNumber();
        return substr($accountNumber, strlen($accountNumber) - 4, 4);
    }

    /**
     * @return string
     */
    public function getPayoneBankCode()
    {
        return $this->getInfo()->getPayoneBankCode();
    }

    /**
     * @return string
     */
    public function getPayoneSepaIban()
    {
        return $this->getInfo()->getPayoneSepaIban();
    }

    /**
     * @return string
     */
    public function getPayoneSepaBic()
    {
        return $this->getInfo()->getPayoneSepaBic();
    }
}