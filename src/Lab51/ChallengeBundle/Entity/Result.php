<?php

namespace Lab51\ChallengeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Result
 *
 * @ORM\Table(name="results")
 * @ORM\Entity(repositoryClass="Lab51\ChallengeBundle\Entity\ResultRepository")
 */
class Result
{

    /**
     * @ORM\ManyToOne(targetEntity="Lab51\ChallengeBundle\Entity\Challenge", inversedBy="results")
     * @ORM\JoinColumn(name="challenge_id", referencedColumnName="id")
     */
    protected $challenge;

    /**
     * @ORM\ManyToOne(targetEntity="Lab51\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;


    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="result", type="integer")
     */
    private $result;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    public function __construct()
    {
        $this->date = new \DateTime('today');
    }
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
     * Set result
     *
     * @param integer $result
     * @return Result
     */
    public function setResult($result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get result
     *
     * @return integer 
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Result
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set challenge
     *
     * @param \Lab51\ChallengeBundle\Entity\Challenge $challenge
     * @return Result
     */
    public function setChallenge(\Lab51\ChallengeBundle\Entity\Challenge $challenge = null)
    {
        $this->challenge = $challenge;

        return $this;
    }

    /**
     * Get challenge
     *
     * @return \Lab51\ChallengeBundle\Entity\Challenge 
     */
    public function getChallenge()
    {
        return $this->challenge;
    }

    /**
     * Set user
     *
     * @param \Lab51\UserBundle\Entity\User $user
     * @return Result
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
}
