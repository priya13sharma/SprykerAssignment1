<?php

namespace Pyz\Client\FeaturedProducts;

use Spryker\Client\Kernel\AbstractDependencyProvider;
use Spryker\Client\Kernel\Container;

class FeaturedProductsDependencyProvider extends AbstractDependencyProvider
{
    public const CLIENT_ZED_REQUEST = 'CLIENT_ZED_REQUEST';
    
    public function provideServiceLayerDependencies(Container $container)
    {
        $container = $this->addZedRequestClient($container);
        
        return $container;
    }
    
    protected function addZedRequestClient(Container $container)
    {
        $container->set(static::CLIENT_ZED_REQUEST, function (Container $container) {
            return $container->getLocator()->zedRequest()->client();
        });
        
        return $container;
    }
}