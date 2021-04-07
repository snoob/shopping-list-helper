<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity
 */
class Product
{
    /**
     * @TODO type hint ProductEnum
     *
     * @ORM\Id
     * @ORM\Column(type="string", length=32)
     */
    private string $name;

    /**
     * @ORM\ManyToOne(targetEntity=Category::class)
     * @ORM\JoinColumn(nullable=false, referencedColumnName="name")
     * @Gedmo\SortableGroup
     */
    private Category $category;

    /**
     * @ORM\Column(type="integer")
     * @Gedmo\SortablePosition
     */
    private int $position;

    public function __construct(Category $category, string $name)
    {
        $this->category = $category;
        $this->name = $name;
    }
}
