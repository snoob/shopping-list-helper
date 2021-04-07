<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class ShoppingList
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=64)
     */
    private string $name;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private \DateTimeImmutable $dateCreated;

    /**
     * @ORM\Column(type="text")
     */
    private string $input;

    /**
     * @ORM\Column(type="text", nullable=false)
     */
    private ?string $output;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->dateCreated = new \DateTimeImmutable();
    }

    public function getInput(): string
    {
        return $this->input;
    }

    public function setInput(string $input): void
    {
        $this->input = $input;
    }
}
