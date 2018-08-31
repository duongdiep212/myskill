<?php 

cơ chế API
1. Call API 
2. API prepare dât and return 

a. Defined result return by Interface in head of function : 

/**
* Find entities by criteria
* @param \Magento\Framework\Api\SearchCriteria $searchCriteria
* @return \Magestore\Webpos\Api\Data\Sales\OrderSearchResultInterface Order search result interface.
*/

public function abc (...){

}

b.


Mapping voi collection in di.xml 

<preference for="Magestore\Webpos\Api\Data\Sales\OrderSearchResultInterface" type="Magestore\Webpos\Model\ResourceModel\Sales\Order\Collection"/>

dữ liệu trả về là những hàm được định nghĩa trong Inferface 

interface OrderSearchResultInterface extends \Magento\Framework\Api\SearchResultsInterface
{
    /**
     * Get items.
     *
     * @return \Magestore\Webpos\Api\Data\Sales\OrderInterface[] Array of collection items.
     */
    public function getItems();

    /**
     * Set items.
     *
     * @param \Magestore\Webpos\Api\Data\Sales\OrderInterface[] $items
     * @return $this
     */
    public function setItems(array $items = null);
}

c. 
 
 trong     Magestore\Webpos\Api\Data\Sales\OrderInterface

     /**
     * Sets the Webpos order payments for the order.
     *
     * @param \Magestore\Webpos\Api\Data\Payment\OrderPaymentInterface[] $webposOrderPayments
     * @return $this
     */
    public function setWebposOrderPayments($webposOrderPayments);

    /**
     * Gets the Webpos order payments for the order.
     *
     * @return \Magestore\Webpos\Api\Data\Payment\OrderPaymentInterface[] Webpos staff name.
     */
    public function getWebposOrderPayments();
	
mapping :   <preference for="Magestore\Webpos\Api\Data\Sales\OrderInterface" type="Magestore\Webpos\Model\Sales\Order"/>
 
 trng Magestore\Webpos\Model\Sales\Order
 dinh nghia cac hàm cần trả về data 
 

   /**
     * Sets the Webpos order payments for the order.
     *
     * @param \Magestore\Webpos\Api\Data\Payment\OrderPaymentInterface[] $webposOrderPayments
     * @return $this
     */
    public function setWebposOrderPayments($webposOrderPayments)
    {
        return $this->setData(OrderInterface::WEBPOS_ORDER_PAYMENTS, $webposOrderPayments);
    }

    /**
     * Gets the Webpos order payments for the order.
     *
     * @return \Magestore\Webpos\Api\Data\Payment\OrderPaymentInterface[]|null Webpos staff name.
     */
    public function getWebposOrderPayments()
    {
        if ($this->getData(OrderInterface::WEBPOS_ORDER_PAYMENTS) == null) {
            $this->setData(
                OrderInterface::WEBPOS_ORDER_PAYMENTS,
                $this->_orderPaymentCollectionFactory->create()
                    ->addFieldToFilter('order_id', $this->getEntityId())->getItems()
            );
        }
        return $this->getData(OrderInterface::WEBPOS_ORDER_PAYMENTS);
    }

