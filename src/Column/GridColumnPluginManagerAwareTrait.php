<?php
/**
 * @company MTE Telecom, Ltd.
 * @author Roman Malashin <malashinr@mte-telecom.ru>
 */

namespace NNX\DataGrid\Column;

/**
 * Class GridColumnPluginManagerAwareTrait
 * @package NNX\DataGrid\Column
 */
trait GridColumnPluginManagerAwareTrait
{
    /**
     * Мэнеджер колонок
     * @var GridColumnPluginManager
     */
    protected $columnPluginManager;

    /**
     * Возвращает менеджер колонок
     * @return GridColumnPluginManager
     */
    public function getColumnPluginManager()
    {
        return $this->columnPluginManager;
    }

    /**
     * Устанавливает мэнджер колонок
     * @param GridColumnPluginManager $columnPluginManager
     * @return $this
     */
    public function setColumnPluginManager(GridColumnPluginManager $columnPluginManager)
    {
        $this->columnPluginManager = $columnPluginManager;
        return $this;
    }
}
