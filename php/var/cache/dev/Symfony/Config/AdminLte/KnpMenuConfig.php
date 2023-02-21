<?php

namespace Symfony\Config\AdminLte;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class KnpMenuConfig 
{
    private $enable;
    private $mainMenu;
    private $breadcrumbMenu;
    private $_usedProperties = [];

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enable($value): self
    {
        $this->_usedProperties['enable'] = true;
        $this->enable = $value;

        return $this;
    }

    /**
     * your builder alias
     * @default 'adminlte_main'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function mainMenu($value): self
    {
        $this->_usedProperties['mainMenu'] = true;
        $this->mainMenu = $value;

        return $this;
    }

    /**
     * Your builder alias or false to disable breadcrumbs
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function breadcrumbMenu($value): self
    {
        $this->_usedProperties['breadcrumbMenu'] = true;
        $this->breadcrumbMenu = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enable', $value)) {
            $this->_usedProperties['enable'] = true;
            $this->enable = $value['enable'];
            unset($value['enable']);
        }

        if (array_key_exists('main_menu', $value)) {
            $this->_usedProperties['mainMenu'] = true;
            $this->mainMenu = $value['main_menu'];
            unset($value['main_menu']);
        }

        if (array_key_exists('breadcrumb_menu', $value)) {
            $this->_usedProperties['breadcrumbMenu'] = true;
            $this->breadcrumbMenu = $value['breadcrumb_menu'];
            unset($value['breadcrumb_menu']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enable'])) {
            $output['enable'] = $this->enable;
        }
        if (isset($this->_usedProperties['mainMenu'])) {
            $output['main_menu'] = $this->mainMenu;
        }
        if (isset($this->_usedProperties['breadcrumbMenu'])) {
            $output['breadcrumb_menu'] = $this->breadcrumbMenu;
        }

        return $output;
    }

}
