<?php
/**
 * @company MTE Telecom, Ltd.
 * @author Roman Malashin <malashinr@mte-telecom.ru>
 */

namespace NNX\DataGrid\Mutator;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\ServiceManager\MutableCreationOptionsTrait;
use Zend\ServiceManager\MutableCreationOptionsInterface;


/**
 * Class LinkFactory
 * @package NNX\DataGrid\Mutator
 */
class LinkFactory implements FactoryInterface, MutableCreationOptionsInterface
{
    use MutableCreationOptionsTrait;

    public function __construct(array $options)
    {
        $this->setCreationOptions($options);
    }

    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        if ($serviceLocator instanceof GridMutatorPluginManager) {
            $serviceLocator = $serviceLocator->getServiceLocator();
        }
        $helper = $serviceLocator->get('ViewHelperManager')->get('Url');
        $options = $this->getCreationOptions();
        $options['urlHelper'] = $helper;
        $linkMutator = new Link($options);
        return $linkMutator;
    }
}
