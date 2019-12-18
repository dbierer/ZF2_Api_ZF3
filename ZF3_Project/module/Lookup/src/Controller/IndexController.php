<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Lookup\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Http\Client;
use Zend\Http\Request;

class IndexController extends AbstractActionController
{
    protected $client;
    protected $config;
    public function __construct(Client $client, array $config)
    {
        $this->client = $client;
        $this->config = $config;
    }
    public function indexAction()
    {
        $uri = $this->config['ZF2_Project']['lookup'];
        $request = new Request();
        $request->setUri($uri);
        $request->getHeaders()->addHeaders([
            'Accept' => 'application/json',
        ]);
        $response = $this->client->send($request);
        $data = json_decode($response->getBody(), TRUE);
        return new ViewModel($data);
    }
}
