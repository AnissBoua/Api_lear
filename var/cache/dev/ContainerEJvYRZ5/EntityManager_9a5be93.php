<?php

namespace ContainerEJvYRZ5;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder272db = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere8c6f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc63a9 = [
        
    ];

    public function getConnection()
    {
        $this->initializere8c6f && ($this->initializere8c6f->__invoke($valueHolder272db, $this, 'getConnection', array(), $this->initializere8c6f) || 1) && $this->valueHolder272db = $valueHolder272db;

        return $this->valueHolder272db->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere8c6f && ($this->initializere8c6f->__invoke($valueHolder272db, $this, 'getMetadataFactory', array(), $this->initializere8c6f) || 1) && $this->valueHolder272db = $valueHolder272db;

        return $this->valueHolder272db->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere8c6f && ($this->initializere8c6f->__invoke($valueHolder272db, $this, 'getExpressionBuilder', array(), $this->initializere8c6f) || 1) && $this->valueHolder272db = $valueHolder272db;

        return $this->valueHolder272db->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere8c6f && ($this->initializere8c6f->__invoke($valueHolder272db, $this, 'beginTransaction', array(), $this->initializere8c6f) || 1) && $this->valueHolder272db = $valueHolder272db;

        return $this->valueHolder272db->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere8c6f && ($this->initializere8c6f->__invoke($valueHolder272db, $this, 'getCache', array(), $this->initializere8c6f) || 1) && $this->valueHolder272db = $valueHolder272db;

        return $this->valueHolder272db->getCache();
    }

    public function transactional($func)
    {
        $this->initializere8c6f && ($this->initializere8c6f->__invoke($valueHolder272db, $this, 'transactional', array('func' => $func), $this->initializere8c6f) || 1) && $this->valueHolder272db = $valueHolder272db;

        return $this->valueHolder272db->transactional($func);
    }

    public function commit()
    {
        $this->initializere8c6f && ($this->initializere8c6f->__invoke($valueHolder272db, $this, 'commit', array(), $this->initializere8c6f) || 1) && $this->valueHolder272db = $valueHolder272db;

        return $this->valueHolder272db->commit();
    }

    public function rollback()
    {
        $this->initializere8c6f && ($this->initializere8c6f->__invoke($valueHolder272db, $this, 'rollback', array(), $this->initializere8c6f) || 1) && $this->valueHolder272db = $valueHolder272db;

        return $this->valueHolder272db->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere8c6f && ($this->initializere8c6f->__invoke($valueHolder272db, $this, 'getClassMetadata', array('className' => $className), $this->initializere8c6f) || 1) && $this->valueHolder272db = $valueHolder272db;

        return $this->valueHolder272db->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere8c6f && ($this->initializere8c6f->__invoke($valueHolder272db, $this, 'createQuery', array('dql' => $dql), $this->initializere8c6f) || 1) && $this->valueHolder272db = $valueHolder272db;

        return $this->valueHolder272db->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere8c6f && ($this->initializere8c6f->__invoke($valueHolder272db, $this, 'createNamedQuery', array('name' => $name), $this->initializere8c6f) || 1) && $this->valueHolder272db = $valueHolder272db;

        return $this->valueHolder272db->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere8c6f && ($this->initializere8c6f->__invoke($valueHolder272db, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere8c6f) || 1) && $this->valueHolder272db = $valueHolder272db;

        return $this->valueHolder272db->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere8c6f && ($this->initializere8c6f->__invoke($valueHolder272db, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere8c6f) || 1) && $this->valueHolder272db = $valueHolder272db;

        return $this->valueHolder272db->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere8c6f && ($this->initializere8c6f->__invoke($valueHolder272db, $this, 'createQueryBuilder', array(), $this->initializere8c6f) || 1) && $this->valueHolder272db = $valueHolder272db;

        return $this->valueHolder272db->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere8c6f && ($this->initializere8c6f->__invoke($valueHolder272db, $this, 'flush', array('entity' => $entity), $this->initializere8c6f) || 1) && $this->valueHolder272db = $valueHolder272db;

        return $this->valueHolder272db->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere8c6f && ($this->initializere8c6f->__invoke($valueHolder272db, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere8c6f) || 1) && $this->valueHolder272db = $valueHolder272db;

        return $this->valueHolder272db->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere8c6f && ($this->initializere8c6f->__invoke($valueHolder272db, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere8c6f) || 1) && $this->valueHolder272db = $valueHolder272db;

        return $this->valueHolder272db->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere8c6f && ($this->initializere8c6f->__invoke($valueHolder272db, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere8c6f) || 1) && $this->valueHolder272db = $valueHolder272db;

        return $this->valueHolder272db->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere8c6f && ($this->initializere8c6f->__invoke($valueHolder272db, $this, 'clear', array('entityName' => $entityName), $this->initializere8c6f) || 1) && $this->valueHolder272db = $valueHolder272db;

        return $this->valueHolder272db->clear($entityName);
    }

    public function close()
    {
        $this->initializere8c6f && ($this->initializere8c6f->__invoke($valueHolder272db, $this, 'close', array(), $this->initializere8c6f) || 1) && $this->valueHolder272db = $valueHolder272db;

        return $this->valueHolder272db->close();
    }

    public function persist($entity)
    {
        $this->initializere8c6f && ($this->initializere8c6f->__invoke($valueHolder272db, $this, 'persist', array('entity' => $entity), $this->initializere8c6f) || 1) && $this->valueHolder272db = $valueHolder272db;

        return $this->valueHolder272db->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere8c6f && ($this->initializere8c6f->__invoke($valueHolder272db, $this, 'remove', array('entity' => $entity), $this->initializere8c6f) || 1) && $this->valueHolder272db = $valueHolder272db;

        return $this->valueHolder272db->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere8c6f && ($this->initializere8c6f->__invoke($valueHolder272db, $this, 'refresh', array('entity' => $entity), $this->initializere8c6f) || 1) && $this->valueHolder272db = $valueHolder272db;

        return $this->valueHolder272db->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere8c6f && ($this->initializere8c6f->__invoke($valueHolder272db, $this, 'detach', array('entity' => $entity), $this->initializere8c6f) || 1) && $this->valueHolder272db = $valueHolder272db;

        return $this->valueHolder272db->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere8c6f && ($this->initializere8c6f->__invoke($valueHolder272db, $this, 'merge', array('entity' => $entity), $this->initializere8c6f) || 1) && $this->valueHolder272db = $valueHolder272db;

        return $this->valueHolder272db->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere8c6f && ($this->initializere8c6f->__invoke($valueHolder272db, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere8c6f) || 1) && $this->valueHolder272db = $valueHolder272db;

        return $this->valueHolder272db->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere8c6f && ($this->initializere8c6f->__invoke($valueHolder272db, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere8c6f) || 1) && $this->valueHolder272db = $valueHolder272db;

        return $this->valueHolder272db->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere8c6f && ($this->initializere8c6f->__invoke($valueHolder272db, $this, 'getRepository', array('entityName' => $entityName), $this->initializere8c6f) || 1) && $this->valueHolder272db = $valueHolder272db;

        return $this->valueHolder272db->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere8c6f && ($this->initializere8c6f->__invoke($valueHolder272db, $this, 'contains', array('entity' => $entity), $this->initializere8c6f) || 1) && $this->valueHolder272db = $valueHolder272db;

        return $this->valueHolder272db->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere8c6f && ($this->initializere8c6f->__invoke($valueHolder272db, $this, 'getEventManager', array(), $this->initializere8c6f) || 1) && $this->valueHolder272db = $valueHolder272db;

        return $this->valueHolder272db->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere8c6f && ($this->initializere8c6f->__invoke($valueHolder272db, $this, 'getConfiguration', array(), $this->initializere8c6f) || 1) && $this->valueHolder272db = $valueHolder272db;

        return $this->valueHolder272db->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere8c6f && ($this->initializere8c6f->__invoke($valueHolder272db, $this, 'isOpen', array(), $this->initializere8c6f) || 1) && $this->valueHolder272db = $valueHolder272db;

        return $this->valueHolder272db->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere8c6f && ($this->initializere8c6f->__invoke($valueHolder272db, $this, 'getUnitOfWork', array(), $this->initializere8c6f) || 1) && $this->valueHolder272db = $valueHolder272db;

        return $this->valueHolder272db->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere8c6f && ($this->initializere8c6f->__invoke($valueHolder272db, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere8c6f) || 1) && $this->valueHolder272db = $valueHolder272db;

        return $this->valueHolder272db->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere8c6f && ($this->initializere8c6f->__invoke($valueHolder272db, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere8c6f) || 1) && $this->valueHolder272db = $valueHolder272db;

        return $this->valueHolder272db->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere8c6f && ($this->initializere8c6f->__invoke($valueHolder272db, $this, 'getProxyFactory', array(), $this->initializere8c6f) || 1) && $this->valueHolder272db = $valueHolder272db;

        return $this->valueHolder272db->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere8c6f && ($this->initializere8c6f->__invoke($valueHolder272db, $this, 'initializeObject', array('obj' => $obj), $this->initializere8c6f) || 1) && $this->valueHolder272db = $valueHolder272db;

        return $this->valueHolder272db->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere8c6f && ($this->initializere8c6f->__invoke($valueHolder272db, $this, 'getFilters', array(), $this->initializere8c6f) || 1) && $this->valueHolder272db = $valueHolder272db;

        return $this->valueHolder272db->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere8c6f && ($this->initializere8c6f->__invoke($valueHolder272db, $this, 'isFiltersStateClean', array(), $this->initializere8c6f) || 1) && $this->valueHolder272db = $valueHolder272db;

        return $this->valueHolder272db->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere8c6f && ($this->initializere8c6f->__invoke($valueHolder272db, $this, 'hasFilters', array(), $this->initializere8c6f) || 1) && $this->valueHolder272db = $valueHolder272db;

        return $this->valueHolder272db->hasFilters();
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

        $instance->initializere8c6f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder272db) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder272db = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder272db->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere8c6f && ($this->initializere8c6f->__invoke($valueHolder272db, $this, '__get', ['name' => $name], $this->initializere8c6f) || 1) && $this->valueHolder272db = $valueHolder272db;

        if (isset(self::$publicPropertiesc63a9[$name])) {
            return $this->valueHolder272db->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder272db;

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

        $targetObject = $this->valueHolder272db;
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
        $this->initializere8c6f && ($this->initializere8c6f->__invoke($valueHolder272db, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere8c6f) || 1) && $this->valueHolder272db = $valueHolder272db;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder272db;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder272db;
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
        $this->initializere8c6f && ($this->initializere8c6f->__invoke($valueHolder272db, $this, '__isset', array('name' => $name), $this->initializere8c6f) || 1) && $this->valueHolder272db = $valueHolder272db;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder272db;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder272db;
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
        $this->initializere8c6f && ($this->initializere8c6f->__invoke($valueHolder272db, $this, '__unset', array('name' => $name), $this->initializere8c6f) || 1) && $this->valueHolder272db = $valueHolder272db;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder272db;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder272db;
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
        $this->initializere8c6f && ($this->initializere8c6f->__invoke($valueHolder272db, $this, '__clone', array(), $this->initializere8c6f) || 1) && $this->valueHolder272db = $valueHolder272db;

        $this->valueHolder272db = clone $this->valueHolder272db;
    }

    public function __sleep()
    {
        $this->initializere8c6f && ($this->initializere8c6f->__invoke($valueHolder272db, $this, '__sleep', array(), $this->initializere8c6f) || 1) && $this->valueHolder272db = $valueHolder272db;

        return array('valueHolder272db');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere8c6f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere8c6f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere8c6f && ($this->initializere8c6f->__invoke($valueHolder272db, $this, 'initializeProxy', array(), $this->initializere8c6f) || 1) && $this->valueHolder272db = $valueHolder272db;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder272db;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder272db;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
