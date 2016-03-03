<?php
/**
 * @company MTE Telecom, Ltd.
 * @author Roman Malashin <malashinr@mte-telecom.ru>
 */

namespace MteGrid\Grid\Column\Header;

use \Traversable;

/**
 * Interface HeaderInterface
 * @package MteGrid\Grid\Column\Header
 *
 * Интерфейс для заголовков
 */
interface HeaderInterface
{
    /**
     * Устанавливает шаблон для заголовка табоицы
     * @param $template
     * @return $this
     */
    public function setTemplate($template);

    /**
     * возвращает путь до шаблона
     * @return string
     */
    public function getTemplate();

    /**
     * Усанавливает опции для заголовка
     * @param array|Traversable $options
     * @return mixed
     */
    public function setOptions(array $options = []);

    /**
     * Возвращает набор опций для заголовка
     * @return array
     */
    public function getOptions();

    /**
     * Данные для шаблона заголовка
     * @param array | \Traversable $data
     * @return $this
     */
    public function setData($data);

    /**
     * Возвращает данные для шаблона
     * @return array
     */
    public function getData();
}