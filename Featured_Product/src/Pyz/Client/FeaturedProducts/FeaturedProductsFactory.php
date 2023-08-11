<?php

namespace Pyz\Client\FeaturedProducts;

use Pyz\Client\FeaturedProducts\Stub\FeaturedProductsStub;
use Spryker\Client\ZedRequest\ZedRequestClientInterface;
use Spryker\Client\Kernel\AbstractFactory;

class FeaturedProductsFactory extends AbstractFactory
{
    public function createFeaturedProductsStub(): FeaturedProductsStub
    {
        return new FeaturedProductsStub(
            $this->getZedRequestClient()
        );
    }
    
    public function getZedRequestClient(): ZedRequestClientInterface
    {
        return $this->getProvidedDependency(FeaturedProductsDependencyProvider::CLIENT_ZED_REQUEST);
    }
}