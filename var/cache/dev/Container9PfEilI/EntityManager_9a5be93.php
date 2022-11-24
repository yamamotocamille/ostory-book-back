<?php

namespace Container9PfEilI;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, 'getConnection', array(), $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;

        return $this->valueHolderc2d4b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, 'getMetadataFactory', array(), $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;

        return $this->valueHolderc2d4b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, 'getExpressionBuilder', array(), $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;

        return $this->valueHolderc2d4b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, 'beginTransaction', array(), $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;

        return $this->valueHolderc2d4b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, 'getCache', array(), $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;

        return $this->valueHolderc2d4b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, 'transactional', array('func' => $func), $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;

        return $this->valueHolderc2d4b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, 'wrapInTransaction', array('func' => $func), $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;

        return $this->valueHolderc2d4b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, 'commit', array(), $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;

        return $this->valueHolderc2d4b->commit();
    }

    public function rollback()
    {
        $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, 'rollback', array(), $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;

        return $this->valueHolderc2d4b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, 'getClassMetadata', array('className' => $className), $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;

        return $this->valueHolderc2d4b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, 'createQuery', array('dql' => $dql), $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;

        return $this->valueHolderc2d4b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, 'createNamedQuery', array('name' => $name), $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;

        return $this->valueHolderc2d4b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;

        return $this->valueHolderc2d4b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;

        return $this->valueHolderc2d4b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, 'createQueryBuilder', array(), $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;

        return $this->valueHolderc2d4b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, 'flush', array('entity' => $entity), $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;

        return $this->valueHolderc2d4b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;

        return $this->valueHolderc2d4b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;

        return $this->valueHolderc2d4b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;

        return $this->valueHolderc2d4b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, 'clear', array('entityName' => $entityName), $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;

        return $this->valueHolderc2d4b->clear($entityName);
    }

    public function close()
    {
        $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, 'close', array(), $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;

        return $this->valueHolderc2d4b->close();
    }

    public function persist($entity)
    {
        $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, 'persist', array('entity' => $entity), $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;

        return $this->valueHolderc2d4b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, 'remove', array('entity' => $entity), $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;

        return $this->valueHolderc2d4b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, 'refresh', array('entity' => $entity), $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;

        return $this->valueHolderc2d4b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, 'detach', array('entity' => $entity), $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;

        return $this->valueHolderc2d4b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, 'merge', array('entity' => $entity), $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;

        return $this->valueHolderc2d4b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;

        return $this->valueHolderc2d4b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;

        return $this->valueHolderc2d4b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;

        return $this->valueHolderc2d4b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, 'contains', array('entity' => $entity), $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;

        return $this->valueHolderc2d4b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, 'getEventManager', array(), $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;

        return $this->valueHolderc2d4b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, 'getConfiguration', array(), $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;

        return $this->valueHolderc2d4b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, 'isOpen', array(), $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;

        return $this->valueHolderc2d4b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, 'getUnitOfWork', array(), $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;

        return $this->valueHolderc2d4b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;

        return $this->valueHolderc2d4b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;

        return $this->valueHolderc2d4b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, 'getProxyFactory', array(), $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;

        return $this->valueHolderc2d4b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, 'initializeObject', array('obj' => $obj), $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;

        return $this->valueHolderc2d4b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, 'getFilters', array(), $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;

        return $this->valueHolderc2d4b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, 'isFiltersStateClean', array(), $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;

        return $this->valueHolderc2d4b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, 'hasFilters', array(), $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;

        return $this->valueHolderc2d4b->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer00e99 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderc2d4b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc2d4b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc2d4b->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer00e99 && ($this->initializer00e99->__invoke($valueHolderc2d4b, $this, '__get', ['name' => $name], $this->initializer00e99) || 1) && $this->valueHolderc2d4b = $valueHolderc2d4b;

        if (isset(self::$publicProperties79ed0[$name])) {
            return $this->valueHolderc2d4b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
