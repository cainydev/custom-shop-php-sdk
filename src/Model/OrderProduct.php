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

class OrderProduct
{
    #[SerializedName("discount_percent")]
    #[Type("float")]
    public ?float $discountPercent = null;

    #[SerializedName("quantity")]
    #[Type("float")]
    public ?float $quantity = null;

    #[SerializedName("unit_price")]
    #[Type("float")]
    public ?float $unitPrice = null;

    #[SerializedName("product_id")]
    #[Type("string")]
    public ?string $productId = null;

    #[SerializedName("name")]
    #[Type("string")]
    public ?string $name = null;

    #[SerializedName("sku")]
    #[Type("string")]
    public ?string $sku = null;

    #[SerializedName("tax_rate")]
    #[Type("float")]
    public ?float $taxRate = null;

    #[SerializedName("options")]
    #[Type("array<Billbee\CustomShopApi\Model\OrderProductOption>")]
    public ?array $options = null;

    public function getDiscountPercent(): ?float
    {
        return $this->discountPercent;
    }

    public function setDiscountPercent(?float $discountPercent): OrderProduct
    {
        $this->discountPercent = $discountPercent;
        return $this;
    }

    public function getQuantity(): ?float
    {
        return $this->quantity;
    }

    public function setQuantity(?float $quantity): OrderProduct
    {
        $this->quantity = $quantity;
        return $this;
    }


    public function getUnitPrice(): ?float
    {
        return $this->unitPrice;
    }

    public function setUnitPrice(?float $unitPrice): OrderProduct
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    public function getProductId(): ?string
    {
        return $this->productId;
    }

    public function setProductId(?string $productId): OrderProduct
    {
        $this->productId = $productId;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): OrderProduct
    {
        $this->name = $name;
        return $this;
    }

    public function getSku(): ?string
    {
        return $this->sku;
    }

    public function setSku(?string $sku): OrderProduct
    {
        $this->sku = $sku;
        return $this;
    }


    public function getTaxRate(): ?float
    {
        return $this->taxRate;
    }

    public function setTaxRate(?float $taxRate): OrderProduct
    {
        $this->taxRate = $taxRate;
        return $this;
    }

    /**
     * @return OrderProductOption[]|null
     */
    public function getOptions(): ?array
    {
        return $this->options;
    }

    /**
     * @param OrderProductOption[]|null $options
     */
    public function setOptions(?array $options): OrderProduct
    {
        $this->options = $options;
        return $this;
    }
}
