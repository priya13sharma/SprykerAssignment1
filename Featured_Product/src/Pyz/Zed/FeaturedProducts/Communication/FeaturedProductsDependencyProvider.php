<?php

namespace Pyz\Zed\FeaturedProducts\Communication;

use Pyz\Zed\FeaturedProducts\Business\FeaturedProductsFacade;
use Pyz\Zed\FeaturedProducts\Business\FeaturedProductsFacadeInterface;
use Spryker\Zed\Kernel\Container;
use Spryker\Zed\Kernel\Communication\AbstractDependencyProvider;

class FeaturedProductsDependencyProvider extends AbstractDependencyProvider
{
    /**
     * @param \Spryker\Zed\Kernel\Container $container
     *
     * @return \Spryker\Zed\FeaturedProducts\Business\FeaturedProductsFacadeInterface
     */
    protected function provideBusinessLayerDependencies(Container $container): FeaturedProductsFacadeInterface
    {
        return new FeaturedProductsFacade();
    }
}
