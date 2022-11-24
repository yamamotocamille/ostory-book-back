<?php

namespace Container9PfEilI;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc2d4b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer00e99 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties79ed0 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;

        if ($this->valueHolderc2d4b === $returnValue = $this->valueHolderc2d4b->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        $instance->initializer00e99 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderc2d4b) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolderc2d4b = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, '__get', ['name' => $name], $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;

        if (isset(self::$publicProperties79ed0[$name])) {
            return $this->valueHolderc2d4b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc2d4b;

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

        $targetObject = $this->valueHolderc2d4b;
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
        $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc2d4b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc2d4b;
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
        $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, '__isset', array('name' => $name), $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc2d4b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc2d4b;
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
        $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, '__unset', array('name' => $name), $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc2d4b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc2d4b;
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
        $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, '__clone', array(), $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;

        $this->valueHolderc2d4b = clone $this->valueHolderc2d4b;
    }

    public function __sleep()
    {
        $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, '__sleep', array(), $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;

        return array('valueHolderc2d4b');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer00e99 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer00e99;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, 'initializeProxy', array(), $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc2d4b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc2d4b;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
