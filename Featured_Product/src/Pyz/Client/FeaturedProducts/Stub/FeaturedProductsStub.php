<?php

namespace Pyz\Client\FeaturedProducts\Stub;

use Generated\Shared\Transfer\ProductCriteriaTransfer;
use Generated\Shared\Transfer\ProductResponseTransfer;
use Spryker\Client\ZedRequest\ZedRequestClientInterface;

class FeaturedProductsStub
{
    /**
     * @var \Spryker\Client\ZedRequest\ZedRequestClientInterface
     */
    protected $zedRequestClient;

    /**
     * @param \Spryker\Client\ZedRequest\ZedRequestClientInterface $zedRequestClient
     */
    public function __construct(ZedRequestClientInterface $zedRequestClient)
    {
        $this->zedRequestClient = $zedRequestClient;
    }

    public function getProduct(ProductCriteriaTransfer $productCriteria): ProductResponseTransfer
    {
        /** @var \Generated\Shared\Transfer\ProductResponseTransfer productResponseTransfer */
        $productResponseTransfer = $this->zedRequestClient->call('/featured-products/gateway/get-Product', $productCriteria); 

        return $productResponseTransfer;
    }
}