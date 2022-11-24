<?php

namespace ContainerWnNRSnC;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder9febe = null;
    private $initializere6e56 = null;
    private static $publicPropertiesc3c98 = [
        
    ];
    public function getConnection()
    {
        $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, 'getConnection', array(), $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
        return $this->valueHolder9febe->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, 'getMetadataFactory', array(), $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
        return $this->valueHolder9febe->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, 'getExpressionBuilder', array(), $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
        return $this->valueHolder9febe->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, 'beginTransaction', array(), $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
        return $this->valueHolder9febe->beginTransaction();
    }
    public function getCache()
    {
        $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, 'getCache', array(), $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
        return $this->valueHolder9febe->getCache();
    }
    public function transactional($func)
    {
        $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, 'transactional', array('func' => $func), $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
        return $this->valueHolder9febe->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, 'wrapInTransaction', array('func' => $func), $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
        return $this->valueHolder9febe->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, 'commit', array(), $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
        return $this->valueHolder9febe->commit();
    }
    public function rollback()
    {
        $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, 'rollback', array(), $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
        return $this->valueHolder9febe->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, 'getClassMetadata', array('className' => $className), $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
        return $this->valueHolder9febe->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, 'createQuery', array('dql' => $dql), $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
        return $this->valueHolder9febe->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, 'createNamedQuery', array('name' => $name), $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
        return $this->valueHolder9febe->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
        return $this->valueHolder9febe->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
        return $this->valueHolder9febe->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, 'createQueryBuilder', array(), $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
        return $this->valueHolder9febe->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, 'flush', array('entity' => $entity), $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
        return $this->valueHolder9febe->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
        return $this->valueHolder9febe->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
        return $this->valueHolder9febe->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
        return $this->valueHolder9febe->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, 'clear', array('entityName' => $entityName), $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
        return $this->valueHolder9febe->clear($entityName);
    }
    public function close()
    {
        $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, 'close', array(), $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
        return $this->valueHolder9febe->close();
    }
    public function persist($entity)
    {
        $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, 'persist', array('entity' => $entity), $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
        return $this->valueHolder9febe->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, 'remove', array('entity' => $entity), $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
        return $this->valueHolder9febe->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, 'refresh', array('entity' => $entity), $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
        return $this->valueHolder9febe->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, 'detach', array('entity' => $entity), $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
        return $this->valueHolder9febe->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, 'merge', array('entity' => $entity), $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
        return $this->valueHolder9febe->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
        return $this->valueHolder9febe->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
        return $this->valueHolder9febe->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, 'getRepository', array('entityName' => $entityName), $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
        return $this->valueHolder9febe->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, 'contains', array('entity' => $entity), $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
        return $this->valueHolder9febe->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, 'getEventManager', array(), $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
        return $this->valueHolder9febe->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, 'getConfiguration', array(), $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
        return $this->valueHolder9febe->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, 'isOpen', array(), $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
        return $this->valueHolder9febe->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, 'getUnitOfWork', array(), $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
        return $this->valueHolder9febe->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
        return $this->valueHolder9febe->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
        return $this->valueHolder9febe->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, 'getProxyFactory', array(), $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
        return $this->valueHolder9febe->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, 'initializeObject', array('obj' => $obj), $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
        return $this->valueHolder9febe->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, 'getFilters', array(), $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
        return $this->valueHolder9febe->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, 'isFiltersStateClean', array(), $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
        return $this->valueHolder9febe->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, 'hasFilters', array(), $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
        return $this->valueHolder9febe->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializere6e56 = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;
        if (! $this->valueHolder9febe) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9febe = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder9febe->__construct($conn, $config);
    }
    public function & __get($name)
    {
        $this->initializere6e56 && ($this->initializere6e56->__invoke($valueHolder9febe, $this, '__get', ['name' => $name], $this->initializere6e56) || 1) && $this->valueHolder9febe = $valueHolder9febe;
        if (isset(self::$publicPropertiesc3c98[$name])) {
            return $this->valueHolder9febe->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
