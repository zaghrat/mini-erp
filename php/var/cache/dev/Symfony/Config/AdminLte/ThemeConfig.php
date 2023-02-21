<?php

namespace Symfony\Config\AdminLte;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Theme'.\DIRECTORY_SEPARATOR.'WidgetConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Theme'.\DIRECTORY_SEPARATOR.'ButtonConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ThemeConfig 
{
    private $widget;
    private $button;
    private $_usedProperties = [];

    public function widget(array $value = []): \Symfony\Config\AdminLte\Theme\WidgetConfig
    {
        if (null === $this->widget) {
            $this->_usedProperties['widget'] = true;
            $this->widget = new \Symfony\Config\AdminLte\Theme\WidgetConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "widget()" has already been initialized. You cannot pass values the second time you call widget().');
        }

        return $this->widget;
    }

    public function button(array $value = []): \Symfony\Config\AdminLte\Theme\ButtonConfig
    {
        if (null === $this->button) {
            $this->_usedProperties['button'] = true;
            $this->button = new \Symfony\Config\AdminLte\Theme\ButtonConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "button()" has already been initialized. You cannot pass values the second time you call button().');
        }

        return $this->button;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('widget', $value)) {
            $this->_usedProperties['widget'] = true;
            $this->widget = new \Symfony\Config\AdminLte\Theme\WidgetConfig($value['widget']);
            unset($value['widget']);
        }

        if (array_key_exists('button', $value)) {
            $this->_usedProperties['button'] = true;
            $this->button = new \Symfony\Config\AdminLte\Theme\ButtonConfig($value['button']);
            unset($value['button']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['widget'])) {
            $output['widget'] = $this->widget->toArray();
        }
        if (isset($this->_usedProperties['button'])) {
            $output['button'] = $this->button->toArray();
        }

        return $output;
    }

}
