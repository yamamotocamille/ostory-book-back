<?php

namespace ContainerWnNRSnC;

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    private $valueHolder9febe = null;
    private $initializere6e56 = null;
    private static $publicPropertiesc3c98 = [
        
    ];
    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
        if ($this->valueHolder9febe === $returnValue = $this->valueHolder9febe->paginate($target, $page, $limit, $options)) {
            return $this;
        }
        return $returnValue;
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        $instance->initializere6e56 = $initializer;
        return $instance;
    }
    public function __construct()
    {
        static $reflection;
        if (! $this->valueHolder9febe) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder9febe = $reflection->newInstanceWithoutConstructor();
        }
    }
    public function & __get($name)
    {
        $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, '__get', ['name' => $name], $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
        if (isset(self::$publicPropertiesc3c98[$name])) {
            return $this->valueHolder9febe->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9febe;
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
        $targetObject = $this->valueHolder9febe;
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
        $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9febe;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder9febe;
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
        $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, '__isset', array('name' => $name), $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9febe;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder9febe;
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
        $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, '__unset', array('name' => $name), $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9febe;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder9febe;
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
        $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, '__clone', array(), $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
        $this->valueHolder9febe = clone $this->valueHolder9febe;
    }
    public function __sleep()
    {
        $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, '__sleep', array(), $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
        return array('valueHolder9febe');
    }
    public function __wakeup()
    {
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere6e56 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere6e56;
    }
    public function initializeProxy() : bool
    {
        return $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, 'initializeProxy', array(), $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9febe;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9febe;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
