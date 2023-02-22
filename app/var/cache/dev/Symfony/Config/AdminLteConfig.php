<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'AdminLte'.\DIRECTORY_SEPARATOR.'OptionsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'AdminLte'.\DIRECTORY_SEPARATOR.'ControlSidebarConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'AdminLte'.\DIRECTORY_SEPARATOR.'ThemeConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'AdminLte'.\DIRECTORY_SEPARATOR.'KnpMenuConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'AdminLte'.\DIRECTORY_SEPARATOR.'RoutesConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class AdminLteConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $options;
    private $controlSidebar;
    private $theme;
    private $knpMenu;
    private $routes;
    private $_usedProperties = [];

    public function options(array $value = []): \Symfony\Config\AdminLte\OptionsConfig
    {
        if (null === $this->options) {
            $this->_usedProperties['options'] = true;
            $this->options = new \Symfony\Config\AdminLte\OptionsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "options()" has already been initialized. You cannot pass values the second time you call options().');
        }

        return $this->options;
    }

    public function controlSidebar(array $value = []): \Symfony\Config\AdminLte\ControlSidebarConfig
    {
        $this->_usedProperties['controlSidebar'] = true;

        return $this->controlSidebar[] = new \Symfony\Config\AdminLte\ControlSidebarConfig($value);
    }

    public function theme(array $value = []): \Symfony\Config\AdminLte\ThemeConfig
    {
        if (null === $this->theme) {
            $this->_usedProperties['theme'] = true;
            $this->theme = new \Symfony\Config\AdminLte\ThemeConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "theme()" has already been initialized. You cannot pass values the second time you call theme().');
        }

        return $this->theme;
    }

    public function knpMenu(array $value = []): \Symfony\Config\AdminLte\KnpMenuConfig
    {
        if (null === $this->knpMenu) {
            $this->_usedProperties['knpMenu'] = true;
            $this->knpMenu = new \Symfony\Config\AdminLte\KnpMenuConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "knpMenu()" has already been initialized. You cannot pass values the second time you call knpMenu().');
        }

        return $this->knpMenu;
    }

    public function routes(array $value = []): \Symfony\Config\AdminLte\RoutesConfig
    {
        if (null === $this->routes) {
            $this->_usedProperties['routes'] = true;
            $this->routes = new \Symfony\Config\AdminLte\RoutesConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "routes()" has already been initialized. You cannot pass values the second time you call routes().');
        }

        return $this->routes;
    }

    public function getExtensionAlias(): string
    {
        return 'admin_lte';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('options', $value)) {
            $this->_usedProperties['options'] = true;
            $this->options = new \Symfony\Config\AdminLte\OptionsConfig($value['options']);
            unset($value['options']);
        }

        if (array_key_exists('control_sidebar', $value)) {
            $this->_usedProperties['controlSidebar'] = true;
            $this->controlSidebar = array_map(function ($v) { return new \Symfony\Config\AdminLte\ControlSidebarConfig($v); }, $value['control_sidebar']);
            unset($value['control_sidebar']);
        }

        if (array_key_exists('theme', $value)) {
            $this->_usedProperties['theme'] = true;
            $this->theme = new \Symfony\Config\AdminLte\ThemeConfig($value['theme']);
            unset($value['theme']);
        }

        if (array_key_exists('knp_menu', $value)) {
            $this->_usedProperties['knpMenu'] = true;
            $this->knpMenu = new \Symfony\Config\AdminLte\KnpMenuConfig($value['knp_menu']);
            unset($value['knp_menu']);
        }

        if (array_key_exists('routes', $value)) {
            $this->_usedProperties['routes'] = true;
            $this->routes = new \Symfony\Config\AdminLte\RoutesConfig($value['routes']);
            unset($value['routes']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['options'])) {
            $output['options'] = $this->options->toArray();
        }
        if (isset($this->_usedProperties['controlSidebar'])) {
            $output['control_sidebar'] = array_map(function ($v) { return $v->toArray(); }, $this->controlSidebar);
        }
        if (isset($this->_usedProperties['theme'])) {
            $output['theme'] = $this->theme->toArray();
        }
        if (isset($this->_usedProperties['knpMenu'])) {
            $output['knp_menu'] = $this->knpMenu->toArray();
        }
        if (isset($this->_usedProperties['routes'])) {
            $output['routes'] = $this->routes->toArray();
        }

        return $output;
    }

}
