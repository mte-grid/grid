<?php
/**
 * @company MTE Telecom, Ltd.
 * @author Roman Malashin <malashinr@mte-telecom.ru>
 */

namespace NNX\DataGrid;

/**
 * Interface GridPluginManagerProviderInterface
 * @package NNX\DataGrid
 */
interface GridProviderInterface
{
    /**
     * Возвращает конфигурацию таблиц
     * @return array
     */
    public function getGridConfig();
}
