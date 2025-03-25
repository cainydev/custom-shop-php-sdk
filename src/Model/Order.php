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

class Order
{
    #[SerializedName("order_id")]
    #[Type("string")]
    public ?string $orderId = null;

    #[SerializedName("order_number")]
    #[Type("string")]
    public ?string $orderNumber = null;

    #[SerializedName("currency_code")]
    #[Type("string")]
    public ?string $currencyCode = null;

    #[SerializedName("delivery_source_country_code")]
    #[Type("string")]
    public ?string $deliverySourceCountryCode = null;

    #[SerializedName("nick_name")]
    #[Type("string")]
    public ?string $nickName = null;

    #[SerializedName("ship_cost")]
    #[Type("float")]
    public ?float $shipCost = null;

    #[SerializedName("invoice_address")]
    #[Type("Billbee\CustomShopApi\Model\Address")]
    public ?Address $invoiceAddress = null;

    #[SerializedName("delivery_address")]
    #[Type("Billbee\CustomShopApi\Model\Address")]
    public ?Address $deliveryAddress = null;

    #[SerializedName("order_date")]
    #[Type("DateTime")]
    public ?DateTimeInterface $orderDate = null;

    #[SerializedName("email")]
    #[Type("string")]
    public ?string $email = null;

    #[SerializedName("phone1")]
    #[Type("string")]
    public ?string $phone1 = null;

    #[SerializedName("pay_date")]
    #[Type("DateTime")]
    public ?DateTimeInterface $payDate = null;

    #[SerializedName("ship_date")]
    #[Type("DateTime")]
    public ?DateTimeInterface $shipDate = null;

    #[SerializedName("payment_method")]
    #[Type("int")]
    public ?int $paymentMethod = null;

    #[SerializedName("order_status_id")]
    #[Type("int")]
    public ?int $statusId = null;

    #[SerializedName("order_products")]
    #[Type("array<Billbee\CustomShopApi\Model\OrderProduct>")]
    public ?array $items = null;

    #[SerializedName("order_history")]
    #[Type("array<Billbee\CustomShopApi\Model\OrderComment>")]
    public ?array $comments = null;

    #[SerializedName("seller_comment")]
    #[Type("string")]
    public ?string $sellerComment = null;

    #[SerializedName("shippingprofile_id")]
    #[Type("string")]
    public ?string $shippingProfileId = null;

    #[SerializedName("vat_id")]
    #[Type("string")]
    public ?string $vatId = null;

    #[SerializedName("payment_transaction_id")]
    #[Type("string")]
    public ?string $paymentTransactionId = null;

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    public function setOrderId(?string $orderId): Order
    {
        $this->orderId = $orderId;
        return $this;
    }

    public function getOrderNumber(): ?string
    {
        return $this->orderNumber;
    }

    public function setOrderNumber(?string $orderNumber): Order
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }

    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    public function setCurrencyCode(?string $currencyCode): Order
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    public function getDeliverySourceCountryCode(): ?string
    {
        return $this->deliverySourceCountryCode;
    }

    public function setDeliverySourceCountryCode(?string $deliverySourceCountryCode): Order
    {
        $this->deliverySourceCountryCode = $deliverySourceCountryCode;
        return $this;
    }

    public function getNickName(): ?string
    {
        return $this->nickName;
    }

    public function setNickName(?string $nickName): Order
    {
        $this->nickName = $nickName;
        return $this;
    }

    public function getShipCost(): ?float
    {
        return $this->shipCost;
    }

    public function setShipCost(?float $shipCost): Order
    {
        $this->shipCost = $shipCost;
        return $this;
    }

    public function getInvoiceAddress(): ?Address
    {
        return $this->invoiceAddress;
    }

    public function setInvoiceAddress(?Address $invoiceAddress): Order
    {
        $this->invoiceAddress = $invoiceAddress;
        return $this;
    }

    public function getDeliveryAddress(): ?Address
    {
        return $this->deliveryAddress;
    }

    public function setDeliveryAddress(?Address $deliveryAddress): Order
    {
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }

    public function getOrderDate(): ?DateTimeInterface
    {
        return $this->orderDate;
    }

    public function setOrderDate(?DateTimeInterface $orderDate): Order
    {
        $this->orderDate = $orderDate;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): Order
    {
        $this->email = $email;
        return $this;
    }

    public function getPhone1(): ?string
    {
        return $this->phone1;
    }

    public function setPhone1(?string $phone1): Order
    {
        $this->phone1 = $phone1;
        return $this;
    }

    public function getPayDate(): ?DateTimeInterface
    {
        return $this->payDate;
    }

    public function setPayDate(?DateTimeInterface $payDate): Order
    {
        $this->payDate = $payDate;
        return $this;
    }

    public function getShipDate(): ?DateTimeInterface
    {
        return $this->shipDate;
    }

    public function setShipDate(?DateTimeInterface $shipDate): Order
    {
        $this->shipDate = $shipDate;
        return $this;
    }

    public function getPaymentMethod(): ?int
    {
        return $this->paymentMethod;
    }

    public function setPaymentMethod(?int $paymentMethod): Order
    {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }

    public function getStatusId(): ?int
    {
        return $this->statusId;
    }

    public function setStatusId(?int $statusId): Order
    {
        $this->statusId = $statusId;
        return $this;
    }

    /**
     * @return ?OrderProduct[]
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * @param ?OrderProduct[] $items
     * @return Order
     */
    public function setItems(?array $items): Order
    {
        $this->items = $items;
        return $this;
    }

    /**
     * @return ?OrderComment[]
     */
    public function getComments(): ?array
    {
        return $this->comments;
    }

    /**
     * @param ?OrderComment[] $comments
     * @return Order
     */
    public function setComments(?array $comments): Order
    {
        $this->comments = $comments;
        return $this;
    }

    public function getSellerComment(): ?string
    {
        return $this->sellerComment;
    }

    public function setSellerComment(?string $sellerComment): Order
    {
        $this->sellerComment = $sellerComment;
        return $this;
    }

    public function getShippingProfileId(): ?string
    {
        return $this->shippingProfileId;
    }

    public function setShippingProfileId(?string $shippingProfileId): Order
    {
        $this->shippingProfileId = $shippingProfileId;
        return $this;
    }

    public function getVatId(): ?string
    {
        return $this->vatId;
    }

    public function setVatId(?string $vatId): Order
    {
        $this->vatId = $vatId;
        return $this;
    }

    public function getPaymentTransactionId(): ?string
    {
        return $this->paymentTransactionId;
    }

    public function setPaymentTransactionId(?string $paymentTransactionId): Order
    {
        $this->paymentTransactionId = $paymentTransactionId;
        return $this;
    }
}
