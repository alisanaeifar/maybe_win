<?php


namespace Mastering\SampleModule\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Stdlib\DateTime\DateTime;
use Mastering\SampleModule\Model\Item1;

class Save extends Action
{
    /**
     * @var Item1
     */
    protected $model;
    /**
     * @var DateTime
     */
    protected $date;

    /**
     * Save constructor.
     * @param Context $context
     * @param Item1 $model
     * @param DateTime $date
     */
    public function __construct(
        Context $context,
        Item1 $model,
        DateTime $date
    )
    {
        $this->model = $model;
        $this->date = $date;
        parent::__construct($context);
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface
     * @throws \Exception
     */
    public function execute()
    {
        $query['name'] = $this->getRequest()->getPostValue("name");

        if ($query) {

            $this->model->setData($query);
            $this->model->Save();
            $redirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
            $redirect->setUrl($this->_redirect->getRefererUrl());
            $this->messageManager->addSuccess(__('You submitted your Signup successfully.'));
            return $redirect;
        } else {
            $redirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
            $redirect->setUrl($this->_redirect->getRefererUrl());
            $this->messageManager->addError(__('Failed To Submit  Please Provide Valid Data.'));
            return $redirect;
        }
    }
}
