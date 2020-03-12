<?php


namespace SimpleMagento\RewardPoint\Observer;


use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class SaveRewardPoint implements ObserverInterface
{
    /**
     * @var \Magento\Customer\Model\Session
     */
    protected $customerSession;

    public function __construct(\Magento\Customer\Model\Session $customerSession)
    {
        $this->customerSession = $customerSession;
    }

    /**
     * @param Observer $observer
     * @return void
     */
    public function execute(Observer $observer)
    {
        $order=$observer->getEvent()->getOrder();
        $savePoint = $this->customerSession->getMyValue();
        $order->setData('reward_point',$savePoint);
        $order->save();
        return $this;
    }
}