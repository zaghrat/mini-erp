<?php

namespace Symfony\Config\AdminLte;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class OptionsConfig 
{
    private $defaultAvatar;
    private $skin;
    private $formTheme;
    private $fixedLayout;
    private $boxedLayout;
    private $collapsedSidebar;
    private $miniSidebar;
    private $maxNavbarNotifications;
    private $maxNavbarTasks;
    private $maxNavbarMessages;
    private $_usedProperties = [];

    /**
     * @default 'bundles/adminlte/images/default_avatar.png'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultAvatar($value): self
    {
        $this->_usedProperties['defaultAvatar'] = true;
        $this->defaultAvatar = $value;

        return $this;
    }

    /**
     * see skin listing for viable options
     * @default 'skin-blue'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function skin($value): self
    {
        $this->_usedProperties['skin'] = true;
        $this->skin = $value;

        return $this;
    }

    /**
     * the form theme, must be one of: default, horizontal or null
     * @default 'default'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function formTheme($value): self
    {
        $this->_usedProperties['formTheme'] = true;
        $this->formTheme = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function fixedLayout($value): self
    {
        $this->_usedProperties['fixedLayout'] = true;
        $this->fixedLayout = $value;

        return $this;
    }

    /**
     * these settings relate directly to the "Layout Options"
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function boxedLayout($value): self
    {
        $this->_usedProperties['boxedLayout'] = true;
        $this->boxedLayout = $value;

        return $this;
    }

    /**
     * described in the documentation
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function collapsedSidebar($value): self
    {
        $this->_usedProperties['collapsedSidebar'] = true;
        $this->collapsedSidebar = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function miniSidebar($value): self
    {
        $this->_usedProperties['miniSidebar'] = true;
        $this->miniSidebar = $value;

        return $this;
    }

    /**
     * Max number of notifications displayed in the notification bar
     * @default 10
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function maxNavbarNotifications($value): self
    {
        $this->_usedProperties['maxNavbarNotifications'] = true;
        $this->maxNavbarNotifications = $value;

        return $this;
    }

    /**
     * Max number of tasks displayed in the notification bar
     * @default 10
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function maxNavbarTasks($value): self
    {
        $this->_usedProperties['maxNavbarTasks'] = true;
        $this->maxNavbarTasks = $value;

        return $this;
    }

    /**
     * Max number of messages displayed in the notification bar
     * @default 10
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function maxNavbarMessages($value): self
    {
        $this->_usedProperties['maxNavbarMessages'] = true;
        $this->maxNavbarMessages = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('default_avatar', $value)) {
            $this->_usedProperties['defaultAvatar'] = true;
            $this->defaultAvatar = $value['default_avatar'];
            unset($value['default_avatar']);
        }

        if (array_key_exists('skin', $value)) {
            $this->_usedProperties['skin'] = true;
            $this->skin = $value['skin'];
            unset($value['skin']);
        }

        if (array_key_exists('form_theme', $value)) {
            $this->_usedProperties['formTheme'] = true;
            $this->formTheme = $value['form_theme'];
            unset($value['form_theme']);
        }

        if (array_key_exists('fixed_layout', $value)) {
            $this->_usedProperties['fixedLayout'] = true;
            $this->fixedLayout = $value['fixed_layout'];
            unset($value['fixed_layout']);
        }

        if (array_key_exists('boxed_layout', $value)) {
            $this->_usedProperties['boxedLayout'] = true;
            $this->boxedLayout = $value['boxed_layout'];
            unset($value['boxed_layout']);
        }

        if (array_key_exists('collapsed_sidebar', $value)) {
            $this->_usedProperties['collapsedSidebar'] = true;
            $this->collapsedSidebar = $value['collapsed_sidebar'];
            unset($value['collapsed_sidebar']);
        }

        if (array_key_exists('mini_sidebar', $value)) {
            $this->_usedProperties['miniSidebar'] = true;
            $this->miniSidebar = $value['mini_sidebar'];
            unset($value['mini_sidebar']);
        }

        if (array_key_exists('max_navbar_notifications', $value)) {
            $this->_usedProperties['maxNavbarNotifications'] = true;
            $this->maxNavbarNotifications = $value['max_navbar_notifications'];
            unset($value['max_navbar_notifications']);
        }

        if (array_key_exists('max_navbar_tasks', $value)) {
            $this->_usedProperties['maxNavbarTasks'] = true;
            $this->maxNavbarTasks = $value['max_navbar_tasks'];
            unset($value['max_navbar_tasks']);
        }

        if (array_key_exists('max_navbar_messages', $value)) {
            $this->_usedProperties['maxNavbarMessages'] = true;
            $this->maxNavbarMessages = $value['max_navbar_messages'];
            unset($value['max_navbar_messages']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['defaultAvatar'])) {
            $output['default_avatar'] = $this->defaultAvatar;
        }
        if (isset($this->_usedProperties['skin'])) {
            $output['skin'] = $this->skin;
        }
        if (isset($this->_usedProperties['formTheme'])) {
            $output['form_theme'] = $this->formTheme;
        }
        if (isset($this->_usedProperties['fixedLayout'])) {
            $output['fixed_layout'] = $this->fixedLayout;
        }
        if (isset($this->_usedProperties['boxedLayout'])) {
            $output['boxed_layout'] = $this->boxedLayout;
        }
        if (isset($this->_usedProperties['collapsedSidebar'])) {
            $output['collapsed_sidebar'] = $this->collapsedSidebar;
        }
        if (isset($this->_usedProperties['miniSidebar'])) {
            $output['mini_sidebar'] = $this->miniSidebar;
        }
        if (isset($this->_usedProperties['maxNavbarNotifications'])) {
            $output['max_navbar_notifications'] = $this->maxNavbarNotifications;
        }
        if (isset($this->_usedProperties['maxNavbarTasks'])) {
            $output['max_navbar_tasks'] = $this->maxNavbarTasks;
        }
        if (isset($this->_usedProperties['maxNavbarMessages'])) {
            $output['max_navbar_messages'] = $this->maxNavbarMessages;
        }

        return $output;
    }

}
