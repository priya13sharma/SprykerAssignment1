<?php

namespace Pyz\Yves\FeaturedProducts\Controller;

use Generated\Shared\Transfer\ProductCriteriaTransfer;
use SprykerShop\Yves\ShopApplication\Controller\AbstractController;

/**
 * @method \Pyz\Yves\FeaturedProducts\FeaturedProductsFactory getFactory()
 */
class ProductController extends AbstractController
{
    public function getAction()
    {
        $productCriteriaTransfer = new ProductCriteriaTransfer();
        $productCriteriaTransfer->setFeaturedproducts('Yes');
        $productResponseTransfer = $this->getFactory()
            ->getFeaturedProductsClient()
            ->getProduct($productCriteriaTransfer);
        
        return $this->view(
            ['FeaturedProducts' => $productResponseTransfer->getProduct()],
            [],
            '@HomePage/views/home/home.twig'
        );
    }
}