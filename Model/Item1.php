<?php
namespace Mastering\SampleModule\Model;
use Magento\Framework\Model\AbstractModel;

class Item1 extends AbstractModel{
    /**
     *
     */
    public function _construct(){
        $this->_init(ResourceModel\Item1::class);
    }
}
?>
