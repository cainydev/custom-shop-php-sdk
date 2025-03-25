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

class Address
{
    #[SerializedName("firstname")]
    #[Type("string")]
    public ?string $firstName = null;

    #[SerializedName("lastname")]
    #[Type("string")]
    public ?string $lastName = null;

    #[SerializedName("street")]
    #[Type("string")]
    public ?string $street = null;

    #[SerializedName("housenumber")]
    #[Type("string")]
    public ?string $houseNumber = null;

    #[SerializedName("address2")]
    #[Type("string")]
    public ?string $address2 = null;

    #[SerializedName("postcode")]
    #[Type("string")]
    public ?string $postcode = null;

    #[SerializedName("city")]
    #[Type("string")]
    public ?string $city = null;

    #[SerializedName("country_code")]
    #[Type("string")]
    public ?string $countryCode = null;

    #[SerializedName("company")]
    #[Type("string")]
    public ?string $company = null;

    #[SerializedName("state")]
    #[Type("string")]
    public ?string $state = null;

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): Address
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): Address
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(?string $street): Address
    {
        $this->street = $street;
        return $this;
    }

    public function getHouseNumber(): ?string
    {
        return $this->houseNumber;
    }

    public function setHouseNumber(?string $houseNumber): Address
    {
        $this->houseNumber = $houseNumber;
        return $this;
    }

    public function getAddress2(): ?string
    {
        return $this->address2;
    }

    public function setAddress2(?string $address2): Address
    {
        $this->address2 = $address2;
        return $this;
    }

    public function getPostcode(): ?string
    {
        return $this->postcode;
    }

    public function setPostcode(?string $postcode): Address
    {
        $this->postcode = $postcode;
        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): Address
    {
        $this->city = $city;
        return $this;
    }

    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    public function setCountryCode(?string $countryCode): Address
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(?string $company): Address
    {
        $this->company = $company;
        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): Address
    {
        $this->state = $state;
        return $this;
    }
}
