<?php

namespace Pyz\Zed\FeaturedProducts\Communication\Controller;

use Spryker\Zed\Kernel\Communication\Controller\AbstractGatewayController;
use Generated\Shared\Transfer\ProductResponseTransfer;
use Generated\Shared\Transfer\ProductCriteriaTransfer;

/**
 * @method \Pyz\Zed\FeaturedProducts\Business\FeaturedProductsFacadeInterface getFacade()
 */

class GatewayController extends AbstractGatewayController
{
    public function getProductsAction(ProductCriteriaTransfer $productCriteria) : ProductResponseTransfer
    {
        return $this->getFacade()
            ->getProduct($productCriteria);
    }
}