<?php

namespace Pyz\Zed\FeaturedProducts\Business;

use Generated\Shared\Transfer\ProductCriteriaTransfer;
use Generated\Shared\Transfer\ProductResponseTransfer;
use Generated\Shared\Transfer\ProductAbstractTransfer;

interface FeaturedProductsFacadeInterface
{
    
    public function getProduct(ProductCriteriaTransfer $productCriteria): ProductResponseTransfer;
}