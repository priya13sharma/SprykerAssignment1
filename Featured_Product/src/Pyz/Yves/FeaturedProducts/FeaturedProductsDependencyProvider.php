<?php

namespace Pyz\Yves\FeaturedProducts;

use Spryker\Yves\Kernel\AbstractBundleDependencyProvider;
use Spryker\Yves\Kernel\Container;

class FeaturedProductsDependencyProvider extends AbstractBundleDependencyProvider
{
    public const CLIENT_FeaturedProducts = 'CLIENT_FeaturedProducts';
    
    public function provideDependencies(Container $container) : Container
    {
        $container = $this->addFeaturedProductsClient($container);
        
        return $container;
    }
    
    protected function addFeaturedProductsClient(Container $container) : Container
    {
        $container->set(static::CLIENT_FeaturedProducts, function (Container $container) {
            return $container->getLocator()->FeaturedProducts()->client();
        });
    
        return $container;
    }
}