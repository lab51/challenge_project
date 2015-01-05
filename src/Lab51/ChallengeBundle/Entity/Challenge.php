<?php

namespace Lab51\ChallengeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Lab51\UserBundle\Entity\User;

/**
 * Challenge
 *
 * @ORM\Table(name="challenges")
 * @ORM\Entity(repositoryClass="Lab51\ChallengeBundle\Entity\ChallengeRepository")
 */
class Challenge
{


    /**
     * @ORM\ManyToOne(targetEntity="Lab51\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity="Lab51\ChallengeBundle\Entity\Result", mappedBy="challenge")
     */
    private $results;


    public function __construct()
    {
        $this->results = new ArrayCollection();
    }
    
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
     * @ORM\Column(name="challenge_name", type="string", length=100)
     */
    private $challengeName;

    /**
     * @var string
     *
     * @ORM\Column(name="challenge_description", type="string", length=255)
     */
    private $challengeDescription;


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
     * Set challengeName
     *
     * @param string $challengeName
     * @return Challenge
     */
    public function setChallengeName($challengeName)
    {
        $this->challengeName = $challengeName;

        return $this;
    }

    /**
     * Get challengeName
     *
     * @return string 
     */
    public function getChallengeName()
    {
        return $this->challengeName;
    }

    /**
     * Set challengeDescription
     *
     * @param string $challengeDescription
     * @return Challenge
     */
    public function setChallengeDescription($challengeDescription)
    {
        $this->challengeDescription = $challengeDescription;

        return $this;
    }

    /**
     * Get challengeDescription
     *
     * @return string 
     */
    public function getChallengeDescription()
    {
        return $this->challengeDescription;
    }

    /**
     * Set user
     *
     * @param \Lab51\UserBundle\Entity\User $user
     * @return Challenge
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
     * Add results
     *
     * @param \Lab51\ChallengeBundle\Entity\Result $results
     * @return Challenge
     */
    public function addResult(\Lab51\ChallengeBundle\Entity\Result $results)
    {
        $this->results[] = $results;

        return $this;
    }

    /**
     * Remove results
     *
     * @param \Lab51\ChallengeBundle\Entity\Result $results
     */
    public function removeResult(\Lab51\ChallengeBundle\Entity\Result $results)
    {
        $this->results->removeElement($results);
    }

    /**
     * Get results
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * Add users
     *
     * @param \Lab51\UserBundle\Entity\User $users
     * @return Challenge
     */
    public function addUser(\Lab51\UserBundle\Entity\User $users)
    {
        $this->users[] = $users;

        return $this;
    }

    /**
     * Remove users
     *
     * @param \Lab51\UserBundle\Entity\User $users
     */
    public function removeUser(\Lab51\UserBundle\Entity\User $users)
    {
        $this->users->removeElement($users);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsers()
    {
        return $this->users;
    }
}
