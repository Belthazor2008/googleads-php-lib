<?php

namespace Google\AdsApi\Dfp\v201511;

class ProductPackageItemBaseRate extends \Google\AdsApi\Dfp\v201511\BaseRate
{

    /**
     * @var int $productPackageItemId
     */
    protected $productPackageItemId = null;

    /**
     * @var \Google\AdsApi\Dfp\v201511\Money $rate
     */
    protected $rate = null;

    /**
     * @param int $rateCardId
     * @param int $id
     * @param int $productPackageItemId
     * @param \Google\AdsApi\Dfp\v201511\Money $rate
     */
    public function __construct($rateCardId = null, $id = null, $productPackageItemId = null, $rate = null)
    {
      parent::__construct($rateCardId, $id);
      $this->productPackageItemId = $productPackageItemId;
      $this->rate = $rate;
    }

    /**
     * @return int
     */
    public function getProductPackageItemId()
    {
      return $this->productPackageItemId;
    }

    /**
     * @param int $productPackageItemId
     * @return \Google\AdsApi\Dfp\v201511\ProductPackageItemBaseRate
     */
    public function setProductPackageItemId($productPackageItemId)
    {
      $this->productPackageItemId = $productPackageItemId;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201511\Money
     */
    public function getRate()
    {
      return $this->rate;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201511\Money $rate
     * @return \Google\AdsApi\Dfp\v201511\ProductPackageItemBaseRate
     */
    public function setRate($rate)
    {
      $this->rate = $rate;
      return $this;
    }

}