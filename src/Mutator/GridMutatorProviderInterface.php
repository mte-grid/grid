<?php
/**
 * @company MTE Telecom, Ltd.
 * @author Roman Malashin <malashinr@mte-telecom.ru>
 */

namespace NNX\DataGrid\Mutator;

use Traversable;

/**
 * Interface GridColumnProviderInterface
 * @package NNX\DataGrid\Column
 */
interface GridMutatorProviderInterface
{
    /**
     * Возвращает конфигурацию мутаторов
     * @return array | Traversable
     */
    public function getGridMutatorConfig();
}
