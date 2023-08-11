<?php
namespace Pyz\Zed\FeaturedProducts\Persistence;

use Generated\Shared\Transfer\ProductCriteriaTransfer;
use Generated\Shared\Transfer\ProductAbstractTransfer;
use Spryker\Zed\Kernel\Persistence\AbstractRepository;
/**
 * @method \Pyz\Zed\FeaturedProducts\Persistence\FeaturedProductsPersistenceFactory getFactory()
 */
class FeaturedProductsRepository extends AbstractRepository implements FeaturedProductsRepositoryInterface
    {
    public function getProduct(ProductCriteriaTransfer $productCriteria): ?ProductAbstractTransfer
    {
        $productEntity = $this->getFactory()
            ->createProductsAbstractLocalizedQuery()
            ->where('JSON_EXTACT(attributes, \'$.featuredproducts\')=?', 'Yes',\PDO::PARAM_STR)
            ->find();
        
        
        
        $productTransfer = new ProductAbstractTransfer();
        return $productTransfer->fromArray($productEntity->toArray(), true);
    }
}
?>