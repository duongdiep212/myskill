<?php 
 1. 
 in : /app/code/Magestore/Webpos/etc/webapi.xml 
 changed : 
     <route url="/V1/webpos/stockItems" method="PUT">
        <service class="Magestore\Webpos\Api\Inventory\StockItemRepositoryInterface" method="massUpdateStockItems"/>
        <resources>
            <resource ref="Magestore_Webpos::webpos" />
            <resource ref= "Magestore_Webpos::manage_inventory" />
        </resources>
    </route>
to :
	
	<route url="/V1/webpos/stockItems" method="POST">
        <service class="Magestore\Webpos\Api\Inventory\StockItemRepositoryInterface" method="massUpdateStockItems"/>
        <resources>
            <resource ref="Magestore_Webpos::webpos" />
            <resource ref= "Magestore_Webpos::manage_inventory" />
        </resources>
    </route>
	
	
2.
in : /app/code/Magestore/Webpos/view/frontend/web/js/model/resource-model/magento-rest/abstract.js
changed : 
					this.callRestApi(
                        this.massUpdateApiUrl,
                        'put',
                        {},
                        postData,
                        deferred,
                        this.interfaceName + '_afterMassUpdate'
                    );
					
to :
					
					this.callRestApi(
                        this.massUpdateApiUrl,
                        'post',
                        {},
                        postData,
                        deferred,
                        this.interfaceName + '_afterMassUpdate'
                    );
					
3. 
in : app/code/Magestore/InventorySuccess/Observer/Webpos/Inventory/Stock/Item/WebposInventoryStockitemUpdate.php
changed :  
        WarehouseProductInterface::AVAILABLE_QTY => (0 + $changeQty)
to : 
        WarehouseProductInterface::AVAILABLE_QTY => (0 - $changeQty)