<?php

namespace Proxies\__CG__\Lab51\UserBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \Lab51\UserBundle\Entity\User implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Lab51\\UserBundle\\Entity\\User' . "\0" . 'id', '' . "\0" . 'Lab51\\UserBundle\\Entity\\User' . "\0" . 'groups', '' . "\0" . 'Lab51\\UserBundle\\Entity\\User' . "\0" . 'friendsWithMe', '' . "\0" . 'Lab51\\UserBundle\\Entity\\User' . "\0" . 'myFriends', '' . "\0" . 'Lab51\\UserBundle\\Entity\\User' . "\0" . 'challenges', '' . "\0" . 'Lab51\\UserBundle\\Entity\\User' . "\0" . 'results', '' . "\0" . 'Lab51\\UserBundle\\Entity\\User' . "\0" . 'invitations', '' . "\0" . 'Lab51\\UserBundle\\Entity\\User' . "\0" . 'messages', '' . "\0" . 'Lab51\\UserBundle\\Entity\\User' . "\0" . 'name', '' . "\0" . 'Lab51\\UserBundle\\Entity\\User' . "\0" . 'password', '' . "\0" . 'Lab51\\UserBundle\\Entity\\User' . "\0" . 'email');
        }

        return array('__isInitialized__', '' . "\0" . 'Lab51\\UserBundle\\Entity\\User' . "\0" . 'id', '' . "\0" . 'Lab51\\UserBundle\\Entity\\User' . "\0" . 'groups', '' . "\0" . 'Lab51\\UserBundle\\Entity\\User' . "\0" . 'friendsWithMe', '' . "\0" . 'Lab51\\UserBundle\\Entity\\User' . "\0" . 'myFriends', '' . "\0" . 'Lab51\\UserBundle\\Entity\\User' . "\0" . 'challenges', '' . "\0" . 'Lab51\\UserBundle\\Entity\\User' . "\0" . 'results', '' . "\0" . 'Lab51\\UserBundle\\Entity\\User' . "\0" . 'invitations', '' . "\0" . 'Lab51\\UserBundle\\Entity\\User' . "\0" . 'messages', '' . "\0" . 'Lab51\\UserBundle\\Entity\\User' . "\0" . 'name', '' . "\0" . 'Lab51\\UserBundle\\Entity\\User' . "\0" . 'password', '' . "\0" . 'Lab51\\UserBundle\\Entity\\User' . "\0" . 'email');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
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
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', array($name));

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', array());

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', array($password));

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', array());

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', array($email));

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', array());

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function addChallenge(\Lab51\ChallengeBundle\Entity\Challenge $challenges)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addChallenge', array($challenges));

        return parent::addChallenge($challenges);
    }

    /**
     * {@inheritDoc}
     */
    public function removeChallenge(\Lab51\ChallengeBundle\Entity\Challenge $challenges)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeChallenge', array($challenges));

        return parent::removeChallenge($challenges);
    }

    /**
     * {@inheritDoc}
     */
    public function getChallenges()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChallenges', array());

        return parent::getChallenges();
    }

    /**
     * {@inheritDoc}
     */
    public function addFriendsWithMe(\Lab51\UserBundle\Entity\User $friendsWithMe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addFriendsWithMe', array($friendsWithMe));

        return parent::addFriendsWithMe($friendsWithMe);
    }

    /**
     * {@inheritDoc}
     */
    public function removeFriendsWithMe(\Lab51\UserBundle\Entity\User $friendsWithMe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeFriendsWithMe', array($friendsWithMe));

        return parent::removeFriendsWithMe($friendsWithMe);
    }

    /**
     * {@inheritDoc}
     */
    public function getFriendsWithMe()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFriendsWithMe', array());

        return parent::getFriendsWithMe();
    }

    /**
     * {@inheritDoc}
     */
    public function addMyFriend(\Lab51\UserBundle\Entity\User $myFriends)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMyFriend', array($myFriends));

        return parent::addMyFriend($myFriends);
    }

    /**
     * {@inheritDoc}
     */
    public function removeMyFriend(\Lab51\UserBundle\Entity\User $myFriends)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeMyFriend', array($myFriends));

        return parent::removeMyFriend($myFriends);
    }

    /**
     * {@inheritDoc}
     */
    public function getMyFriends()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMyFriends', array());

        return parent::getMyFriends();
    }

    /**
     * {@inheritDoc}
     */
    public function addGroup(\Lab51\ChallengeBundle\Entity\Challenge $groups)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addGroup', array($groups));

        return parent::addGroup($groups);
    }

    /**
     * {@inheritDoc}
     */
    public function removeGroup(\Lab51\ChallengeBundle\Entity\Challenge $groups)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeGroup', array($groups));

        return parent::removeGroup($groups);
    }

    /**
     * {@inheritDoc}
     */
    public function getGroups()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGroups', array());

        return parent::getGroups();
    }

}
