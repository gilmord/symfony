<?php
// src/Blogger/BlogBundle/Entity/Blog.php

namespace Bash\NodesBundle\Entity;
use Symfony\Component\HttpFoundation\File\UploadedFile;
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
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $image;

    /**
     * @var string
     */
    protected $file;

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Quote
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

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


    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;
    }

    public function getAbsolutePath()
    {
        return null === $this->path
          ? null
          : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getWebPath()
    {
        return null === $this->path
          ? null
          : $this->getUploadDir().'/'.$this->path;
    }

    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads/documents';
    }

    public function upload()
    {
        // the file property can be empty if the field is not required
        if (null === $this->getFile()) {
            return;
        }

        // use the original file name here but you should
        // sanitize it at least to avoid any security issues

        // move takes the target directory and then the
        // target filename to move to
        $this->getFile()->move(
          $this->getUploadRootDir(),
          $this->getFile()->getClientOriginalName()
        );

        // set the path property to the filename where you've saved the file
        $this->path = $this->getFile()->getClientOriginalName();

        // clean up the file property as you won't need it anymore
        $this->file = null;
    }


//
//    protected function getUploadDir()
//    {
//        //return 'uploads/blogs';
//        return 'images';
//    }
//
//    protected function getUploadRootDir()
//    {
//        return __DIR__.'/../../../../web/'.$this->getUploadDir();
//    }
//
//    public function getWebPath()
//    {
//        return null === $this->image ? null : $this->getUploadDir().'/'.$this->image;
//    }
//
//    public function getAbsolutePath()
//    {
//        return null === $this->image ? null : $this->getUploadRootDir().'/'.$this->image;
//    }
//
//    /**
//     * @ORM\PrePersist
//     */
//    public function preUpload()
//    {
//        if (null !== $this->file) {
//            // do whatever you want to generate a unique name
//            $this->image = uniqid().'.'.$this->file->guessExtension();
//        }
//    }
//
//    /**
//     * @ORM\PostPersist
//     */
//    public function upload()
//    {
//        if (null === $this->file) {
//            return;
//        }
//        $this->file->move($this->getUploadRootDir(), $this->image);
//
//        unset($this->file);
//    }
//
//    /**
//     * @ORM\PostRemove
//     */
//    public function removeUpload()
//    {
//        if ($file = $this->getAbsolutePath()) {
//            unlink($file);
//        }
//    }
}
