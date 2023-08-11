<?php

namespace Pyz\Zed\FeaturedProducts\Communication\Controller;

use Generated\Shared\Transfer\ProductCriteriaTransfer;
use Generated\Shared\Transfer\ProductAbstractTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractController;

/**
 * @method \Pyz\Zed\FeaturedProducts\Business\FeaturedProductsFacadeInterface getFacade()
 */
class ProductsController extends AbstractController
{
    public function indexAction()
    {
        $productTransfer = new ProductAbstractTransfer();
        
        $ProductResponseTransfer = $this->getFacade()
            ->getProduct($productTransfer);
        
        
        
        return $this->viewResponse([
            'Product' => $productTransfer,
        ]);
    }
}