<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Api\Controller;

use Application\Traits\UserModelTrait;
use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;

class IndexController extends AbstractRestfulController
{
    use UserModelTrait;
    public function lookupAction()
    {
        $list = $this->model->fetchAll();
        return new JsonModel(['list' => iterator_to_array($list)]);
    }
}
