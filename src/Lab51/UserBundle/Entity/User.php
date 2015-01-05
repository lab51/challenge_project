<?php
namespace Lab51\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * User
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="Lab51\UserBundle\Entity\UserRepository")
 */
class User
{
     /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\ManyToMany(targetEntity="Lab51\ChallengeBundle\Entity\Challenge")
     * @ORM\JoinTable(name="users_groups",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="group_id", referencedColumnName="id")}
     *      )
     **/
    private $groups;
    /**
     * @ORM\ManyToMany(targetEntity="User", mappedBy="myFriends")
     **/
    private $friendsWithMe;

    /**
     * @ORM\ManyToMany(targetEntity="User", inversedBy="friendsWithMe")
     * @ORM\JoinTable(name="friends",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="friend_user_id", referencedColumnName="id")}
     *      )
     **/

    private $myFriends;
    private $challenges;
    private $results;
    private $invitations;
    private $messages;

    
    public function __construct()
    {
        $this->groups = new ArrayCollection();
        $this->friendsWithMe = new ArrayCollection();
        $this->myFriends = new ArrayCollection();
        $this->challenges = new ArrayCollection();
        $this->results = new ArrayCollection();
        $this->invitations = new ArrayCollection();
        $this->messages = new ArrayCollection();
    }

    /**
     * @ORM\OneToMany(targetEntity="Lab51\ChallengeBundle\Entity\Challenge", mappedBy="user")
     * @ORM\OneToMany(targetEntity="Lab51\ChallengeBundle\Entity\Result", mappedBy="user")
     * @ORM\OneToMany(targetEntity="Lab51\InboxBundle\Entity\Message", mappedBy="inbox_owner")
     * @ORM\OneToMany(targetEntity="Lab51\UserBundle\Entity\Invitation", mappedBy="user")
     **/

   

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=100)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100)
     */
    private $email;


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
     * Set name
     *
     * @param string $name
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
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
     * Add challenges
     *
     * @param \Lab51\ChallengeBundle\Entity\Challenge $challenges
     * @return User
     */
    public function addChallenge(\Lab51\ChallengeBundle\Entity\Challenge $challenges)
    {
        $this->challenges[] = $challenges;

        return $this;
    }

    /**
     * Remove challenges
     *
     * @param \Lab51\ChallengeBundle\Entity\Challenge $challenges
     */
    public function removeChallenge(\Lab51\ChallengeBundle\Entity\Challenge $challenges)
    {
        $this->challenges->removeElement($challenges);
    }

    /**
     * Get challenges
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getChallenges()
    {
        return $this->challenges;
    }




    /**
     * Add friendsWithMe
     *
     * @param \Lab51\UserBundle\Entity\User $friendsWithMe
     * @return User
     */
    public function addFriendsWithMe(\Lab51\UserBundle\Entity\User $friendsWithMe)
    {
        $this->friendsWithMe[] = $friendsWithMe;

        return $this;
    }

    /**
     * Remove friendsWithMe
     *
     * @param \Lab51\UserBundle\Entity\User $friendsWithMe
     */
    public function removeFriendsWithMe(\Lab51\UserBundle\Entity\User $friendsWithMe)
    {
        $this->friendsWithMe->removeElement($friendsWithMe);
    }

    /**
     * Get friendsWithMe
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFriendsWithMe()
    {
        return $this->friendsWithMe;
    }

    /**
     * Add myFriends
     *
     * @param \Lab51\UserBundle\Entity\User $myFriends
     * @return User
     */
    public function addMyFriend(\Lab51\UserBundle\Entity\User $myFriends)
    {
        $this->myFriends[] = $myFriends;

        return $this;
    }

    /**
     * Remove myFriends
     *
     * @param \Lab51\UserBundle\Entity\User $myFriends
     */
    public function removeMyFriend(\Lab51\UserBundle\Entity\User $myFriends)
    {
        $this->myFriends->removeElement($myFriends);
    }

    /**
     * Get myFriends
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMyFriends()
    {
        return $this->myFriends;
    }



    /**
     * Add groups
     *
     * @param \Lab51\ChallengeBundle\Entity\Challenge $groups
     * @return User
     */
    public function addGroup(\Lab51\ChallengeBundle\Entity\Challenge $groups)
    {
        $this->groups[] = $groups;

        return $this;
    }

    /**
     * Remove groups
     *
     * @param \Lab51\ChallengeBundle\Entity\Challenge $groups
     */
    public function removeGroup(\Lab51\ChallengeBundle\Entity\Challenge $groups)
    {
        $this->groups->removeElement($groups);
    }

    /**
     * Get groups
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGroups()
    {
        return $this->groups;
    }

}
