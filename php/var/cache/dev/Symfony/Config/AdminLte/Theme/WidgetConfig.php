<?php

namespace Symfony\Config\AdminLte\Theme;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class WidgetConfig 
{
    private $collapsibleTitle;
    private $removableTitle;
    private $type;
    private $bordered;
    private $collapsible;
    private $removable;
    private $solid;
    private $useFooter;
    private $_usedProperties = [];

    /**
     * @default 'Collapse'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function collapsibleTitle($value): self
    {
        $this->_usedProperties['collapsibleTitle'] = true;
        $this->collapsibleTitle = $value;

        return $this;
    }

    /**
     * @default 'Remove'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function removableTitle($value): self
    {
        $this->_usedProperties['removableTitle'] = true;
        $this->removableTitle = $value;

        return $this;
    }

    /**
     * @default 'primary'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function type($value): self
    {
        $this->_usedProperties['type'] = true;
        $this->type = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function bordered($value): self
    {
        $this->_usedProperties['bordered'] = true;
        $this->bordered = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function collapsible($value): self
    {
        $this->_usedProperties['collapsible'] = true;
        $this->collapsible = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function removable($value): self
    {
        $this->_usedProperties['removable'] = true;
        $this->removable = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function solid($value): self
    {
        $this->_usedProperties['solid'] = true;
        $this->solid = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function useFooter($value): self
    {
        $this->_usedProperties['useFooter'] = true;
        $this->useFooter = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('collapsible_title', $value)) {
            $this->_usedProperties['collapsibleTitle'] = true;
            $this->collapsibleTitle = $value['collapsible_title'];
            unset($value['collapsible_title']);
        }

        if (array_key_exists('removable_title', $value)) {
            $this->_usedProperties['removableTitle'] = true;
            $this->removableTitle = $value['removable_title'];
            unset($value['removable_title']);
        }

        if (array_key_exists('type', $value)) {
            $this->_usedProperties['type'] = true;
            $this->type = $value['type'];
            unset($value['type']);
        }

        if (array_key_exists('bordered', $value)) {
            $this->_usedProperties['bordered'] = true;
            $this->bordered = $value['bordered'];
            unset($value['bordered']);
        }

        if (array_key_exists('collapsible', $value)) {
            $this->_usedProperties['collapsible'] = true;
            $this->collapsible = $value['collapsible'];
            unset($value['collapsible']);
        }

        if (array_key_exists('removable', $value)) {
            $this->_usedProperties['removable'] = true;
            $this->removable = $value['removable'];
            unset($value['removable']);
        }

        if (array_key_exists('solid', $value)) {
            $this->_usedProperties['solid'] = true;
            $this->solid = $value['solid'];
            unset($value['solid']);
        }

        if (array_key_exists('use_footer', $value)) {
            $this->_usedProperties['useFooter'] = true;
            $this->useFooter = $value['use_footer'];
            unset($value['use_footer']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['collapsibleTitle'])) {
            $output['collapsible_title'] = $this->collapsibleTitle;
        }
        if (isset($this->_usedProperties['removableTitle'])) {
            $output['removable_title'] = $this->removableTitle;
        }
        if (isset($this->_usedProperties['type'])) {
            $output['type'] = $this->type;
        }
        if (isset($this->_usedProperties['bordered'])) {
            $output['bordered'] = $this->bordered;
        }
        if (isset($this->_usedProperties['collapsible'])) {
            $output['collapsible'] = $this->collapsible;
        }
        if (isset($this->_usedProperties['removable'])) {
            $output['removable'] = $this->removable;
        }
        if (isset($this->_usedProperties['solid'])) {
            $output['solid'] = $this->solid;
        }
        if (isset($this->_usedProperties['useFooter'])) {
            $output['use_footer'] = $this->useFooter;
        }

        return $output;
    }

}
