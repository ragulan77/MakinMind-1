<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class MakinMindProjectBundleEntityApplyTermsProxy extends \MakinMind\ProjectBundle\Entity\ApplyTerms implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }
    
    
    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function setPbStudies($pbStudies)
    {
        $this->__load();
        return parent::setPbStudies($pbStudies);
    }

    public function getPbStudies()
    {
        $this->__load();
        return parent::getPbStudies();
    }

    public function setFirstDiploma($firstDiploma)
    {
        $this->__load();
        return parent::setFirstDiploma($firstDiploma);
    }

    public function getFirstDiploma()
    {
        $this->__load();
        return parent::getFirstDiploma();
    }

    public function setSecondDiploma($secondDiploma)
    {
        $this->__load();
        return parent::setSecondDiploma($secondDiploma);
    }

    public function getSecondDiploma()
    {
        $this->__load();
        return parent::getSecondDiploma();
    }

    public function setSpecialization($specialization)
    {
        $this->__load();
        return parent::setSpecialization($specialization);
    }

    public function getSpecialization()
    {
        $this->__load();
        return parent::getSpecialization();
    }

    public function setNumberWorkedYears($numberWorkedYears)
    {
        $this->__load();
        return parent::setNumberWorkedYears($numberWorkedYears);
    }

    public function getNumberWorkedYears()
    {
        $this->__load();
        return parent::getNumberWorkedYears();
    }

    public function setHoursPerWeek($hoursPerWeek)
    {
        $this->__load();
        return parent::setHoursPerWeek($hoursPerWeek);
    }

    public function getHoursPerWeek()
    {
        $this->__load();
        return parent::getHoursPerWeek();
    }

    public function setParalleleContract($paralleleContract)
    {
        $this->__load();
        return parent::setParalleleContract($paralleleContract);
    }

    public function getParalleleContract()
    {
        $this->__load();
        return parent::getParalleleContract();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'pbStudies', 'firstDiploma', 'secondDiploma', 'specialization', 'numberWorkedYears', 'hoursPerWeek', 'paralleleContract');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}