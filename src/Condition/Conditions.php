<?php
/**
 * @company MTE Telecom, Ltd.
 * @author Roman Malashin <malashinr@mte-telecom.ru>
 */

namespace Nnx\DataGrid\Condition;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class Conditions
 * @package Nnx\DataGrid
 */
class Conditions extends ArrayCollection
{
    /**
     * @param int|string $key
     */
    public function remove($key)
    {
        $it = $this->getIterator();
        $removed = null;
        /**
         * @var int $k
         * @var  SimpleCondition $v
         */
        foreach ($it as $k => $v) {
            if ($v->getKey() === $key) {
                $removed = parent::remove($k);
                break;
            }
        }
        return $removed;
    }
}
