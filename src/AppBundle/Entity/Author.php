<?php


namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/*
 * @ORM\Entity
 * @ORM\Table(name="Author")
 */


class Author
{
    /**
     * @ORM\Column(type = "integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy = "AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type = "string", length = 50)
     */
    private $name;

    /**
     * @ORM\Column(type = "date")
     */

    private $birthday;
    /**
     * @ORM\Column(type = "string", length = 50)
     */
    private $hometown;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param mixed $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * @return mixed
     */
    public function getHometown()
    {
        return $this->hometown;
    }

    /**
     * @param mixed $hometown
     */
    public function setHometown($hometown)
    {
        $this->hometown = $hometown;
    }

    /**
     * Get id
     *
     * @return integer
     */

}