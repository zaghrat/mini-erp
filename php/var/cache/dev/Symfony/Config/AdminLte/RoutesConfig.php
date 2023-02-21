<?php

namespace Symfony\Config\AdminLte;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class RoutesConfig 
{
    private $adminlteWelcome;
    private $adminlteLogin;
    private $adminlteLoginCheck;
    private $adminlteRegistration;
    private $adminltePasswordReset;
    private $adminlteMessage;
    private $adminlteMessages;
    private $adminlteNotification;
    private $adminlteNotifications;
    private $adminlteTask;
    private $adminlteTasks;
    private $adminlteProfile;
    private $_usedProperties = [];

    /**
     * name of the homepage route
     * @default 'home'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function adminlteWelcome($value): self
    {
        $this->_usedProperties['adminlteWelcome'] = true;
        $this->adminlteWelcome = $value;

        return $this;
    }

    /**
     * name of the form login route
     * @default 'login'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function adminlteLogin($value): self
    {
        $this->_usedProperties['adminlteLogin'] = true;
        $this->adminlteLogin = $value;

        return $this;
    }

    /**
     * name of the form login_check route
     * @default 'login_check'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function adminlteLoginCheck($value): self
    {
        $this->_usedProperties['adminlteLoginCheck'] = true;
        $this->adminlteLoginCheck = $value;

        return $this;
    }

    /**
     * name of the user registration form route
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function adminlteRegistration($value): self
    {
        $this->_usedProperties['adminlteRegistration'] = true;
        $this->adminlteRegistration = $value;

        return $this;
    }

    /**
     * name of the forgot-password form route
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function adminltePasswordReset($value): self
    {
        $this->_usedProperties['adminltePasswordReset'] = true;
        $this->adminltePasswordReset = $value;

        return $this;
    }

    /**
     * name of the route to one message
     * @default 'message'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function adminlteMessage($value): self
    {
        $this->_usedProperties['adminlteMessage'] = true;
        $this->adminlteMessage = $value;

        return $this;
    }

    /**
     * name of the route to all messages
     * @default 'messages'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function adminlteMessages($value): self
    {
        $this->_usedProperties['adminlteMessages'] = true;
        $this->adminlteMessages = $value;

        return $this;
    }

    /**
     * name of the route to one notification
     * @default 'notification'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function adminlteNotification($value): self
    {
        $this->_usedProperties['adminlteNotification'] = true;
        $this->adminlteNotification = $value;

        return $this;
    }

    /**
     * name of the route to all notification
     * @default 'notifications'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function adminlteNotifications($value): self
    {
        $this->_usedProperties['adminlteNotifications'] = true;
        $this->adminlteNotifications = $value;

        return $this;
    }

    /**
     * name of the route to one task
     * @default 'task'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function adminlteTask($value): self
    {
        $this->_usedProperties['adminlteTask'] = true;
        $this->adminlteTask = $value;

        return $this;
    }

    /**
     * name of the route to all tasks
     * @default 'tasks'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function adminlteTasks($value): self
    {
        $this->_usedProperties['adminlteTasks'] = true;
        $this->adminlteTasks = $value;

        return $this;
    }

    /**
     * name of the route to the users profile
     * @default 'profile'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function adminlteProfile($value): self
    {
        $this->_usedProperties['adminlteProfile'] = true;
        $this->adminlteProfile = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('adminlte_welcome', $value)) {
            $this->_usedProperties['adminlteWelcome'] = true;
            $this->adminlteWelcome = $value['adminlte_welcome'];
            unset($value['adminlte_welcome']);
        }

        if (array_key_exists('adminlte_login', $value)) {
            $this->_usedProperties['adminlteLogin'] = true;
            $this->adminlteLogin = $value['adminlte_login'];
            unset($value['adminlte_login']);
        }

        if (array_key_exists('adminlte_login_check', $value)) {
            $this->_usedProperties['adminlteLoginCheck'] = true;
            $this->adminlteLoginCheck = $value['adminlte_login_check'];
            unset($value['adminlte_login_check']);
        }

        if (array_key_exists('adminlte_registration', $value)) {
            $this->_usedProperties['adminlteRegistration'] = true;
            $this->adminlteRegistration = $value['adminlte_registration'];
            unset($value['adminlte_registration']);
        }

        if (array_key_exists('adminlte_password_reset', $value)) {
            $this->_usedProperties['adminltePasswordReset'] = true;
            $this->adminltePasswordReset = $value['adminlte_password_reset'];
            unset($value['adminlte_password_reset']);
        }

        if (array_key_exists('adminlte_message', $value)) {
            $this->_usedProperties['adminlteMessage'] = true;
            $this->adminlteMessage = $value['adminlte_message'];
            unset($value['adminlte_message']);
        }

        if (array_key_exists('adminlte_messages', $value)) {
            $this->_usedProperties['adminlteMessages'] = true;
            $this->adminlteMessages = $value['adminlte_messages'];
            unset($value['adminlte_messages']);
        }

        if (array_key_exists('adminlte_notification', $value)) {
            $this->_usedProperties['adminlteNotification'] = true;
            $this->adminlteNotification = $value['adminlte_notification'];
            unset($value['adminlte_notification']);
        }

        if (array_key_exists('adminlte_notifications', $value)) {
            $this->_usedProperties['adminlteNotifications'] = true;
            $this->adminlteNotifications = $value['adminlte_notifications'];
            unset($value['adminlte_notifications']);
        }

        if (array_key_exists('adminlte_task', $value)) {
            $this->_usedProperties['adminlteTask'] = true;
            $this->adminlteTask = $value['adminlte_task'];
            unset($value['adminlte_task']);
        }

        if (array_key_exists('adminlte_tasks', $value)) {
            $this->_usedProperties['adminlteTasks'] = true;
            $this->adminlteTasks = $value['adminlte_tasks'];
            unset($value['adminlte_tasks']);
        }

        if (array_key_exists('adminlte_profile', $value)) {
            $this->_usedProperties['adminlteProfile'] = true;
            $this->adminlteProfile = $value['adminlte_profile'];
            unset($value['adminlte_profile']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['adminlteWelcome'])) {
            $output['adminlte_welcome'] = $this->adminlteWelcome;
        }
        if (isset($this->_usedProperties['adminlteLogin'])) {
            $output['adminlte_login'] = $this->adminlteLogin;
        }
        if (isset($this->_usedProperties['adminlteLoginCheck'])) {
            $output['adminlte_login_check'] = $this->adminlteLoginCheck;
        }
        if (isset($this->_usedProperties['adminlteRegistration'])) {
            $output['adminlte_registration'] = $this->adminlteRegistration;
        }
        if (isset($this->_usedProperties['adminltePasswordReset'])) {
            $output['adminlte_password_reset'] = $this->adminltePasswordReset;
        }
        if (isset($this->_usedProperties['adminlteMessage'])) {
            $output['adminlte_message'] = $this->adminlteMessage;
        }
        if (isset($this->_usedProperties['adminlteMessages'])) {
            $output['adminlte_messages'] = $this->adminlteMessages;
        }
        if (isset($this->_usedProperties['adminlteNotification'])) {
            $output['adminlte_notification'] = $this->adminlteNotification;
        }
        if (isset($this->_usedProperties['adminlteNotifications'])) {
            $output['adminlte_notifications'] = $this->adminlteNotifications;
        }
        if (isset($this->_usedProperties['adminlteTask'])) {
            $output['adminlte_task'] = $this->adminlteTask;
        }
        if (isset($this->_usedProperties['adminlteTasks'])) {
            $output['adminlte_tasks'] = $this->adminlteTasks;
        }
        if (isset($this->_usedProperties['adminlteProfile'])) {
            $output['adminlte_profile'] = $this->adminlteProfile;
        }

        return $output;
    }

}
