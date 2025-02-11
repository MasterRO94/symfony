<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'ArrayExtraKeys'.\DIRECTORY_SEPARATOR.'FooConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ArrayExtraKeys'.\DIRECTORY_SEPARATOR.'BarConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ArrayExtraKeys'.\DIRECTORY_SEPARATOR.'BazConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class ArrayExtraKeysConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $foo;
    private $bar;
    private $baz;
    
    public function foo(array $value = []): \Symfony\Config\ArrayExtraKeys\FooConfig
    {
        if (null === $this->foo) {
            $this->foo = new \Symfony\Config\ArrayExtraKeys\FooConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "foo()" has already been initialized. You cannot pass values the second time you call foo().');
        }
    
        return $this->foo;
    }
    
    public function bar(array $value = []): \Symfony\Config\ArrayExtraKeys\BarConfig
    {
        return $this->bar[] = new \Symfony\Config\ArrayExtraKeys\BarConfig($value);
    }
    
    public function baz(array $value = []): \Symfony\Config\ArrayExtraKeys\BazConfig
    {
        if (null === $this->baz) {
            $this->baz = new \Symfony\Config\ArrayExtraKeys\BazConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "baz()" has already been initialized. You cannot pass values the second time you call baz().');
        }
    
        return $this->baz;
    }
    
    public function getExtensionAlias(): string
    {
        return 'array_extra_keys';
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['foo'])) {
            $this->foo = new \Symfony\Config\ArrayExtraKeys\FooConfig($value['foo']);
            unset($value['foo']);
        }
    
        if (isset($value['bar'])) {
            $this->bar = array_map(function ($v) { return new \Symfony\Config\ArrayExtraKeys\BarConfig($v); }, $value['bar']);
            unset($value['bar']);
        }
    
        if (isset($value['baz'])) {
            $this->baz = new \Symfony\Config\ArrayExtraKeys\BazConfig($value['baz']);
            unset($value['baz']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->foo) {
            $output['foo'] = $this->foo->toArray();
        }
        if (null !== $this->bar) {
            $output['bar'] = array_map(function ($v) { return $v->toArray(); }, $this->bar);
        }
        if (null !== $this->baz) {
            $output['baz'] = $this->baz->toArray();
        }
    
        return $output;
    }

}
