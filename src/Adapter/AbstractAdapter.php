<?php
/**
 * @company MTE Telecom, Ltd.
 * @author Roman Malashin <malashinr@mte-telecom.ru>
 */

namespace NNX\DataGrid\Adapter;

use NNX\DataGrid\Condition\Conditions;
use Doctrine\Common\Collections\ArrayCollection;
use ArrayAccess;
use Traversable;

/**
 * Class AbstractAdapter 
 * @package NNX\DataGrid\Adapter
 */
class AbstractAdapter implements AdapterInterface
{
    /**
     * @var Conditions
     */
    protected $conditions;

    /**
     * @var int
     */
    protected $count;

    /**
     * @var array | ArrayAccess | Traversable
     */
    protected $options;


    /**
     * @return array | ArrayCollection
     */
    public function getData()
    {
    }

    /**
     * @return mixed
     */
    public function init()
    {
    }

    /**
     * Возвращает количество записей
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param Conditions $conditions
     * @return mixed
     */
    public function setConditions(Conditions $conditions)
    {
        $this->conditions = $conditions;
        return $this;
    }

    /**
     * @return Conditions
     */
    public function getConditions()
    {
        return $this->conditions;
    }

    /**
     * Устанавливает опции для адаптера
     * @param array | ArrayAccess | Traversable $options
     * @return $this
     */
    public function setOptions($options)
    {
        $this->options = $options;
        return $this;
    }

    /**
     * Возвращает опции адаптера
     * @return array | ArrayAccess | Traversable
     */
    public function getOptions()
    {
        return $this->options;
    }
}
