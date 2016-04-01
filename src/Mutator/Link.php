<?php
/**
 * @company MTE Telecom, Ltd.
 * @author Roman Malashin <malashinr@mte-telecom.ru>
 */

namespace NNX\DataGrid\Mutator;

use Zend\View\Helper\Url;


/**
 * Class Link
 * @package NNX\DataGrid\Mutator
 */
class Link extends AbstractMutator
{
    /**
     * @var Url
     */
    protected $urlHelper;

    /**
     * @var string
     */
    protected $routeName;

    /**
     * @var array
     */
    protected $routeParams;

    /**
     * @var array
     */
    protected $routeOptions = [];


    public function __construct(array $options = [])
    {
        parent::__construct($options);
        $urlHelper = array_key_exists('urlHelper', $options) ? $options['urlHelper'] : null;
        if (!$urlHelper || !$urlHelper instanceof Url) {
            throw new Exception\InvalidArgumentException('Для корректной работы мутатора необходимо передавать helper url.');
        }
        $this->setUrlHelper($urlHelper);

        if (array_key_exists('routeName', $options)) {
            $this->setRouteName($options['routeName']);
        }
        if (array_key_exists('routeParams', $options)) {
            $this->setRouteParams($options['routeParams']);
        }
        if (array_key_exists('routeOptions', $options)) {
            $this->setRouteOptions($options['routeOptions']);
        }
    }


    /**
     * Изменяет данные возвращая линк
     * @param mixed $value
     * @return mixed
     */
    public function change($value)
    {
        $urlHelper = $this->getUrlHelper();
        $options = array_merge($this->getRouteOptions(), $this->getRowData());
        return '<a href="'
        . $this->getUrl($urlHelper($this->getRouteName(), $this->getRouteParams(), $options))
        . '">' . $value . '</a>';
    }


    /**
     * @param string $urlTemplate
     * @return string
     */
    public function getUrl($urlTemplate)
    {
        return preg_replace_callback('/:([a-zA-Z_]+)/', [$this, 'replaceCallback'], $urlTemplate);
    }

    /**
     * @param array $matches
     * @return mixed|string
     */
    protected function replaceCallback($matches)
    {
        $row = $this->getRowData();
        $varName = $matches[1];
        $value = '';

        if (isset($row[$varName])) {
            if ($varName !== 'backurl') {
                $value = urlencode($row[$varName]);
            } else {
                $value = $row[$varName];
            }
        }

        return $value;
    }

    /**
     * @return Url
     */
    public function getUrlHelper()
    {
        return $this->urlHelper;
    }

    /**
     * @param Url $urlHelper
     * @return $this
     */
    public function setUrlHelper($urlHelper)
    {
        $this->urlHelper = $urlHelper;
        return $this;
    }

    /**
     * @return string
     */
    public function getRouteName()
    {
        return $this->routeName;
    }

    /**
     * @param string $routeName
     * @return $this
     */
    public function setRouteName($routeName)
    {
        $this->routeName = $routeName;
        return $this;
    }

    /**
     * @return array
     */
    public function getRouteParams()
    {
        return $this->routeParams;
    }

    /**
     * @param array $routeParams
     * @return $this
     */
    public function setRouteParams($routeParams)
    {
        $this->routeParams = $routeParams;
        return $this;
    }

    /**
     * @return array
     */
    public function getRouteOptions()
    {
        return $this->routeOptions;
    }

    /**
     * @param array $routeOptions
     * @return $this
     */
    public function setRouteOptions($routeOptions)
    {
        $this->routeOptions = $routeOptions;
        return $this;
    }
}
