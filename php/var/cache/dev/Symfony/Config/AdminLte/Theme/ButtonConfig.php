<?php

namespace Symfony\Config\AdminLte\Theme;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ButtonConfig 
{
    private $type;
    private $size;
    private $_usedProperties = [];

    /**
     * default button type
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
     * default button size
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function size($value): self
    {
        $this->_usedProperties['size'] = true;
        $this->size = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('type', $value)) {
            $this->_usedProperties['type'] = true;
            $this->type = $value['type'];
            unset($value['type']);
        }

        if (array_key_exists('size', $value)) {
            $this->_usedProperties['size'] = true;
            $this->size = $value['size'];
            unset($value['size']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['type'])) {
            $output['type'] = $this->type;
        }
        if (isset($this->_usedProperties['size'])) {
            $output['size'] = $this->size;
        }

        return $output;
    }

}
