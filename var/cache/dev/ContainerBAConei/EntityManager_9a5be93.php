<?php

namespace ContainerBAConei;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderdd97b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8554d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8e568 = [
        
    ];

    public function getConnection()
    {
        $this->initializer8554d && ($this->initializer8554d->__invoke($valueHolderdd97b, $this, 'getConnection', array(), $this->initializer8554d) || 1) && $this->valueHolderdd97b = $valueHolderdd97b;

        return $this->valueHolderdd97b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8554d && ($this->initializer8554d->__invoke($valueHolderdd97b, $this, 'getMetadataFactory', array(), $this->initializer8554d) || 1) && $this->valueHolderdd97b = $valueHolderdd97b;

        return $this->valueHolderdd97b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8554d && ($this->initializer8554d->__invoke($valueHolderdd97b, $this, 'getExpressionBuilder', array(), $this->initializer8554d) || 1) && $this->valueHolderdd97b = $valueHolderdd97b;

        return $this->valueHolderdd97b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8554d && ($this->initializer8554d->__invoke($valueHolderdd97b, $this, 'beginTransaction', array(), $this->initializer8554d) || 1) && $this->valueHolderdd97b = $valueHolderdd97b;

        return $this->valueHolderdd97b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8554d && ($this->initializer8554d->__invoke($valueHolderdd97b, $this, 'getCache', array(), $this->initializer8554d) || 1) && $this->valueHolderdd97b = $valueHolderdd97b;

        return $this->valueHolderdd97b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8554d && ($this->initializer8554d->__invoke($valueHolderdd97b, $this, 'transactional', array('func' => $func), $this->initializer8554d) || 1) && $this->valueHolderdd97b = $valueHolderdd97b;

        return $this->valueHolderdd97b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer8554d && ($this->initializer8554d->__invoke($valueHolderdd97b, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8554d) || 1) && $this->valueHolderdd97b = $valueHolderdd97b;

        return $this->valueHolderdd97b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer8554d && ($this->initializer8554d->__invoke($valueHolderdd97b, $this, 'commit', array(), $this->initializer8554d) || 1) && $this->valueHolderdd97b = $valueHolderdd97b;

        return $this->valueHolderdd97b->commit();
    }

    public function rollback()
    {
        $this->initializer8554d && ($this->initializer8554d->__invoke($valueHolderdd97b, $this, 'rollback', array(), $this->initializer8554d) || 1) && $this->valueHolderdd97b = $valueHolderdd97b;

        return $this->valueHolderdd97b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8554d && ($this->initializer8554d->__invoke($valueHolderdd97b, $this, 'getClassMetadata', array('className' => $className), $this->initializer8554d) || 1) && $this->valueHolderdd97b = $valueHolderdd97b;

        return $this->valueHolderdd97b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8554d && ($this->initializer8554d->__invoke($valueHolderdd97b, $this, 'createQuery', array('dql' => $dql), $this->initializer8554d) || 1) && $this->valueHolderdd97b = $valueHolderdd97b;

        return $this->valueHolderdd97b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8554d && ($this->initializer8554d->__invoke($valueHolderdd97b, $this, 'createNamedQuery', array('name' => $name), $this->initializer8554d) || 1) && $this->valueHolderdd97b = $valueHolderdd97b;

        return $this->valueHolderdd97b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8554d && ($this->initializer8554d->__invoke($valueHolderdd97b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8554d) || 1) && $this->valueHolderdd97b = $valueHolderdd97b;

        return $this->valueHolderdd97b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8554d && ($this->initializer8554d->__invoke($valueHolderdd97b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8554d) || 1) && $this->valueHolderdd97b = $valueHolderdd97b;

        return $this->valueHolderdd97b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8554d && ($this->initializer8554d->__invoke($valueHolderdd97b, $this, 'createQueryBuilder', array(), $this->initializer8554d) || 1) && $this->valueHolderdd97b = $valueHolderdd97b;

        return $this->valueHolderdd97b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8554d && ($this->initializer8554d->__invoke($valueHolderdd97b, $this, 'flush', array('entity' => $entity), $this->initializer8554d) || 1) && $this->valueHolderdd97b = $valueHolderdd97b;

        return $this->valueHolderdd97b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8554d && ($this->initializer8554d->__invoke($valueHolderdd97b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8554d) || 1) && $this->valueHolderdd97b = $valueHolderdd97b;

        return $this->valueHolderdd97b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8554d && ($this->initializer8554d->__invoke($valueHolderdd97b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8554d) || 1) && $this->valueHolderdd97b = $valueHolderdd97b;

        return $this->valueHolderdd97b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8554d && ($this->initializer8554d->__invoke($valueHolderdd97b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8554d) || 1) && $this->valueHolderdd97b = $valueHolderdd97b;

        return $this->valueHolderdd97b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8554d && ($this->initializer8554d->__invoke($valueHolderdd97b, $this, 'clear', array('entityName' => $entityName), $this->initializer8554d) || 1) && $this->valueHolderdd97b = $valueHolderdd97b;

        return $this->valueHolderdd97b->clear($entityName);
    }

    public function close()
    {
        $this->initializer8554d && ($this->initializer8554d->__invoke($valueHolderdd97b, $this, 'close', array(), $this->initializer8554d) || 1) && $this->valueHolderdd97b = $valueHolderdd97b;

        return $this->valueHolderdd97b->close();
    }

    public function persist($entity)
    {
        $this->initializer8554d && ($this->initializer8554d->__invoke($valueHolderdd97b, $this, 'persist', array('entity' => $entity), $this->initializer8554d) || 1) && $this->valueHolderdd97b = $valueHolderdd97b;

        return $this->valueHolderdd97b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8554d && ($this->initializer8554d->__invoke($valueHolderdd97b, $this, 'remove', array('entity' => $entity), $this->initializer8554d) || 1) && $this->valueHolderdd97b = $valueHolderdd97b;

        return $this->valueHolderdd97b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8554d && ($this->initializer8554d->__invoke($valueHolderdd97b, $this, 'refresh', array('entity' => $entity), $this->initializer8554d) || 1) && $this->valueHolderdd97b = $valueHolderdd97b;

        return $this->valueHolderdd97b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8554d && ($this->initializer8554d->__invoke($valueHolderdd97b, $this, 'detach', array('entity' => $entity), $this->initializer8554d) || 1) && $this->valueHolderdd97b = $valueHolderdd97b;

        return $this->valueHolderdd97b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8554d && ($this->initializer8554d->__invoke($valueHolderdd97b, $this, 'merge', array('entity' => $entity), $this->initializer8554d) || 1) && $this->valueHolderdd97b = $valueHolderdd97b;

        return $this->valueHolderdd97b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8554d && ($this->initializer8554d->__invoke($valueHolderdd97b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8554d) || 1) && $this->valueHolderdd97b = $valueHolderdd97b;

        return $this->valueHolderdd97b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8554d && ($this->initializer8554d->__invoke($valueHolderdd97b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8554d) || 1) && $this->valueHolderdd97b = $valueHolderdd97b;

        return $this->valueHolderdd97b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8554d && ($this->initializer8554d->__invoke($valueHolderdd97b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8554d) || 1) && $this->valueHolderdd97b = $valueHolderdd97b;

        return $this->valueHolderdd97b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8554d && ($this->initializer8554d->__invoke($valueHolderdd97b, $this, 'contains', array('entity' => $entity), $this->initializer8554d) || 1) && $this->valueHolderdd97b = $valueHolderdd97b;

        return $this->valueHolderdd97b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8554d && ($this->initializer8554d->__invoke($valueHolderdd97b, $this, 'getEventManager', array(), $this->initializer8554d) || 1) && $this->valueHolderdd97b = $valueHolderdd97b;

        return $this->valueHolderdd97b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8554d && ($this->initializer8554d->__invoke($valueHolderdd97b, $this, 'getConfiguration', array(), $this->initializer8554d) || 1) && $this->valueHolderdd97b = $valueHolderdd97b;

        return $this->valueHolderdd97b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8554d && ($this->initializer8554d->__invoke($valueHolderdd97b, $this, 'isOpen', array(), $this->initializer8554d) || 1) && $this->valueHolderdd97b = $valueHolderdd97b;

        return $this->valueHolderdd97b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8554d && ($this->initializer8554d->__invoke($valueHolderdd97b, $this, 'getUnitOfWork', array(), $this->initializer8554d) || 1) && $this->valueHolderdd97b = $valueHolderdd97b;

        return $this->valueHolderdd97b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8554d && ($this->initializer8554d->__invoke($valueHolderdd97b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8554d) || 1) && $this->valueHolderdd97b = $valueHolderdd97b;

        return $this->valueHolderdd97b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8554d && ($this->initializer8554d->__invoke($valueHolderdd97b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8554d) || 1) && $this->valueHolderdd97b = $valueHolderdd97b;

        return $this->valueHolderdd97b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8554d && ($this->initializer8554d->__invoke($valueHolderdd97b, $this, 'getProxyFactory', array(), $this->initializer8554d) || 1) && $this->valueHolderdd97b = $valueHolderdd97b;

        return $this->valueHolderdd97b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8554d && ($this->initializer8554d->__invoke($valueHolderdd97b, $this, 'initializeObject', array('obj' => $obj), $this->initializer8554d) || 1) && $this->valueHolderdd97b = $valueHolderdd97b;

        return $this->valueHolderdd97b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8554d && ($this->initializer8554d->__invoke($valueHolderdd97b, $this, 'getFilters', array(), $this->initializer8554d) || 1) && $this->valueHolderdd97b = $valueHolderdd97b;

        return $this->valueHolderdd97b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8554d && ($this->initializer8554d->__invoke($valueHolderdd97b, $this, 'isFiltersStateClean', array(), $this->initializer8554d) || 1) && $this->valueHolderdd97b = $valueHolderdd97b;

        return $this->valueHolderdd97b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8554d && ($this->initializer8554d->__invoke($valueHolderdd97b, $this, 'hasFilters', array(), $this->initializer8554d) || 1) && $this->valueHolderdd97b = $valueHolderdd97b;

        return $this->valueHolderdd97b->hasFilters();
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

        $instance->initializer8554d = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderdd97b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderdd97b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderdd97b->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer8554d && ($this->initializer8554d->__invoke($valueHolderdd97b, $this, '__get', ['name' => $name], $this->initializer8554d) || 1) && $this->valueHolderdd97b = $valueHolderdd97b;

        if (isset(self::$publicProperties8e568[$name])) {
            return $this->valueHolderdd97b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd97b;

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

        $targetObject = $this->valueHolderdd97b;
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
        $this->initializer8554d && ($this->initializer8554d->__invoke($valueHolderdd97b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8554d) || 1) && $this->valueHolderdd97b = $valueHolderdd97b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd97b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderdd97b;
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
        $this->initializer8554d && ($this->initializer8554d->__invoke($valueHolderdd97b, $this, '__isset', array('name' => $name), $this->initializer8554d) || 1) && $this->valueHolderdd97b = $valueHolderdd97b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd97b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderdd97b;
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
        $this->initializer8554d && ($this->initializer8554d->__invoke($valueHolderdd97b, $this, '__unset', array('name' => $name), $this->initializer8554d) || 1) && $this->valueHolderdd97b = $valueHolderdd97b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd97b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderdd97b;
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
        $this->initializer8554d && ($this->initializer8554d->__invoke($valueHolderdd97b, $this, '__clone', array(), $this->initializer8554d) || 1) && $this->valueHolderdd97b = $valueHolderdd97b;

        $this->valueHolderdd97b = clone $this->valueHolderdd97b;
    }

    public function __sleep()
    {
        $this->initializer8554d && ($this->initializer8554d->__invoke($valueHolderdd97b, $this, '__sleep', array(), $this->initializer8554d) || 1) && $this->valueHolderdd97b = $valueHolderdd97b;

        return array('valueHolderdd97b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8554d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8554d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8554d && ($this->initializer8554d->__invoke($valueHolderdd97b, $this, 'initializeProxy', array(), $this->initializer8554d) || 1) && $this->valueHolderdd97b = $valueHolderdd97b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdd97b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdd97b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
