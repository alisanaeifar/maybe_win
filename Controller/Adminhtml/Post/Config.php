<?php
namespace Mastering\SampleModule\Controller\Adminhtml\Post;

use Magento\Backend\App\Action;
use Magento\Framework\Controller\ResultFactory;

class Config extends Action
{
    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|void
     */
    public function execute()
    {
        echo $result = "
        </br>
        
        Do You Wanna Enable The Form?
        </br>
        <form action=\"#\" method=\"post\">
        
        <select name=\"formConfiguration\">
                
          <option value=\"0\">Disable</option>
        
          <option value=\"1\">Enable</option>
        
        </select>
        
        </br>
        
        <input type=\"submit\" value=\"Send Config informations\">
        </form>
        </p>
        ";
    }

}
