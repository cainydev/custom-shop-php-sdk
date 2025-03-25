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

class Product
{
    #[SerializedName("material")]
    #[Type("string")]
    public ?string $material = null;

    #[SerializedName("shortdescription")]
    #[Type("string")]
    public ?string $shortDescription = null;

    #[SerializedName("basic_attributes")]
    #[Type("string")]
    public ?string $basicAttributes = null;

    #[SerializedName("description")]
    #[Type("string")]
    public ?string $description = null;

    #[SerializedName("id")]
    #[Type("string")]
    public ?string $id = null;

    /** @var ?ProductImage[] */
    #[SerializedName("images")]
    #[Type("array<Billbee\CustomShopApi\Model\ProductImage>")]
    public ?array $images = null;

    #[SerializedName("title")]
    #[Type("string")]
    public ?string $title = null;

    #[SerializedName("price")]
    #[Type("float")]
    public ?float $price = null;

    #[SerializedName("quantity")]
    #[Type("float")]
    public ?float $quantity = null;

    #[SerializedName("sku")]
    #[Type("string")]
    public ?string $sku = null;

    #[SerializedName("ean")]
    #[Type("string")]
    public ?string $ean = null;

    #[SerializedName("manufacturer")]
    #[Type("string")]
    public ?string $manufacturer = null;

    /** @var bool */
    #[SerializedName("isdigital")]
    #[Type("bool")]
    public bool $isDigital = false;

    #[SerializedName("weight")]
    #[Type("float")]
    public ?float $weightInKg = null;

    #[SerializedName("vat_rate")]
    #[Type("float")]
    public ?float $vatRate = null;

    #[SerializedName("lengthcm")]
    #[Type("float")]
    public ?float $lengthInCm = null;

    #[SerializedName("widthcm")]
    #[Type("float")]
    public ?float $widthInCm = null;

    #[SerializedName("heightcm")]
    #[Type("float")]
    public ?float $heightInCm = null;

    /** @var array<string, string> */
    #[SerializedName("customfields")]
    #[Type("array<string, string>")]
    public ?array $customFields = null;

    public function getMaterial(): ?string
    {
        return $this->material;
    }

    public function setMaterial(?string $material): Product
    {
        $this->material = $material;
        return $this;
    }

    public function getShortDescription(): ?string
    {
        return $this->shortDescription;
    }

    public function setShortDescription(?string $shortDescription): Product
    {
        $this->shortDescription = $shortDescription;
        return $this;
    }

    public function getBasicAttributes(): ?string
    {
        return $this->basicAttributes;
    }

    public function setBasicAttributes(?string $basicAttributes): Product
    {
        $this->basicAttributes = $basicAttributes;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): Product
    {
        $this->description = $description;
        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): Product
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return ?ProductImage[]
     */
    public function getImages(): ?array
    {
        return $this->images;
    }

    /**
     * @param ?ProductImage[] $images
     */
    public function setImages(?array $images): self
    {
        $this->images = $images;
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): Product
    {
        $this->title = $title;
        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price): Product
    {
        $this->price = $price;
        return $this;
    }

    public function getQuantity(): ?float
    {
        return $this->quantity;
    }

    public function setQuantity(?float $quantity): Product
    {
        $this->quantity = $quantity;
        return $this;
    }

    public function getSku(): ?string
    {
        return $this->sku;
    }

    public function setSku(?string $sku): Product
    {
        $this->sku = $sku;
        return $this;
    }

    public function getEan(): ?string
    {
        return $this->ean;
    }

    public function setEan(?string $ean): Product
    {
        $this->ean = $ean;
        return $this;
    }

    public function getManufacturer(): ?string
    {
        return $this->manufacturer;
    }

    public function setManufacturer(?string $manufacturer): Product
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    public function isDigital(): bool
    {
        return $this->isDigital;
    }

    public function setIsDigital(bool $isDigital): Product
    {
        $this->isDigital = $isDigital;
        return $this;
    }

    public function getWeightInKg(): ?float
    {
        return $this->weightInKg;
    }

    public function setWeightInKg(?float $weightInKg): Product
    {
        $this->weightInKg = $weightInKg;
        return $this;
    }

    public function getVatRate(): ?float
    {
        return $this->vatRate;
    }

    public function setVatRate(?float $vatRate): Product
    {
        $this->vatRate = $vatRate;
        return $this;
    }

    public function getLengthInCm(): ?float
    {
        return $this->lengthInCm;
    }

    public function setLengthInCm(?float $lengthInCm): Product
    {
        $this->lengthInCm = $lengthInCm;
        return $this;
    }

    public function getWidthInCm(): ?float
    {
        return $this->widthInCm;
    }

    public function setWidthInCm(?float $widthInCm): Product
    {
        $this->widthInCm = $widthInCm;
        return $this;
    }

    public function getHeightInCm(): ?float
    {
        return $this->heightInCm;
    }

    public function setHeightInCm(?float $heightInCm): Product
    {
        $this->heightInCm = $heightInCm;
        return $this;
    }

    /**
     * @return array<string, string>
     */
    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    /**
     * @param ?array<string, string> $customFields
     */
    public function setCustomFields(?array $customFields): Product
    {
        $this->customFields = $customFields;
        return $this;
    }
}
