<?php

namespace Pyz\Zed\FeaturedProducts\Business\Reader;

use Generated\Shared\Transfer\ProductCriteriaTransfer;
use Generated\Shared\Transfer\ProductResponseTransfer;
use Pyz\Zed\FeaturedProducts\Persistence\FeaturedProductsRepositoryInterface;

class ProductsReader
    {
        /**
            * @var \Pyz\Zed\FeaturedProducts\Persistence\FeaturedProductsRepositoryInterface
        */
        protected $featuredProductsRepository;
        
        public function __construct(FeaturedProductsRepositoryInterface $featuredProductsRepository)
        {
            $this->featuredProductsRepository = $FeaturedProductsRepository;
        }
        
        public function getProduct(ProductCriteriaTransfer $productCriteria): ProductResponseTransfer
        {
            $productTransfer = $this->FeaturedProductsRepository
                ->getProduct($productCriteria);
            
            $productResponseTransfer = new ProductResponseTransfer();
            $productResponseTransfer
                ->setIsSuccessful(false);
            
            if ($productTransfer) {
                $productResponseTransfer
                    ->setProduct($productTransfer)
                    ->setIsSuccessful(true);
        }
        
        return $productResponseTransfer;
        
    }
}