<?php
/**
 * This file is part of the Billbee Custom Shop API package.
 *
 * Copyright 2019-2022 by Billbee GmbH
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 *
 * Created by Julian Finkler <julian@mintware.de>
 */

namespace Billbee\CustomShopApi\Model;

use DateTimeInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class OrderComment
{
    #[SerializedName("date_added")]
    #[Type("DateTime")]
    public ?DateTimeInterface $dateAdded = null;

    #[SerializedName("name")]
    #[Type("string")]
    public ?string $name = null;

    #[SerializedName("comment")]
    #[Type("string")]
    public ?string $comment = null;

    #[SerializedName("from_customer")]
    #[Type("bool")]
    public bool $fromCustomer = false;

    public function getDateAdded(): ?DateTimeInterface
    {
        return $this->dateAdded;
    }

    public function setDateAdded(?DateTimeInterface $dateAdded): OrderComment
    {
        $this->dateAdded = $dateAdded;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): OrderComment
    {
        $this->name = $name;
        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): OrderComment
    {
        $this->comment = $comment;
        return $this;
    }

    public function getFromCustomer(): bool
    {
        return $this->fromCustomer;
    }

    public function setFromCustomer(bool $fromCustomer): OrderComment
    {
        $this->fromCustomer = $fromCustomer;
        return $this;
    }
}
