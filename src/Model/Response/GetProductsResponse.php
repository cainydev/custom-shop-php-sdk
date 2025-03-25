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

namespace Billbee\CustomShopApi\Model\Response;

use Billbee\CustomShopApi\Model\Pagination;
use Billbee\CustomShopApi\Model\Product;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class GetProductsResponse
{
    #[SerializedName("paging")]
    #[Type("Billbee\CustomShopApi\Model\Pagination")]
    protected Pagination $paging;

    #[SerializedName("products")]
    #[Type("array<Billbee\CustomShopApi\Model\Product>")]
    protected array $products = [];

    /**
     * @param Pagination $paging
     * @param Product[] $products
     */
    public function __construct(Pagination $paging, array $products)
    {
        $this->paging = $paging;
        $this->products = $products;
    }

    public function getPaging(): Pagination
    {
        return $this->paging;
    }

    /**
     * @return Product[]
     */
    public function getProducts(): array
    {
        return $this->products;
    }
}
