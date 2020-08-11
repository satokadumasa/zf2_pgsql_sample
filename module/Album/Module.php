<?php

namespace Album;

use Album\Model\Album;
use Album\Model\AlbumTable;
use Laminas\Db\ResultSet\ResultSet;
use Laminas\Db\TableGateway\TableGateway;

class Module
{
    public function getAutoloaderConfig()
    {
        echo "Album\Module::getAutoloaderConfig()<br>\n";
        return array(
            'Laminas\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            ),
            'Laminas\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getServiceConfig()
    {
        echo "Album\Module::getServiceConfig()<br>\n";
        return array(
            'factories' => array(
                'Album\Model\AlbumTable' =>  function($sm) {
                    $tableGateway = $sm->get('AlbumTableGateway');
                    $table = new AlbumTable($tableGateway);
                    return $table;
                },
                // 'AlbumTableGateway' => function ($sm) {
                //     $dbAdapter = $sm->get('Laminas\Db\Adapter\Adapter');
                //     $resultSetPrototype = new ResultSet();
                //     $resultSetPrototype->setArrayObjectPrototype(new Album());
                //     return new TableGateway('album', $dbAdapter, null, $resultSetPrototype);
                // },
                Model\AlbumTableGateway::class => function ($container) {
                    $dbAdapter = $container->get(AdapterInterface::class);
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new Model\Album());
                    return new TableGateway('album', $dbAdapter, null, $resultSetPrototype);
                },
            ),
        );
    }

    public function getConfig()
    {
        echo "Album\Module::getConfig()<br>\n";
        return include __DIR__ . '/config/module.config.php';
    }

    // Add this method:
    public function getControllerConfig()
    {
        echo "Album\Module::getControllerConfig()<br>\n";
        return [
            'factories' => [
                Controller\AlbumController::class => function($container) {
                    return new Controller\AlbumController(
                        $container->get(Album\Model\AlbumTable::class)
                    );
                },
            ],
        ];
    }
}