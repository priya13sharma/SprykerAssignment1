<?php

namespace Pyz\Zed\FeaturedProducts\Persistence;

use Orm\Zed\FeaturedProducts\Persistence\SpyProductAbstractLocalizedAttributesQuery;
use Spryker\Zed\Kernel\Persistence\AbstractPersistenceFactory;

class FeaturedProductsPersistenceFactory extends AbstractPersistenceFactory
{
    public function createProductsAbstractLocalizedQuery(): SpyProductAbstractLocalizedAttributesQuery
    {
        return SpyProductAbstractLocalizedAttributesQuery::create();
    }
}