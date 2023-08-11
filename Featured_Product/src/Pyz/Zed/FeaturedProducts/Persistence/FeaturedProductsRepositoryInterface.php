<?php
namespace Pyz\Zed\FeaturedProducts\Persistence;

use Generated\Shared\Transfer\ProductAbstractTransfer;
use Generated\Shared\Transfer\ProductCriteriaTransfer;
interface FeaturedProductsRepositoryInterface
{
    public function getProduct(ProductCriteriaTransfer $ProductCriteria): ?ProductAbstractTransfer;
}
?>