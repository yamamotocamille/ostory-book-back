<?php

namespace ContainerRfHNRbz;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder95c62 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializeracea8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd4f2a = [
        
    ];

    public function getConnection()
    {
        $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, 'getConnection', array(), $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;

        return $this->valueHolder95c62->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, 'getMetadataFactory', array(), $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;

        return $this->valueHolder95c62->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, 'getExpressionBuilder', array(), $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;

        return $this->valueHolder95c62->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, 'beginTransaction', array(), $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;

        return $this->valueHolder95c62->beginTransaction();
    }

    public function getCache()
    {
        $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, 'getCache', array(), $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;

        return $this->valueHolder95c62->getCache();
    }

    public function transactional($func)
    {
        $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, 'transactional', array('func' => $func), $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;

        return $this->valueHolder95c62->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, 'wrapInTransaction', array('func' => $func), $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;

        return $this->valueHolder95c62->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, 'commit', array(), $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;

        return $this->valueHolder95c62->commit();
    }

    public function rollback()
    {
        $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, 'rollback', array(), $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;

        return $this->valueHolder95c62->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, 'getClassMetadata', array('className' => $className), $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;

        return $this->valueHolder95c62->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, 'createQuery', array('dql' => $dql), $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;

        return $this->valueHolder95c62->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, 'createNamedQuery', array('name' => $name), $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;

        return $this->valueHolder95c62->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;

        return $this->valueHolder95c62->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;

        return $this->valueHolder95c62->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, 'createQueryBuilder', array(), $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;

        return $this->valueHolder95c62->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, 'flush', array('entity' => $entity), $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;

        return $this->valueHolder95c62->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;

        return $this->valueHolder95c62->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;

        return $this->valueHolder95c62->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;

        return $this->valueHolder95c62->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, 'clear', array('entityName' => $entityName), $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;

        return $this->valueHolder95c62->clear($entityName);
    }

    public function close()
    {
        $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, 'close', array(), $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;

        return $this->valueHolder95c62->close();
    }

    public function persist($entity)
    {
        $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, 'persist', array('entity' => $entity), $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;

        return $this->valueHolder95c62->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, 'remove', array('entity' => $entity), $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;

        return $this->valueHolder95c62->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, 'refresh', array('entity' => $entity), $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;

        return $this->valueHolder95c62->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, 'detach', array('entity' => $entity), $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;

        return $this->valueHolder95c62->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, 'merge', array('entity' => $entity), $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;

        return $this->valueHolder95c62->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;

        return $this->valueHolder95c62->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;

        return $this->valueHolder95c62->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, 'getRepository', array('entityName' => $entityName), $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;

        return $this->valueHolder95c62->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, 'contains', array('entity' => $entity), $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;

        return $this->valueHolder95c62->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, 'getEventManager', array(), $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;

        return $this->valueHolder95c62->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, 'getConfiguration', array(), $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;

        return $this->valueHolder95c62->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, 'isOpen', array(), $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;

        return $this->valueHolder95c62->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, 'getUnitOfWork', array(), $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;

        return $this->valueHolder95c62->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;

        return $this->valueHolder95c62->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;

        return $this->valueHolder95c62->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, 'getProxyFactory', array(), $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;

        return $this->valueHolder95c62->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, 'initializeObject', array('obj' => $obj), $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;

        return $this->valueHolder95c62->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, 'getFilters', array(), $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;

        return $this->valueHolder95c62->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, 'isFiltersStateClean', array(), $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;

        return $this->valueHolder95c62->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, 'hasFilters', array(), $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;

        return $this->valueHolder95c62->hasFilters();
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

        $instance->initializeracea8 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder95c62) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder95c62 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder95c62->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializeracea8 && ($this->initializeracea8->__invoke($valueHolder95c62, $this, '__get', ['name' => $name], $this->initializeracea8) || 1) && $this->valueHolder95c62 = $valueHolder95c62;

        if (isset(self::$publicPropertiesd4f2a[$name])) {
            return $this->valueHolder95c62->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
