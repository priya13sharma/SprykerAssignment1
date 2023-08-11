<?php

namespace Pyz\Client\FeaturedProducts;

use Generated\Shared\Transfer\ProductCriteriaTransfer;
use Generated\Shared\Transfer\ProductResponseTransfer;
use Spryker\Client\Kernel\AbstractClient;

/**
 * @method \Pyz\Client\FeaturedProducts\FeaturedProductsFactory getFactory()
 */
class FeaturedProductsClient extends AbstractClient implements FeaturedProductsClientInterface
{
    public function getProduct(ProductCriteriaTransfer $productCriteria): ProductResponseTransfer
    {
        return $this->getFactory()
            ->createFeaturedProductsStub()
            ->getProduct($productCriteria);
    }
}