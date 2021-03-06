<?php

namespace Proxies\__CG__\Store\BackendBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Jeweler extends \Store\BackendBundle\Entity\Jeweler implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Store\\BackendBundle\\Entity\\Jeweler' . "\0" . 'id', '' . "\0" . 'Store\\BackendBundle\\Entity\\Jeweler' . "\0" . 'username', '' . "\0" . 'Store\\BackendBundle\\Entity\\Jeweler' . "\0" . 'email', '' . "\0" . 'Store\\BackendBundle\\Entity\\Jeweler' . "\0" . 'password', '' . "\0" . 'Store\\BackendBundle\\Entity\\Jeweler' . "\0" . 'title', '' . "\0" . 'Store\\BackendBundle\\Entity\\Jeweler' . "\0" . 'description', '' . "\0" . 'Store\\BackendBundle\\Entity\\Jeweler' . "\0" . 'image', '' . "\0" . 'Store\\BackendBundle\\Entity\\Jeweler' . "\0" . 'type', '' . "\0" . 'Store\\BackendBundle\\Entity\\Jeweler' . "\0" . 'enabled', '' . "\0" . 'Store\\BackendBundle\\Entity\\Jeweler' . "\0" . 'locked', '' . "\0" . 'Store\\BackendBundle\\Entity\\Jeweler' . "\0" . 'expired', '' . "\0" . 'Store\\BackendBundle\\Entity\\Jeweler' . "\0" . 'salt', '' . "\0" . 'Store\\BackendBundle\\Entity\\Jeweler' . "\0" . 'token', '' . "\0" . 'Store\\BackendBundle\\Entity\\Jeweler' . "\0" . 'usernameCanonical', '' . "\0" . 'Store\\BackendBundle\\Entity\\Jeweler' . "\0" . 'emailCanonical', '' . "\0" . 'Store\\BackendBundle\\Entity\\Jeweler' . "\0" . 'credentialsExpired', '' . "\0" . 'Store\\BackendBundle\\Entity\\Jeweler' . "\0" . 'credentialsExpireAt', '' . "\0" . 'Store\\BackendBundle\\Entity\\Jeweler' . "\0" . 'confirmationToken', '' . "\0" . 'Store\\BackendBundle\\Entity\\Jeweler' . "\0" . 'passwordRequestedAt', '' . "\0" . 'Store\\BackendBundle\\Entity\\Jeweler' . "\0" . 'fid', '' . "\0" . 'Store\\BackendBundle\\Entity\\Jeweler' . "\0" . 'slug', '' . "\0" . 'Store\\BackendBundle\\Entity\\Jeweler' . "\0" . 'accountnonlocked', '' . "\0" . 'Store\\BackendBundle\\Entity\\Jeweler' . "\0" . 'accountnonexpired', '' . "\0" . 'Store\\BackendBundle\\Entity\\Jeweler' . "\0" . 'dateCreated');
        }

        return array('__isInitialized__', '' . "\0" . 'Store\\BackendBundle\\Entity\\Jeweler' . "\0" . 'id', '' . "\0" . 'Store\\BackendBundle\\Entity\\Jeweler' . "\0" . 'username', '' . "\0" . 'Store\\BackendBundle\\Entity\\Jeweler' . "\0" . 'email', '' . "\0" . 'Store\\BackendBundle\\Entity\\Jeweler' . "\0" . 'password', '' . "\0" . 'Store\\BackendBundle\\Entity\\Jeweler' . "\0" . 'title', '' . "\0" . 'Store\\BackendBundle\\Entity\\Jeweler' . "\0" . 'description', '' . "\0" . 'Store\\BackendBundle\\Entity\\Jeweler' . "\0" . 'image', '' . "\0" . 'Store\\BackendBundle\\Entity\\Jeweler' . "\0" . 'type', '' . "\0" . 'Store\\BackendBundle\\Entity\\Jeweler' . "\0" . 'enabled', '' . "\0" . 'Store\\BackendBundle\\Entity\\Jeweler' . "\0" . 'locked', '' . "\0" . 'Store\\BackendBundle\\Entity\\Jeweler' . "\0" . 'expired', '' . "\0" . 'Store\\BackendBundle\\Entity\\Jeweler' . "\0" . 'salt', '' . "\0" . 'Store\\BackendBundle\\Entity\\Jeweler' . "\0" . 'token', '' . "\0" . 'Store\\BackendBundle\\Entity\\Jeweler' . "\0" . 'usernameCanonical', '' . "\0" . 'Store\\BackendBundle\\Entity\\Jeweler' . "\0" . 'emailCanonical', '' . "\0" . 'Store\\BackendBundle\\Entity\\Jeweler' . "\0" . 'credentialsExpired', '' . "\0" . 'Store\\BackendBundle\\Entity\\Jeweler' . "\0" . 'credentialsExpireAt', '' . "\0" . 'Store\\BackendBundle\\Entity\\Jeweler' . "\0" . 'confirmationToken', '' . "\0" . 'Store\\BackendBundle\\Entity\\Jeweler' . "\0" . 'passwordRequestedAt', '' . "\0" . 'Store\\BackendBundle\\Entity\\Jeweler' . "\0" . 'fid', '' . "\0" . 'Store\\BackendBundle\\Entity\\Jeweler' . "\0" . 'slug', '' . "\0" . 'Store\\BackendBundle\\Entity\\Jeweler' . "\0" . 'accountnonlocked', '' . "\0" . 'Store\\BackendBundle\\Entity\\Jeweler' . "\0" . 'accountnonexpired', '' . "\0" . 'Store\\BackendBundle\\Entity\\Jeweler' . "\0" . 'dateCreated');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Jeweler $proxy) {
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
    public function setUsername($username)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsername', array($username));

        return parent::setUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', array());

        return parent::getUsername();
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
    public function setTitle($title)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', array($title));

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', array());

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', array($description));

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', array());

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage($image)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', array($image));

        return parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', array());

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', array($type));

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', array());

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setEnabled($enabled)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnabled', array($enabled));

        return parent::setEnabled($enabled);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnabled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnabled', array());

        return parent::getEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocked($locked)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocked', array($locked));

        return parent::setLocked($locked);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocked()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocked', array());

        return parent::getLocked();
    }

    /**
     * {@inheritDoc}
     */
    public function setExpired($expired)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExpired', array($expired));

        return parent::setExpired($expired);
    }

    /**
     * {@inheritDoc}
     */
    public function getExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExpired', array());

        return parent::getExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function setSalt($salt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSalt', array($salt));

        return parent::setSalt($salt);
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', array());

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function setToken($token)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setToken', array($token));

        return parent::setToken($token);
    }

    /**
     * {@inheritDoc}
     */
    public function getToken()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getToken', array());

        return parent::getToken();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsernameCanonical($usernameCanonical)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsernameCanonical', array($usernameCanonical));

        return parent::setUsernameCanonical($usernameCanonical);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsernameCanonical()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsernameCanonical', array());

        return parent::getUsernameCanonical();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmailCanonical($emailCanonical)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmailCanonical', array($emailCanonical));

        return parent::setEmailCanonical($emailCanonical);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailCanonical()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailCanonical', array());

        return parent::getEmailCanonical();
    }

    /**
     * {@inheritDoc}
     */
    public function setCredentialsExpired($credentialsExpired)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCredentialsExpired', array($credentialsExpired));

        return parent::setCredentialsExpired($credentialsExpired);
    }

    /**
     * {@inheritDoc}
     */
    public function getCredentialsExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCredentialsExpired', array());

        return parent::getCredentialsExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function setCredentialsExpireAt($credentialsExpireAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCredentialsExpireAt', array($credentialsExpireAt));

        return parent::setCredentialsExpireAt($credentialsExpireAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getCredentialsExpireAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCredentialsExpireAt', array());

        return parent::getCredentialsExpireAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setConfirmationToken($confirmationToken)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setConfirmationToken', array($confirmationToken));

        return parent::setConfirmationToken($confirmationToken);
    }

    /**
     * {@inheritDoc}
     */
    public function getConfirmationToken()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConfirmationToken', array());

        return parent::getConfirmationToken();
    }

    /**
     * {@inheritDoc}
     */
    public function setPasswordRequestedAt($passwordRequestedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPasswordRequestedAt', array($passwordRequestedAt));

        return parent::setPasswordRequestedAt($passwordRequestedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getPasswordRequestedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPasswordRequestedAt', array());

        return parent::getPasswordRequestedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setFid($fid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFid', array($fid));

        return parent::setFid($fid);
    }

    /**
     * {@inheritDoc}
     */
    public function getFid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFid', array());

        return parent::getFid();
    }

    /**
     * {@inheritDoc}
     */
    public function setSlug($slug)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlug', array($slug));

        return parent::setSlug($slug);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlug()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlug', array());

        return parent::getSlug();
    }

    /**
     * {@inheritDoc}
     */
    public function setAccountnonlocked($accountnonlocked)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAccountnonlocked', array($accountnonlocked));

        return parent::setAccountnonlocked($accountnonlocked);
    }

    /**
     * {@inheritDoc}
     */
    public function getAccountnonlocked()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAccountnonlocked', array());

        return parent::getAccountnonlocked();
    }

    /**
     * {@inheritDoc}
     */
    public function setAccountnonexpired($accountnonexpired)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAccountnonexpired', array($accountnonexpired));

        return parent::setAccountnonexpired($accountnonexpired);
    }

    /**
     * {@inheritDoc}
     */
    public function getAccountnonexpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAccountnonexpired', array());

        return parent::getAccountnonexpired();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateCreated($dateCreated)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateCreated', array($dateCreated));

        return parent::setDateCreated($dateCreated);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateCreated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateCreated', array());

        return parent::getDateCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

}
