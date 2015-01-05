<?php

namespace Lab51\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invitation
 *
 * @ORM\Table(name="invitations")
 * @ORM\Entity
 */
class Invitation
{
    /**
     * @ORM\ManyToOne(targetEntity="Lab51\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="friends_name", type="string", length=55)
     */
    private $friends_name;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="verification", type="string", length=255)
     */
    private $verification;

    /**
     * @var integer
     *
     * @ORM\Column(name="challenge_id", type="integer")
     */
    private $challenge_id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean")
     */
    private $status;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Invitation
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set verification
     *
     * @param string $verification
     * @return Invitation
     */
    public function setVerification($verification)
    {
        $this->verification = $verification;

        return $this;
    }

    /**
     * Get verification
     *
     * @return string 
     */
    public function getVerification()
    {
        return $this->verification;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Invitation
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set user
     *
     * @param \Lab51\UserBundle\Entity\User $user
     * @return Invitation
     */
    public function setUser(\Lab51\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Lab51\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set challenge_id
     *
     * @param integer $challengeId
     * @return Invitation
     */
    public function setChallengeId($challengeId)
    {
        $this->challenge_id = $challengeId;

        return $this;
    }

    /**
     * Get challenge_id
     *
     * @return integer 
     */
    public function getChallengeId()
    {
        return $this->challenge_id;
    }

    /**
     * Set friends_name
     *
     * @param string $friendsName
     * @return Invitation
     */
    public function setFriendsName($friendsName)
    {
        $this->friends_name = $friendsName;

        return $this;
    }

    /**
     * Get friends_name
     *
     * @return string 
     */
    public function getFriendsName()
    {
        return $this->friends_name;
    }
}
