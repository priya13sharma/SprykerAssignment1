<?php

namespace Pyz\Client\FeaturedProducts;

use Generated\Shared\Transfer\ProductCriteriaTransfer;
use Generated\Shared\Transfer\ProductResponseTransfer;

interface FeaturedProductsClientInterface
{
    public function getProduct(ProductCriteriaTransfer $productCriteria): ProductResponseTransfer;
}