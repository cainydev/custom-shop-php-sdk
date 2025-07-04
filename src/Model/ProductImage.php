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

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class ProductImage
{
    #[SerializedName("url")]
    #[Type("string")]
    public ?string $url = null;

    #[SerializedName("isDefault")]
    #[Type("bool")]
    public bool $isDefault = false;

    #[SerializedName("Position")]
    #[Type("int")]
    public ?int $position = null;

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): ProductImage
    {
        $this->url = $url;
        return $this;
    }

    public function isDefault(): bool
    {
        return $this->isDefault;
    }

    public function setIsDefault(bool $isDefault): ProductImage
    {
        $this->isDefault = $isDefault;
        return $this;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(?int $position): ProductImage
    {
        $this->position = (int)$position;
        return $this;
    }
}
