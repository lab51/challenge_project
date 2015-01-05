<?php

namespace Proxies\__CG__\Lab51\ChallengeBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Challenge extends \Lab51\ChallengeBundle\Entity\Challenge implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', 'user', 'results', '' . "\0" . 'Lab51\\ChallengeBundle\\Entity\\Challenge' . "\0" . 'id', '' . "\0" . 'Lab51\\ChallengeBundle\\Entity\\Challenge' . "\0" . 'challengeName', '' . "\0" . 'Lab51\\ChallengeBundle\\Entity\\Challenge' . "\0" . 'challengeDescription');
        }

        return array('__isInitialized__', 'user', 'results', '' . "\0" . 'Lab51\\ChallengeBundle\\Entity\\Challenge' . "\0" . 'id', '' . "\0" . 'Lab51\\ChallengeBundle\\Entity\\Challenge' . "\0" . 'challengeName', '' . "\0" . 'Lab51\\ChallengeBundle\\Entity\\Challenge' . "\0" . 'challengeDescription');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Challenge $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setChallengeName($challengeName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChallengeName', array($challengeName));

        return parent::setChallengeName($challengeName);
    }

    /**
     * {@inheritDoc}
     */
    public function getChallengeName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChallengeName', array());

        return parent::getChallengeName();
    }

    /**
     * {@inheritDoc}
     */
    public function setChallengeDescription($challengeDescription)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChallengeDescription', array($challengeDescription));

        return parent::setChallengeDescription($challengeDescription);
    }

    /**
     * {@inheritDoc}
     */
    public function getChallengeDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChallengeDescription', array());

        return parent::getChallengeDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(\Lab51\UserBundle\Entity\User $user = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', array($user));

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', array());

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function addResult(\Lab51\ChallengeBundle\Entity\Result $results)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addResult', array($results));

        return parent::addResult($results);
    }

    /**
     * {@inheritDoc}
     */
    public function removeResult(\Lab51\ChallengeBundle\Entity\Result $results)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeResult', array($results));

        return parent::removeResult($results);
    }

    /**
     * {@inheritDoc}
     */
    public function getResults()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResults', array());

        return parent::getResults();
    }

}
