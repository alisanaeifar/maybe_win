<?php

declare(strict_types=1);
namespace Mastering\SampleModule\Controller\Adminhtml\Post;

use Magento\Backend\App\Action;
use Magento\Framework\Controller\ResultFactory;

class Show extends Action
{
    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
        $result->setContents('display');
        return $result;
    }
}
