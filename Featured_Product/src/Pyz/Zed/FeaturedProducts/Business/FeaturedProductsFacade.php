<?php

namespace Pyz\Zed\FeaturedProducts\Business;

use Generated\Shared\Transfer\ProductCriteriaTransfer;
use Generated\Shared\Transfer\ProductResponseTransfer;
use Generated\Shared\Transfer\ProductAbstractTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \Pyz\Zed\FeaturedProducts\Business\FeaturedProductsBusinessFactory getFactory()
 */
class FeaturedProductsFacade extends AbstractFacade implements FeaturedProductsFacadeInterface
{
    
    public function getProduct(ProductCriteriaTransfer $productCriteria): ProductResponseTransfer
    {
        return $this->getFactory()
            ->createFeaturedProductsReader()
            ->getProduct($productCriteria);
    }
}