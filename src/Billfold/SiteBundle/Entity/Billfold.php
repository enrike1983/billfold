<?php

namespace Billfold\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="billfold")
 */
class Billfold
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    
    protected $owner;
    
    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    protected $total;

    /**
     * @ORM\Column(type="text")
     */
    protected $notes;
}

?>
