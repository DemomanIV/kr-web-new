<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 15.05.2017
 * Time: 11:28
 */

namespace Blogger\BlogBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Blogger\BlogBundle\Entity\Repository\BiddRepository")
 * @ORM\Table(name="bid")
 * @ORM\HasLifecycleCallbacks
 */
class Bidd{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     *
     */
    protected $fio;

    /**
     * @ORM\ManyToOne(targetEntity="Specialty")
     * @ORM\JoinColumn(name="specialty_id", referencedColumnName="id")
     */
    protected $specialty;

    /**
     * @ORM\Column(type="integer")
     *
     */
    protected $mark1;

    /**
     * @ORM\Column(type="integer")
     *
     */
    protected $mark2;

    /**
     * @ORM\Column(type="integer")
     *
     */
    protected $mark3;


    /**
     * @ORM\Column(type="boolean")
     */
    protected $check1;

    public function __construct(){
//        $this->check = 0;
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
     * Set fio
     *
     * @param string $fio
     *
     * @return Bidd
     */
    public function setFio($fio)
    {
        $this->fio = $fio;

        return $this;
    }

    /**
     * Get fio
     *
     * @return string
     */
    public function getFio()
    {
        return $this->fio;
    }

    /**
     * Set specialty
     *
     * @param \Blogger\BlogBundle\Entity\Specialty $specialty
     *
     * @return Bidd
     */
    public function setSpecialty(\Blogger\BlogBundle\Entity\Specialty $specialty = null)
    {
        $this->specialty = $specialty;

        return $this;
    }

    /**
     * Get specialty
     *
     * @return \Blogger\BlogBundle\Entity\Specialty
     */
    public function getSpecialty()
    {
        return $this->specialty;
    }

    /**
     * Set mark1
     *
     * @param integer $mark1
     *
     * @return Bidd
     */
    public function setMark1($mark1)
    {
        $this->mark1 = $mark1;

        return $this;
    }

    /**
     * Get mark1
     *
     * @return integer
     */
    public function getMark1()
    {
        return $this->mark1;
    }

    /**
     * Set mark2
     *
     * @param integer $mark2
     *
     * @return Bidd
     */
    public function setMark2($mark2)
    {
        $this->mark2 = $mark2;

        return $this;
    }

    /**
     * Get mark2
     *
     * @return integer
     */
    public function getMark2()
    {
        return $this->mark2;
    }

    /**
     * Set mark3
     *
     * @param integer $mark3
     *
     * @return Bidd
     */
    public function setMark3($mark3)
    {
        $this->mark3 = $mark3;

        return $this;
    }

    /**
     * Get mark3
     *
     * @return integer
     */
    public function getMark3()
    {
        return $this->mark3;
    }


    /**
     * Set check1
     *
     * @param integer $check1
     *
     * @return Bidd
     */
    public function setCheck1($check1)
    {
        $this->check1 = $check1;

        return $this;
    }

    /**
     * Get check1
     *
     * @return integer
     */
    public function getCheck1()
    {
        return $this->check1;
    }
}
