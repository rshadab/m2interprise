<?php


namespace Interprise\Logger\Model\Payment;

class InterprisePaid extends \Magento\Payment\Model\Method\AbstractMethod
{

    protected $_code = "interprisepaid";
    protected $_isOffline = true;

    public function isAvailable(
        \Magento\Quote\Api\Data\CartInterface $quote = null
    ) {
        return parent::isAvailable($quote);
    }
}
