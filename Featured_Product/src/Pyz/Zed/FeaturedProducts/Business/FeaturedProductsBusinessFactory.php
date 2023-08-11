<?php

namespace Pyz\Zed\FeaturedProducts\Business;

use Pyz\Zed\FeaturedProducts\Business\Reader\ProductsReader;

use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

/**
 * @method \Pyz\Zed\FeaturedProducts\Persistence\FeaturedProductsEntityManagerInterface getEntityManager()
 * @method \Pyz\Zed\FeaturedProducts\Persistence\FeaturedProductsRepositoryInterface getRepository()
 */

class FeaturedProductsBusinessFactory extends AbstractBusinessFactory
{
    
    public function createFeaturedProductsReader(): FeaturedProductsReader
    {
        return new ProductsReader(
            $this->getRepository()
        );
    }

}