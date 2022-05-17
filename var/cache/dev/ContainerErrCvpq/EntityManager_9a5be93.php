<?php

namespace ContainerErrCvpq;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderac63d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer9fd38 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties694ae = [
        
    ];

    public function getConnection()
    {
        $this->initializer9fd38 && ($this->initializer9fd38->__invoke($valueHolderac63d, $this, 'getConnection', array(), $this->initializer9fd38) || 1) && $this->valueHolderac63d = $valueHolderac63d;

        return $this->valueHolderac63d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer9fd38 && ($this->initializer9fd38->__invoke($valueHolderac63d, $this, 'getMetadataFactory', array(), $this->initializer9fd38) || 1) && $this->valueHolderac63d = $valueHolderac63d;

        return $this->valueHolderac63d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer9fd38 && ($this->initializer9fd38->__invoke($valueHolderac63d, $this, 'getExpressionBuilder', array(), $this->initializer9fd38) || 1) && $this->valueHolderac63d = $valueHolderac63d;

        return $this->valueHolderac63d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer9fd38 && ($this->initializer9fd38->__invoke($valueHolderac63d, $this, 'beginTransaction', array(), $this->initializer9fd38) || 1) && $this->valueHolderac63d = $valueHolderac63d;

        return $this->valueHolderac63d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer9fd38 && ($this->initializer9fd38->__invoke($valueHolderac63d, $this, 'getCache', array(), $this->initializer9fd38) || 1) && $this->valueHolderac63d = $valueHolderac63d;

        return $this->valueHolderac63d->getCache();
    }

    public function transactional($func)
    {
        $this->initializer9fd38 && ($this->initializer9fd38->__invoke($valueHolderac63d, $this, 'transactional', array('func' => $func), $this->initializer9fd38) || 1) && $this->valueHolderac63d = $valueHolderac63d;

        return $this->valueHolderac63d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer9fd38 && ($this->initializer9fd38->__invoke($valueHolderac63d, $this, 'wrapInTransaction', array('func' => $func), $this->initializer9fd38) || 1) && $this->valueHolderac63d = $valueHolderac63d;

        return $this->valueHolderac63d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer9fd38 && ($this->initializer9fd38->__invoke($valueHolderac63d, $this, 'commit', array(), $this->initializer9fd38) || 1) && $this->valueHolderac63d = $valueHolderac63d;

        return $this->valueHolderac63d->commit();
    }

    public function rollback()
    {
        $this->initializer9fd38 && ($this->initializer9fd38->__invoke($valueHolderac63d, $this, 'rollback', array(), $this->initializer9fd38) || 1) && $this->valueHolderac63d = $valueHolderac63d;

        return $this->valueHolderac63d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer9fd38 && ($this->initializer9fd38->__invoke($valueHolderac63d, $this, 'getClassMetadata', array('className' => $className), $this->initializer9fd38) || 1) && $this->valueHolderac63d = $valueHolderac63d;

        return $this->valueHolderac63d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer9fd38 && ($this->initializer9fd38->__invoke($valueHolderac63d, $this, 'createQuery', array('dql' => $dql), $this->initializer9fd38) || 1) && $this->valueHolderac63d = $valueHolderac63d;

        return $this->valueHolderac63d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer9fd38 && ($this->initializer9fd38->__invoke($valueHolderac63d, $this, 'createNamedQuery', array('name' => $name), $this->initializer9fd38) || 1) && $this->valueHolderac63d = $valueHolderac63d;

        return $this->valueHolderac63d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer9fd38 && ($this->initializer9fd38->__invoke($valueHolderac63d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer9fd38) || 1) && $this->valueHolderac63d = $valueHolderac63d;

        return $this->valueHolderac63d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer9fd38 && ($this->initializer9fd38->__invoke($valueHolderac63d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer9fd38) || 1) && $this->valueHolderac63d = $valueHolderac63d;

        return $this->valueHolderac63d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer9fd38 && ($this->initializer9fd38->__invoke($valueHolderac63d, $this, 'createQueryBuilder', array(), $this->initializer9fd38) || 1) && $this->valueHolderac63d = $valueHolderac63d;

        return $this->valueHolderac63d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer9fd38 && ($this->initializer9fd38->__invoke($valueHolderac63d, $this, 'flush', array('entity' => $entity), $this->initializer9fd38) || 1) && $this->valueHolderac63d = $valueHolderac63d;

        return $this->valueHolderac63d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9fd38 && ($this->initializer9fd38->__invoke($valueHolderac63d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9fd38) || 1) && $this->valueHolderac63d = $valueHolderac63d;

        return $this->valueHolderac63d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer9fd38 && ($this->initializer9fd38->__invoke($valueHolderac63d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer9fd38) || 1) && $this->valueHolderac63d = $valueHolderac63d;

        return $this->valueHolderac63d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer9fd38 && ($this->initializer9fd38->__invoke($valueHolderac63d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer9fd38) || 1) && $this->valueHolderac63d = $valueHolderac63d;

        return $this->valueHolderac63d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer9fd38 && ($this->initializer9fd38->__invoke($valueHolderac63d, $this, 'clear', array('entityName' => $entityName), $this->initializer9fd38) || 1) && $this->valueHolderac63d = $valueHolderac63d;

        return $this->valueHolderac63d->clear($entityName);
    }

    public function close()
    {
        $this->initializer9fd38 && ($this->initializer9fd38->__invoke($valueHolderac63d, $this, 'close', array(), $this->initializer9fd38) || 1) && $this->valueHolderac63d = $valueHolderac63d;

        return $this->valueHolderac63d->close();
    }

    public function persist($entity)
    {
        $this->initializer9fd38 && ($this->initializer9fd38->__invoke($valueHolderac63d, $this, 'persist', array('entity' => $entity), $this->initializer9fd38) || 1) && $this->valueHolderac63d = $valueHolderac63d;

        return $this->valueHolderac63d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer9fd38 && ($this->initializer9fd38->__invoke($valueHolderac63d, $this, 'remove', array('entity' => $entity), $this->initializer9fd38) || 1) && $this->valueHolderac63d = $valueHolderac63d;

        return $this->valueHolderac63d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer9fd38 && ($this->initializer9fd38->__invoke($valueHolderac63d, $this, 'refresh', array('entity' => $entity), $this->initializer9fd38) || 1) && $this->valueHolderac63d = $valueHolderac63d;

        return $this->valueHolderac63d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer9fd38 && ($this->initializer9fd38->__invoke($valueHolderac63d, $this, 'detach', array('entity' => $entity), $this->initializer9fd38) || 1) && $this->valueHolderac63d = $valueHolderac63d;

        return $this->valueHolderac63d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer9fd38 && ($this->initializer9fd38->__invoke($valueHolderac63d, $this, 'merge', array('entity' => $entity), $this->initializer9fd38) || 1) && $this->valueHolderac63d = $valueHolderac63d;

        return $this->valueHolderac63d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer9fd38 && ($this->initializer9fd38->__invoke($valueHolderac63d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer9fd38) || 1) && $this->valueHolderac63d = $valueHolderac63d;

        return $this->valueHolderac63d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer9fd38 && ($this->initializer9fd38->__invoke($valueHolderac63d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9fd38) || 1) && $this->valueHolderac63d = $valueHolderac63d;

        return $this->valueHolderac63d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer9fd38 && ($this->initializer9fd38->__invoke($valueHolderac63d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer9fd38) || 1) && $this->valueHolderac63d = $valueHolderac63d;

        return $this->valueHolderac63d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer9fd38 && ($this->initializer9fd38->__invoke($valueHolderac63d, $this, 'contains', array('entity' => $entity), $this->initializer9fd38) || 1) && $this->valueHolderac63d = $valueHolderac63d;

        return $this->valueHolderac63d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer9fd38 && ($this->initializer9fd38->__invoke($valueHolderac63d, $this, 'getEventManager', array(), $this->initializer9fd38) || 1) && $this->valueHolderac63d = $valueHolderac63d;

        return $this->valueHolderac63d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer9fd38 && ($this->initializer9fd38->__invoke($valueHolderac63d, $this, 'getConfiguration', array(), $this->initializer9fd38) || 1) && $this->valueHolderac63d = $valueHolderac63d;

        return $this->valueHolderac63d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer9fd38 && ($this->initializer9fd38->__invoke($valueHolderac63d, $this, 'isOpen', array(), $this->initializer9fd38) || 1) && $this->valueHolderac63d = $valueHolderac63d;

        return $this->valueHolderac63d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer9fd38 && ($this->initializer9fd38->__invoke($valueHolderac63d, $this, 'getUnitOfWork', array(), $this->initializer9fd38) || 1) && $this->valueHolderac63d = $valueHolderac63d;

        return $this->valueHolderac63d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer9fd38 && ($this->initializer9fd38->__invoke($valueHolderac63d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9fd38) || 1) && $this->valueHolderac63d = $valueHolderac63d;

        return $this->valueHolderac63d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer9fd38 && ($this->initializer9fd38->__invoke($valueHolderac63d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9fd38) || 1) && $this->valueHolderac63d = $valueHolderac63d;

        return $this->valueHolderac63d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer9fd38 && ($this->initializer9fd38->__invoke($valueHolderac63d, $this, 'getProxyFactory', array(), $this->initializer9fd38) || 1) && $this->valueHolderac63d = $valueHolderac63d;

        return $this->valueHolderac63d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer9fd38 && ($this->initializer9fd38->__invoke($valueHolderac63d, $this, 'initializeObject', array('obj' => $obj), $this->initializer9fd38) || 1) && $this->valueHolderac63d = $valueHolderac63d;

        return $this->valueHolderac63d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer9fd38 && ($this->initializer9fd38->__invoke($valueHolderac63d, $this, 'getFilters', array(), $this->initializer9fd38) || 1) && $this->valueHolderac63d = $valueHolderac63d;

        return $this->valueHolderac63d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer9fd38 && ($this->initializer9fd38->__invoke($valueHolderac63d, $this, 'isFiltersStateClean', array(), $this->initializer9fd38) || 1) && $this->valueHolderac63d = $valueHolderac63d;

        return $this->valueHolderac63d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer9fd38 && ($this->initializer9fd38->__invoke($valueHolderac63d, $this, 'hasFilters', array(), $this->initializer9fd38) || 1) && $this->valueHolderac63d = $valueHolderac63d;

        return $this->valueHolderac63d->hasFilters();
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

        $instance->initializer9fd38 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderac63d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderac63d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderac63d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer9fd38 && ($this->initializer9fd38->__invoke($valueHolderac63d, $this, '__get', ['name' => $name], $this->initializer9fd38) || 1) && $this->valueHolderac63d = $valueHolderac63d;

        if (isset(self::$publicProperties694ae[$name])) {
            return $this->valueHolderac63d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderac63d;

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

        $targetObject = $this->valueHolderac63d;
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
        $this->initializer9fd38 && ($this->initializer9fd38->__invoke($valueHolderac63d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9fd38) || 1) && $this->valueHolderac63d = $valueHolderac63d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderac63d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderac63d;
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
        $this->initializer9fd38 && ($this->initializer9fd38->__invoke($valueHolderac63d, $this, '__isset', array('name' => $name), $this->initializer9fd38) || 1) && $this->valueHolderac63d = $valueHolderac63d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderac63d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderac63d;
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
        $this->initializer9fd38 && ($this->initializer9fd38->__invoke($valueHolderac63d, $this, '__unset', array('name' => $name), $this->initializer9fd38) || 1) && $this->valueHolderac63d = $valueHolderac63d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderac63d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderac63d;
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
        $this->initializer9fd38 && ($this->initializer9fd38->__invoke($valueHolderac63d, $this, '__clone', array(), $this->initializer9fd38) || 1) && $this->valueHolderac63d = $valueHolderac63d;

        $this->valueHolderac63d = clone $this->valueHolderac63d;
    }

    public function __sleep()
    {
        $this->initializer9fd38 && ($this->initializer9fd38->__invoke($valueHolderac63d, $this, '__sleep', array(), $this->initializer9fd38) || 1) && $this->valueHolderac63d = $valueHolderac63d;

        return array('valueHolderac63d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer9fd38 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer9fd38;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer9fd38 && ($this->initializer9fd38->__invoke($valueHolderac63d, $this, 'initializeProxy', array(), $this->initializer9fd38) || 1) && $this->valueHolderac63d = $valueHolderac63d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderac63d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderac63d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
