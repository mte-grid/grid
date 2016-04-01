<?php
/**
 * @company MTE Telecom, Ltd.
 * @author Roman Malashin <malashinr@mte-telecom.ru>
 */

namespace NNX\DataGrid;

use ArrayAccess;

/**
 * Interface RowDataAwareInterface
 * @package NNX\DataGrid\Column
 */
interface RowDataAwareInterface
{
    /**
     * Возвращает данные строки
     * @return array|ArrayAccess
     */
    public function getRowData();

    /**
     * Устанавливает данные строки
     * @param array|ArrayAccess $data
     * @return $this
     */
    public function setRowData($data);
}
