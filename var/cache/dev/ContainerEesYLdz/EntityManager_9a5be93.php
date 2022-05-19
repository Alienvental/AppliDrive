<?php

namespace ContainerEesYLdz;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder31393 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf90e8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1beb8 = [
        
    ];

    public function getConnection()
    {
        $this->initializerf90e8 && ($this->initializerf90e8->__invoke($valueHolder31393, $this, 'getConnection', array(), $this->initializerf90e8) || 1) && $this->valueHolder31393 = $valueHolder31393;

        return $this->valueHolder31393->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf90e8 && ($this->initializerf90e8->__invoke($valueHolder31393, $this, 'getMetadataFactory', array(), $this->initializerf90e8) || 1) && $this->valueHolder31393 = $valueHolder31393;

        return $this->valueHolder31393->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf90e8 && ($this->initializerf90e8->__invoke($valueHolder31393, $this, 'getExpressionBuilder', array(), $this->initializerf90e8) || 1) && $this->valueHolder31393 = $valueHolder31393;

        return $this->valueHolder31393->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf90e8 && ($this->initializerf90e8->__invoke($valueHolder31393, $this, 'beginTransaction', array(), $this->initializerf90e8) || 1) && $this->valueHolder31393 = $valueHolder31393;

        return $this->valueHolder31393->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf90e8 && ($this->initializerf90e8->__invoke($valueHolder31393, $this, 'getCache', array(), $this->initializerf90e8) || 1) && $this->valueHolder31393 = $valueHolder31393;

        return $this->valueHolder31393->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf90e8 && ($this->initializerf90e8->__invoke($valueHolder31393, $this, 'transactional', array('func' => $func), $this->initializerf90e8) || 1) && $this->valueHolder31393 = $valueHolder31393;

        return $this->valueHolder31393->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf90e8 && ($this->initializerf90e8->__invoke($valueHolder31393, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf90e8) || 1) && $this->valueHolder31393 = $valueHolder31393;

        return $this->valueHolder31393->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf90e8 && ($this->initializerf90e8->__invoke($valueHolder31393, $this, 'commit', array(), $this->initializerf90e8) || 1) && $this->valueHolder31393 = $valueHolder31393;

        return $this->valueHolder31393->commit();
    }

    public function rollback()
    {
        $this->initializerf90e8 && ($this->initializerf90e8->__invoke($valueHolder31393, $this, 'rollback', array(), $this->initializerf90e8) || 1) && $this->valueHolder31393 = $valueHolder31393;

        return $this->valueHolder31393->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf90e8 && ($this->initializerf90e8->__invoke($valueHolder31393, $this, 'getClassMetadata', array('className' => $className), $this->initializerf90e8) || 1) && $this->valueHolder31393 = $valueHolder31393;

        return $this->valueHolder31393->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf90e8 && ($this->initializerf90e8->__invoke($valueHolder31393, $this, 'createQuery', array('dql' => $dql), $this->initializerf90e8) || 1) && $this->valueHolder31393 = $valueHolder31393;

        return $this->valueHolder31393->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf90e8 && ($this->initializerf90e8->__invoke($valueHolder31393, $this, 'createNamedQuery', array('name' => $name), $this->initializerf90e8) || 1) && $this->valueHolder31393 = $valueHolder31393;

        return $this->valueHolder31393->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf90e8 && ($this->initializerf90e8->__invoke($valueHolder31393, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf90e8) || 1) && $this->valueHolder31393 = $valueHolder31393;

        return $this->valueHolder31393->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf90e8 && ($this->initializerf90e8->__invoke($valueHolder31393, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf90e8) || 1) && $this->valueHolder31393 = $valueHolder31393;

        return $this->valueHolder31393->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf90e8 && ($this->initializerf90e8->__invoke($valueHolder31393, $this, 'createQueryBuilder', array(), $this->initializerf90e8) || 1) && $this->valueHolder31393 = $valueHolder31393;

        return $this->valueHolder31393->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf90e8 && ($this->initializerf90e8->__invoke($valueHolder31393, $this, 'flush', array('entity' => $entity), $this->initializerf90e8) || 1) && $this->valueHolder31393 = $valueHolder31393;

        return $this->valueHolder31393->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf90e8 && ($this->initializerf90e8->__invoke($valueHolder31393, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf90e8) || 1) && $this->valueHolder31393 = $valueHolder31393;

        return $this->valueHolder31393->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf90e8 && ($this->initializerf90e8->__invoke($valueHolder31393, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf90e8) || 1) && $this->valueHolder31393 = $valueHolder31393;

        return $this->valueHolder31393->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf90e8 && ($this->initializerf90e8->__invoke($valueHolder31393, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf90e8) || 1) && $this->valueHolder31393 = $valueHolder31393;

        return $this->valueHolder31393->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf90e8 && ($this->initializerf90e8->__invoke($valueHolder31393, $this, 'clear', array('entityName' => $entityName), $this->initializerf90e8) || 1) && $this->valueHolder31393 = $valueHolder31393;

        return $this->valueHolder31393->clear($entityName);
    }

    public function close()
    {
        $this->initializerf90e8 && ($this->initializerf90e8->__invoke($valueHolder31393, $this, 'close', array(), $this->initializerf90e8) || 1) && $this->valueHolder31393 = $valueHolder31393;

        return $this->valueHolder31393->close();
    }

    public function persist($entity)
    {
        $this->initializerf90e8 && ($this->initializerf90e8->__invoke($valueHolder31393, $this, 'persist', array('entity' => $entity), $this->initializerf90e8) || 1) && $this->valueHolder31393 = $valueHolder31393;

        return $this->valueHolder31393->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf90e8 && ($this->initializerf90e8->__invoke($valueHolder31393, $this, 'remove', array('entity' => $entity), $this->initializerf90e8) || 1) && $this->valueHolder31393 = $valueHolder31393;

        return $this->valueHolder31393->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf90e8 && ($this->initializerf90e8->__invoke($valueHolder31393, $this, 'refresh', array('entity' => $entity), $this->initializerf90e8) || 1) && $this->valueHolder31393 = $valueHolder31393;

        return $this->valueHolder31393->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf90e8 && ($this->initializerf90e8->__invoke($valueHolder31393, $this, 'detach', array('entity' => $entity), $this->initializerf90e8) || 1) && $this->valueHolder31393 = $valueHolder31393;

        return $this->valueHolder31393->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf90e8 && ($this->initializerf90e8->__invoke($valueHolder31393, $this, 'merge', array('entity' => $entity), $this->initializerf90e8) || 1) && $this->valueHolder31393 = $valueHolder31393;

        return $this->valueHolder31393->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf90e8 && ($this->initializerf90e8->__invoke($valueHolder31393, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf90e8) || 1) && $this->valueHolder31393 = $valueHolder31393;

        return $this->valueHolder31393->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf90e8 && ($this->initializerf90e8->__invoke($valueHolder31393, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf90e8) || 1) && $this->valueHolder31393 = $valueHolder31393;

        return $this->valueHolder31393->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf90e8 && ($this->initializerf90e8->__invoke($valueHolder31393, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf90e8) || 1) && $this->valueHolder31393 = $valueHolder31393;

        return $this->valueHolder31393->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf90e8 && ($this->initializerf90e8->__invoke($valueHolder31393, $this, 'contains', array('entity' => $entity), $this->initializerf90e8) || 1) && $this->valueHolder31393 = $valueHolder31393;

        return $this->valueHolder31393->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf90e8 && ($this->initializerf90e8->__invoke($valueHolder31393, $this, 'getEventManager', array(), $this->initializerf90e8) || 1) && $this->valueHolder31393 = $valueHolder31393;

        return $this->valueHolder31393->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf90e8 && ($this->initializerf90e8->__invoke($valueHolder31393, $this, 'getConfiguration', array(), $this->initializerf90e8) || 1) && $this->valueHolder31393 = $valueHolder31393;

        return $this->valueHolder31393->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf90e8 && ($this->initializerf90e8->__invoke($valueHolder31393, $this, 'isOpen', array(), $this->initializerf90e8) || 1) && $this->valueHolder31393 = $valueHolder31393;

        return $this->valueHolder31393->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf90e8 && ($this->initializerf90e8->__invoke($valueHolder31393, $this, 'getUnitOfWork', array(), $this->initializerf90e8) || 1) && $this->valueHolder31393 = $valueHolder31393;

        return $this->valueHolder31393->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf90e8 && ($this->initializerf90e8->__invoke($valueHolder31393, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf90e8) || 1) && $this->valueHolder31393 = $valueHolder31393;

        return $this->valueHolder31393->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf90e8 && ($this->initializerf90e8->__invoke($valueHolder31393, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf90e8) || 1) && $this->valueHolder31393 = $valueHolder31393;

        return $this->valueHolder31393->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf90e8 && ($this->initializerf90e8->__invoke($valueHolder31393, $this, 'getProxyFactory', array(), $this->initializerf90e8) || 1) && $this->valueHolder31393 = $valueHolder31393;

        return $this->valueHolder31393->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf90e8 && ($this->initializerf90e8->__invoke($valueHolder31393, $this, 'initializeObject', array('obj' => $obj), $this->initializerf90e8) || 1) && $this->valueHolder31393 = $valueHolder31393;

        return $this->valueHolder31393->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf90e8 && ($this->initializerf90e8->__invoke($valueHolder31393, $this, 'getFilters', array(), $this->initializerf90e8) || 1) && $this->valueHolder31393 = $valueHolder31393;

        return $this->valueHolder31393->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf90e8 && ($this->initializerf90e8->__invoke($valueHolder31393, $this, 'isFiltersStateClean', array(), $this->initializerf90e8) || 1) && $this->valueHolder31393 = $valueHolder31393;

        return $this->valueHolder31393->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf90e8 && ($this->initializerf90e8->__invoke($valueHolder31393, $this, 'hasFilters', array(), $this->initializerf90e8) || 1) && $this->valueHolder31393 = $valueHolder31393;

        return $this->valueHolder31393->hasFilters();
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

        $instance->initializerf90e8 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder31393) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder31393 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder31393->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf90e8 && ($this->initializerf90e8->__invoke($valueHolder31393, $this, '__get', ['name' => $name], $this->initializerf90e8) || 1) && $this->valueHolder31393 = $valueHolder31393;

        if (isset(self::$publicProperties1beb8[$name])) {
            return $this->valueHolder31393->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder31393;

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

        $targetObject = $this->valueHolder31393;
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
        $this->initializerf90e8 && ($this->initializerf90e8->__invoke($valueHolder31393, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf90e8) || 1) && $this->valueHolder31393 = $valueHolder31393;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder31393;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder31393;
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
        $this->initializerf90e8 && ($this->initializerf90e8->__invoke($valueHolder31393, $this, '__isset', array('name' => $name), $this->initializerf90e8) || 1) && $this->valueHolder31393 = $valueHolder31393;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder31393;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder31393;
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
        $this->initializerf90e8 && ($this->initializerf90e8->__invoke($valueHolder31393, $this, '__unset', array('name' => $name), $this->initializerf90e8) || 1) && $this->valueHolder31393 = $valueHolder31393;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder31393;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder31393;
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
        $this->initializerf90e8 && ($this->initializerf90e8->__invoke($valueHolder31393, $this, '__clone', array(), $this->initializerf90e8) || 1) && $this->valueHolder31393 = $valueHolder31393;

        $this->valueHolder31393 = clone $this->valueHolder31393;
    }

    public function __sleep()
    {
        $this->initializerf90e8 && ($this->initializerf90e8->__invoke($valueHolder31393, $this, '__sleep', array(), $this->initializerf90e8) || 1) && $this->valueHolder31393 = $valueHolder31393;

        return array('valueHolder31393');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf90e8 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf90e8;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf90e8 && ($this->initializerf90e8->__invoke($valueHolder31393, $this, 'initializeProxy', array(), $this->initializerf90e8) || 1) && $this->valueHolder31393 = $valueHolder31393;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder31393;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder31393;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
