<?php

namespace MakinMind\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MakinMind\UserBundle\Entity\Mark
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MakinMind\UserBundle\Entity\MarkRepository")
 */
class Mark
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @var smallint $mark
     *
     * @ORM\Column(name="mark", type="smallint")
     */
    private $mark;

    /**
     * @var datetime $date
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string $comment
     *
     * @ORM\Column(name="comment", type="string", length=255)
     */
    private $comment;

    /**
     * @ORM\ManyToOne(targetEntity="MakinMind\UserBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $owner;

    /**
     * @ORM\ManyToOne(targetEntity="MakinMind\UserBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $worker;

    /**
     * @ORM\ManyToOne(targetEntity="MakinMind\ProjectBundle\Entity\Project")
     * @ORM\JoinColumn(nullable=false)
     */
    private $project;

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
     * Set mark
     *
     * @param smallint $mark
     */
    public function setMark($mark)
    {
        $this->mark = $mark;
    }

    /**
     * Get mark
     *
     * @return smallint 
     */
    public function getMark()
    {
        return $this->mark;
    }

    /**
     * Set date
     *
     * @param datetime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * Get date
     *
     * @return datetime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set comment
     *
     * @param string $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set owner
     *
     * @param MakinMind\UserBundle\Entity\User $owner
     */
    public function setOwner(\MakinMind\UserBundle\Entity\User $owner)
    {
        $this->owner = $owner;
    }

    /**
     * Get owner
     *
     * @return MakinMind\UserBundle\Entity\User 
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set worker
     *
     * @param MakinMind\UserBundle\Entity\User $worker
     */
    public function setWorker(\MakinMind\UserBundle\Entity\User $worker)
    {
        $this->worker = $worker;
    }

    /**
     * Get worker
     *
     * @return MakinMind\UserBundle\Entity\User 
     */
    public function getWorker()
    {
        return $this->worker;
    }

    /**
     * Set project
     *
     * @param MakinMind\ProjectBundle\Entity\Project $project
     */
    public function setProject(\MakinMind\ProjectBundle\Entity\Project $project)
    {
        $this->project = $project;
    }

    /**
     * Get project
     *
     * @return MakinMind\ProjectBundle\Entity\Project 
     */
    public function getProject()
    {
        return $this->project;
    }
}