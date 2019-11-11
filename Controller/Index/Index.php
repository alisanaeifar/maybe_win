<?php
namespace Mastering\SampleModule\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Context;
use Mastering\SampleModule\Model\Config;
class Index extends Action
{
    /**
     * @var Config
     */
    protected $jafar;

    /**
     * Index constructor.
     * @param Config $aliConfig
     * @param Context $context
     */
    public function __construct(Config $aliConfig, Context $context)
    {
        parent::__construct($context);

        $this->jafar=$aliConfig;
    }
//

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        if ($this->jafar->isEnabled()){

            return $this->resultFactory->create(ResultFactory::TYPE_PAGE);

        }
        else
        {

            $result = $this->resultFactory->create(
                ResultFactory::TYPE_RAW
            );
            $result->setContents('this page was deleted by admin!');
            return $result;

        }
    }
}

