<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Api;

return array(
    'router' => array(
        'routes' => array(
            'api' => array(
                'type' => 'Zend\Mvc\Router\Http\Segment',
                'options' => array(
                    'route'    => '/api[/:action]',
                    'defaults' => array(
                        'controller' => Controller\IndexController::class,
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),
    // NOTE: database params defined in /config/autoload/local.php
    'controllers' => array(
        'factories' => array(
            Controller\IndexController::class => Controller\IndexControllerFactory::class
        ),
    ),
    'view_manager' => array(
        'strategies' => array(
            'ViewJsonStrategy',
        ),
    ),
);
