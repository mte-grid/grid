<?php
/**
 * @company MTE Telecom, Ltd.
 * @author Roman Malashin <malashinr@mte-telecom.ru>
 */

namespace MteGrid\Grid\Column;

use Zend\Mvc\Service\AbstractPluginManagerFactory;

/**
 * Class ColumnPluginManagerFactory
 * @package MteGrid\Grid\Column
 */
class GridColumnPluginManagerFactory extends AbstractPluginManagerFactory
{
    const PLUGIN_MANAGER_CLASS = GridColumnPluginManager::class;
}