<?php
/**
 * @company MTE Telecom, Ltd.
 * @author Roman Malashin <malashinr@mte-telecom.ru>
 */

namespace NNX\DataGrid\Column;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\ServiceManager\MutableCreationOptionsInterface;
use Zend\ServiceManager\MutableCreationOptionsTrait;

/**
 * Class ActionFactory
 * @package NNX\DataGrid\Column
 */
class ActionFactory implements FactoryInterface, MutableCreationOptionsInterface
{
    use MutableCreationOptionsTrait;

    /**
     * @param array $options
     */
    public function __construct(array $options = [])
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
        if ($serviceLocator instanceof GridColumnPluginManager) {
            $helper = $serviceLocator->getServiceLocator()->get('ViewHelperManager')->get('Url');
        } else {
            $helper = $serviceLocator->get('ViewHelperManager')->get('Url');
        }
        $options = $this->getCreationOptions();
        $options['urlHelper'] = $helper;
        return new Action($options);
    }
}
