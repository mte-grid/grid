<?php
/**
 * @company MTE Telecom, Ltd.
 * @author Roman Malashin <malashinr@mte-telecom.ru>
 */

namespace NNX\DataGrid\Column;

/**
 * Class Link
 * @package NNX\DataGrid\Column
 */
class Link extends AbstractColumn
{
    /**
     * @var array
     */
    protected $invokableMutators = [
        'link'
    ];
}
