<?php
// src/Blogger/BlogBundle/Entity/Blog.php

namespace Bash\NodesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;

/**
 * @ORM\Entity(repositoryClass="Bash\NodesBundle\Entity\Repository\BashRepository")
 * @ORM\Entity
 * @ORM\Table(name="quote")
 */
class Quote
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="text")
     */
    protected $subject;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $author;



    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $path;

    /**
     * @var string
     */
    protected $file;



    /**
     * @ORM\Column(type="datetime")
     */
    protected $created;

    /**
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="blog")
     */
    protected $comments = array();

    public function addComment(Comment $comment)
    {
        $this->comments[] = $comment;
    }

    public function getComments()
    {
        return $this->comments;
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
     * Set subject
     *
     * @param string $subject
     * @return Quote
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string 
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return Quote
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return Quote
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Quote
     */
    public function setCreated($created)
    {

        $this->created = $created;
        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }



    public function __construct()
    {
        $this->comments = new ArrayCollection();
        $this->setCreated(new \DateTime());
    }

    /**
     * Remove comments
     *
     * @param \Bash\NodesBundle\Entity\Comment $comments
     */
    public function removeComment(\Bash\NodesBundle\Entity\Comment $comments)
    {
        $this->comments->removeElement($comments);
    }

    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('subject', new NotBlank(array(
            'message' => 'You must enter subject'
          )));

    }

    public function __toString()
    {
        $string = (string) $this->getId();
        return $string;
    }
}
