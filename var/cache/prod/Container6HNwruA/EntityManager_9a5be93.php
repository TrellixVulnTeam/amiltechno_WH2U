<?php

namespace Container6HNwruA;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder638ba = null;
    private $initializer38372 = null;
    private static $publicPropertiesf8e38 = [
        
    ];
    public function getConnection()
    {
        $this->initializer38372 && ($this->initializer38372->__invoke($valueHolder638ba, $this, 'getConnection', array(), $this->initializer38372) || 1) && $this->valueHolder638ba = $valueHolder638ba;
        return $this->valueHolder638ba->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer38372 && ($this->initializer38372->__invoke($valueHolder638ba, $this, 'getMetadataFactory', array(), $this->initializer38372) || 1) && $this->valueHolder638ba = $valueHolder638ba;
        return $this->valueHolder638ba->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer38372 && ($this->initializer38372->__invoke($valueHolder638ba, $this, 'getExpressionBuilder', array(), $this->initializer38372) || 1) && $this->valueHolder638ba = $valueHolder638ba;
        return $this->valueHolder638ba->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer38372 && ($this->initializer38372->__invoke($valueHolder638ba, $this, 'beginTransaction', array(), $this->initializer38372) || 1) && $this->valueHolder638ba = $valueHolder638ba;
        return $this->valueHolder638ba->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer38372 && ($this->initializer38372->__invoke($valueHolder638ba, $this, 'getCache', array(), $this->initializer38372) || 1) && $this->valueHolder638ba = $valueHolder638ba;
        return $this->valueHolder638ba->getCache();
    }
    public function transactional($func)
    {
        $this->initializer38372 && ($this->initializer38372->__invoke($valueHolder638ba, $this, 'transactional', array('func' => $func), $this->initializer38372) || 1) && $this->valueHolder638ba = $valueHolder638ba;
        return $this->valueHolder638ba->transactional($func);
    }
    public function commit()
    {
        $this->initializer38372 && ($this->initializer38372->__invoke($valueHolder638ba, $this, 'commit', array(), $this->initializer38372) || 1) && $this->valueHolder638ba = $valueHolder638ba;
        return $this->valueHolder638ba->commit();
    }
    public function rollback()
    {
        $this->initializer38372 && ($this->initializer38372->__invoke($valueHolder638ba, $this, 'rollback', array(), $this->initializer38372) || 1) && $this->valueHolder638ba = $valueHolder638ba;
        return $this->valueHolder638ba->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer38372 && ($this->initializer38372->__invoke($valueHolder638ba, $this, 'getClassMetadata', array('className' => $className), $this->initializer38372) || 1) && $this->valueHolder638ba = $valueHolder638ba;
        return $this->valueHolder638ba->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer38372 && ($this->initializer38372->__invoke($valueHolder638ba, $this, 'createQuery', array('dql' => $dql), $this->initializer38372) || 1) && $this->valueHolder638ba = $valueHolder638ba;
        return $this->valueHolder638ba->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer38372 && ($this->initializer38372->__invoke($valueHolder638ba, $this, 'createNamedQuery', array('name' => $name), $this->initializer38372) || 1) && $this->valueHolder638ba = $valueHolder638ba;
        return $this->valueHolder638ba->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer38372 && ($this->initializer38372->__invoke($valueHolder638ba, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer38372) || 1) && $this->valueHolder638ba = $valueHolder638ba;
        return $this->valueHolder638ba->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer38372 && ($this->initializer38372->__invoke($valueHolder638ba, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer38372) || 1) && $this->valueHolder638ba = $valueHolder638ba;
        return $this->valueHolder638ba->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer38372 && ($this->initializer38372->__invoke($valueHolder638ba, $this, 'createQueryBuilder', array(), $this->initializer38372) || 1) && $this->valueHolder638ba = $valueHolder638ba;
        return $this->valueHolder638ba->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer38372 && ($this->initializer38372->__invoke($valueHolder638ba, $this, 'flush', array('entity' => $entity), $this->initializer38372) || 1) && $this->valueHolder638ba = $valueHolder638ba;
        return $this->valueHolder638ba->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer38372 && ($this->initializer38372->__invoke($valueHolder638ba, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer38372) || 1) && $this->valueHolder638ba = $valueHolder638ba;
        return $this->valueHolder638ba->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer38372 && ($this->initializer38372->__invoke($valueHolder638ba, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer38372) || 1) && $this->valueHolder638ba = $valueHolder638ba;
        return $this->valueHolder638ba->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer38372 && ($this->initializer38372->__invoke($valueHolder638ba, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer38372) || 1) && $this->valueHolder638ba = $valueHolder638ba;
        return $this->valueHolder638ba->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer38372 && ($this->initializer38372->__invoke($valueHolder638ba, $this, 'clear', array('entityName' => $entityName), $this->initializer38372) || 1) && $this->valueHolder638ba = $valueHolder638ba;
        return $this->valueHolder638ba->clear($entityName);
    }
    public function close()
    {
        $this->initializer38372 && ($this->initializer38372->__invoke($valueHolder638ba, $this, 'close', array(), $this->initializer38372) || 1) && $this->valueHolder638ba = $valueHolder638ba;
        return $this->valueHolder638ba->close();
    }
    public function persist($entity)
    {
        $this->initializer38372 && ($this->initializer38372->__invoke($valueHolder638ba, $this, 'persist', array('entity' => $entity), $this->initializer38372) || 1) && $this->valueHolder638ba = $valueHolder638ba;
        return $this->valueHolder638ba->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer38372 && ($this->initializer38372->__invoke($valueHolder638ba, $this, 'remove', array('entity' => $entity), $this->initializer38372) || 1) && $this->valueHolder638ba = $valueHolder638ba;
        return $this->valueHolder638ba->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer38372 && ($this->initializer38372->__invoke($valueHolder638ba, $this, 'refresh', array('entity' => $entity), $this->initializer38372) || 1) && $this->valueHolder638ba = $valueHolder638ba;
        return $this->valueHolder638ba->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer38372 && ($this->initializer38372->__invoke($valueHolder638ba, $this, 'detach', array('entity' => $entity), $this->initializer38372) || 1) && $this->valueHolder638ba = $valueHolder638ba;
        return $this->valueHolder638ba->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer38372 && ($this->initializer38372->__invoke($valueHolder638ba, $this, 'merge', array('entity' => $entity), $this->initializer38372) || 1) && $this->valueHolder638ba = $valueHolder638ba;
        return $this->valueHolder638ba->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer38372 && ($this->initializer38372->__invoke($valueHolder638ba, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer38372) || 1) && $this->valueHolder638ba = $valueHolder638ba;
        return $this->valueHolder638ba->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer38372 && ($this->initializer38372->__invoke($valueHolder638ba, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer38372) || 1) && $this->valueHolder638ba = $valueHolder638ba;
        return $this->valueHolder638ba->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer38372 && ($this->initializer38372->__invoke($valueHolder638ba, $this, 'getRepository', array('entityName' => $entityName), $this->initializer38372) || 1) && $this->valueHolder638ba = $valueHolder638ba;
        return $this->valueHolder638ba->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer38372 && ($this->initializer38372->__invoke($valueHolder638ba, $this, 'contains', array('entity' => $entity), $this->initializer38372) || 1) && $this->valueHolder638ba = $valueHolder638ba;
        return $this->valueHolder638ba->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer38372 && ($this->initializer38372->__invoke($valueHolder638ba, $this, 'getEventManager', array(), $this->initializer38372) || 1) && $this->valueHolder638ba = $valueHolder638ba;
        return $this->valueHolder638ba->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer38372 && ($this->initializer38372->__invoke($valueHolder638ba, $this, 'getConfiguration', array(), $this->initializer38372) || 1) && $this->valueHolder638ba = $valueHolder638ba;
        return $this->valueHolder638ba->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer38372 && ($this->initializer38372->__invoke($valueHolder638ba, $this, 'isOpen', array(), $this->initializer38372) || 1) && $this->valueHolder638ba = $valueHolder638ba;
        return $this->valueHolder638ba->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer38372 && ($this->initializer38372->__invoke($valueHolder638ba, $this, 'getUnitOfWork', array(), $this->initializer38372) || 1) && $this->valueHolder638ba = $valueHolder638ba;
        return $this->valueHolder638ba->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer38372 && ($this->initializer38372->__invoke($valueHolder638ba, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer38372) || 1) && $this->valueHolder638ba = $valueHolder638ba;
        return $this->valueHolder638ba->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer38372 && ($this->initializer38372->__invoke($valueHolder638ba, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer38372) || 1) && $this->valueHolder638ba = $valueHolder638ba;
        return $this->valueHolder638ba->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer38372 && ($this->initializer38372->__invoke($valueHolder638ba, $this, 'getProxyFactory', array(), $this->initializer38372) || 1) && $this->valueHolder638ba = $valueHolder638ba;
        return $this->valueHolder638ba->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer38372 && ($this->initializer38372->__invoke($valueHolder638ba, $this, 'initializeObject', array('obj' => $obj), $this->initializer38372) || 1) && $this->valueHolder638ba = $valueHolder638ba;
        return $this->valueHolder638ba->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer38372 && ($this->initializer38372->__invoke($valueHolder638ba, $this, 'getFilters', array(), $this->initializer38372) || 1) && $this->valueHolder638ba = $valueHolder638ba;
        return $this->valueHolder638ba->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer38372 && ($this->initializer38372->__invoke($valueHolder638ba, $this, 'isFiltersStateClean', array(), $this->initializer38372) || 1) && $this->valueHolder638ba = $valueHolder638ba;
        return $this->valueHolder638ba->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer38372 && ($this->initializer38372->__invoke($valueHolder638ba, $this, 'hasFilters', array(), $this->initializer38372) || 1) && $this->valueHolder638ba = $valueHolder638ba;
        return $this->valueHolder638ba->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer38372 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder638ba) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder638ba = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder638ba->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer38372 && ($this->initializer38372->__invoke($valueHolder638ba, $this, '__get', ['name' => $name], $this->initializer38372) || 1) && $this->valueHolder638ba = $valueHolder638ba;
        if (isset(self::$publicPropertiesf8e38[$name])) {
            return $this->valueHolder638ba->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder638ba;
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
        $targetObject = $this->valueHolder638ba;
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
        $this->initializer38372 && ($this->initializer38372->__invoke($valueHolder638ba, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer38372) || 1) && $this->valueHolder638ba = $valueHolder638ba;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder638ba;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder638ba;
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
        $this->initializer38372 && ($this->initializer38372->__invoke($valueHolder638ba, $this, '__isset', array('name' => $name), $this->initializer38372) || 1) && $this->valueHolder638ba = $valueHolder638ba;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder638ba;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder638ba;
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
        $this->initializer38372 && ($this->initializer38372->__invoke($valueHolder638ba, $this, '__unset', array('name' => $name), $this->initializer38372) || 1) && $this->valueHolder638ba = $valueHolder638ba;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder638ba;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder638ba;
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
        $this->initializer38372 && ($this->initializer38372->__invoke($valueHolder638ba, $this, '__clone', array(), $this->initializer38372) || 1) && $this->valueHolder638ba = $valueHolder638ba;
        $this->valueHolder638ba = clone $this->valueHolder638ba;
    }
    public function __sleep()
    {
        $this->initializer38372 && ($this->initializer38372->__invoke($valueHolder638ba, $this, '__sleep', array(), $this->initializer38372) || 1) && $this->valueHolder638ba = $valueHolder638ba;
        return array('valueHolder638ba');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer38372 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer38372;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer38372 && ($this->initializer38372->__invoke($valueHolder638ba, $this, 'initializeProxy', array(), $this->initializer38372) || 1) && $this->valueHolder638ba = $valueHolder638ba;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder638ba;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder638ba;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
