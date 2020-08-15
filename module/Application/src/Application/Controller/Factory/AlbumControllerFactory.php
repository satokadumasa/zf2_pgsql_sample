<?php
namespace Application\Controller\Factory;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;
use Application\Model\AlbumTable;
use Application\Controller\AlbumController;

/**
 * This is the factory for PostController. Its purpose is to instantiate the
 * controller.
 */
class AlbumControllerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $albumTable = $container->get('Application\Model\AlbumTable');
        // Instantiate the controller and inject dependencies
        return new AlbumController($albumTable);
    }
}

