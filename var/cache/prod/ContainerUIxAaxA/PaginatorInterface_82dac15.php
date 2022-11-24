<?php

namespace ContainerUIxAaxA;

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    private $valueHolder95c62 = null;
    private $initializeracea8 = null;
    private static $publicPropertiesd4f2a = [
        
    ];
    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;
        if ($this->valueHolder95c62 === $returnValue = $this->valueHolder95c62->paginate($target, $page, $limit, $options)) {
            return $this;
        }
        return $returnValue;
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        $instance->initializeracea8 = $initializer;
        return $instance;
    }
    public function __construct()
    {
        static $reflection;
        if (! $this->valueHolder95c62) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder95c62 = $reflection->newInstanceWithoutConstructor();
        }
    }
    public function & __get($name)
    {
        $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, '__get', ['name' => $name], $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;
        if (isset(self::$publicPropertiesd4f2a[$name])) {
            return $this->valueHolder95c62->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder95c62;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder95c62;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, '__set', array('name' => $name, 'value' => $value), $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder95c62;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder95c62;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, '__isset', array('name' => $name), $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder95c62;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder95c62;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, '__unset', array('name' => $name), $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder95c62;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder95c62;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, '__clone', array(), $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;
        $this->valueHolder95c62 = clone $this->valueHolder95c62;
    }
    public function __sleep()
    {
        $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, '__sleep', array(), $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;
        return array('valueHolder95c62');
    }
    public function __wakeup()
    {
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializeracea8 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializeracea8;
    }
    public function initializeProxy() : bool
    {
        return $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, 'initializeProxy', array(), $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder95c62;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder95c62;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
