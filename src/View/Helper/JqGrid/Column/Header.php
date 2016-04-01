<?php
/**
 * @company MTE Telecom, Ltd.
 * @author Roman Malashin <malashinr@mte-telecom.ru>
 */

namespace NNX\DataGrid\View\Helper\Column;

use Zend\View\Helper\AbstractHelper;

/**
 * Class Header
 * @package NNX\DataGrid\View\Helper\Column
 */
class Header extends AbstractHelper
{

    public function __invoke($header)
    {
        return (object)[
            ''
        ];
    }
}
