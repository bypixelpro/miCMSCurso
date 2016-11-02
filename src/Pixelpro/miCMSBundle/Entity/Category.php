<?php

namespace Pixelpro\miCMSBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collection\ArrayCollection;

/**
 * Category
 */
class Category
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    private $post;

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

    public function __toString(){
      return $this->name;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Category
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $products;


    /**
     * Add post
     *
     * @param \Pixelpro\miCMSBundle\Entity\Post $post
     *
     * @return Category
     */
    public function addPost(\Pixelpro\miCMSBundle\Entity\Post $post)
    {
        $this->post[] = $post;

        return $this;
    }

    /**
     * Remove post
     *
     * @param \Pixelpro\miCMSBundle\Entity\Post $post
     */
    public function removePost(\Pixelpro\miCMSBundle\Entity\Post $post)
    {
        $this->post->removeElement($post);
    }

    /**
     * Get post
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPost()
    {
        return $this->post;
    }
}
