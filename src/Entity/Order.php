<?php

namespace App\Entity;

use App\Repository\OrderRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrderRepository::class)]
#[ORM\Table(name: '`order`')]
class Order
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Items = null;

    #[ORM\Column(length: 255)]
    private ?string $order_status = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $amount_paid = null;

    #[ORM\Column]
    private ?int $customer_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getItems(): ?string
    {
        return $this->Items;
    }

    public function setItems(string $Items): static
    {
        $this->Items = $Items;

        return $this;
    }

    public function getOrderStatus(): ?string
    {
        return $this->order_status;
    }

    public function setOrderStatus(string $order_status): static
    {
        $this->order_status = $order_status;

        return $this;
    }

    public function getAmountPaid(): ?string
    {
        return $this->amount_paid;
    }

    public function setAmountPaid(string $amount_paid): static
    {
        $this->amount_paid = $amount_paid;

        return $this;
    }

    public function getCustomerId(): ?int
    {
        return $this->customer_id;
    }

    public function setCustomerId(int $customer_id): static
    {
        $this->customer_id = $customer_id;

        return $this;
    }
}
