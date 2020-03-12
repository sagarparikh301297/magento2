<?php


namespace SimpleMagento\RewardPoint\Block\Sales\Order;


use Magento\Sales\Model\OrderFactory;
use \Magento\Backend\Block\Template\Context;

class ShowReward extends \Magento\Backend\Block\Template
{
    /**
     * @var OrderFactory
     */
    protected $factory;

    public function __construct(Context $context,
                                OrderFactory $factory,
                                array $data = [])
    {
        parent::__construct($context, $data);
        $this->factory = $factory;
    }

    public function getReward(){
        $id = $this->getRequest()->getParam('order_id');
        $getOrder = $this->factory->create()->load($id);
        return $getOrder->getRewardPoint();
//        return $getOrder['reward_point'];
    }

}