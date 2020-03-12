<?php
/**
 *
 * @category   Krish
 * @package    Ktpl_Quickview
 * @author     Extension Team
 */
namespace Ktpl\Quickview\Block;

/**
 * Quickview Initialize block
 */
class Initialize extends \Magento\Framework\View\Element\Template
{
    /**
     * @var \Ktpl\QuickView\Helper\Data
     */
    protected $helper;

    /**
     * @param \Ktpl\Quickview\Helper\Data $helper
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    public function __construct(
        \Ktpl\Quickview\Helper\Data $helper,
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = []
    ) {
        $this->helper = $helper;
        parent::__construct($context, $data);
    }

    /**
     * Returns config
     *
     * @return array
     */
    public function getConfig()
    {
        return [
            'baseUrl' => $this->getBaseUrl()
        ];
    }

    public function getHelper() {
        return $this->helper;
    }

    /**
     * Return base url.
     *
     * @codeCoverageIgnore
     * @return string
     */
    public function getBaseUrl()
    {
        return $this->_storeManager->getStore()->getBaseUrl();
    }
}
