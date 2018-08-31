<?php 
 $coreResource = Mage::getSingleton('core/resource');
        $coreResource->getConnection('core_write')->query("
		SET FOREIGN_KEY_CHECKS = 0;
			DROP TABLE  IF EXISTS  {$coreResource->getTableName('webpos_xreport')};
			DROP TABLE  IF EXISTS   {$coreResource->getTableName('webpos_user_location')};
			DROP TABLE  IF EXISTS   {$coreResource->getTableName('webpos_user')};
			DROP TABLE  IF EXISTS   {$coreResource->getTableName('webpos_transaction')};
			DROP TABLE  IF EXISTS   {$coreResource->getTableName('webpos_till')};
			DROP TABLE  IF EXISTS   {$coreResource->getTableName('webpos_survey')};
			DROP TABLE  IF EXISTS   {$coreResource->getTableName('webpos_role')};
			DROP TABLE  IF EXISTS   {$coreResource->getTableName('webpos_products')};
			DROP TABLE  IF EXISTS   {$coreResource->getTableName('webpos_order')};
			DROP TABLE  IF EXISTS   {$coreResource->getTableName('webpos_admin')}; 
		");

		$cr = Mage::getSingleton('core/resource');		
		     
		$check= "show tables;".$cr->getTableName('core_resource')." ";
    
		$resultcheck = $cr->getConnection('core_write')->fetchAll($check);
        zend_debug::dump($resultcheck);die;
		
		

public function remove(){
    $coreResource = Mage::getSingleton('core/resource');
        $coreResource->getConnection('core_write')->query("
         SET FOREIGN_KEY_CHECKS = 0;
        DROP TABLE  IF EXISTS  {$coreResource->getTableName('erp_inventory_adjuststock')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_adjuststock_product')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_barcode')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_barcode_action_log')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_barcode_attribute')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_barcode_attribute_type')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_barcode_shipment')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_barcode_template')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_checkupdate')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_dashboard_item')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_dashboard_tab')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_delivery')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_delivery_warehouse')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_draft_purchase_order')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_draft_purchase_order_product')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_dropship')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_dropship_product')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_install')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_notification_log')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_notification_product')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_outofstock_tracking')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_payment_term')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_payment_term_history')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_payment_term_history_content')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_physicalstocktaking')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_physicalstocktaking_product')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_products')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_purchase_order')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_purchase_order_history')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_purchase_order_history_content')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_purchase_order_product')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_purchase_order_product_warehouse')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_receipt_log')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_receipt_log_product')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_report_type')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_returned_order')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_returned_order_product')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_return_product_warehouse')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_send_email_log')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_shipping_method')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_shipping_method_history')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_shipping_method_history_content')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_supplier')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_supplier_history')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_supplier_history_content')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_supplier_product')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_supplier_shipment')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_warehouse')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_warehouse_history')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_warehouse_history_content')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_warehouse_order')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_warehouse_permission')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_warehouse_product')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_warehouse_refund')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_warehouse_requeststock')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_warehouse_requeststock_product')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_warehouse_sendstock')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_warehouse_sendstock_product')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_warehouse_shipment')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_warehouse_transaction')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_warehouse_transaction_product')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_warehouse_webpos_user')};
		DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_fulfillment_log')};
		DROP TABLE  IF EXISTS   {$coreResource->getTableName('erp_inventory_fulfillment_package')};
    ");
    $coreResource->getConnection('core_write')->query("
        DELETE FROM {$coreResource->getTableName('core_resource')} WHERE code='inventoryplus_setup'; 
        DELETE FROM {$coreResource->getTableName('core_resource')} WHERE code='inventorybarcode_setup'; 
        DELETE FROM {$coreResource->getTableName('core_resource')} WHERE code='inventorydashboard_setup'; 
        DELETE FROM {$coreResource->getTableName('core_resource')} WHERE code='inventorydropship_setup'; 
        DELETE FROM {$coreResource->getTableName('core_resource')} WHERE code='inventorylowstock_setup'; 
        DELETE FROM {$coreResource->getTableName('core_resource')} WHERE code='inventorypurchasing_setup'; 
        DELETE FROM {$coreResource->getTableName('core_resource')} WHERE code='inventoryphysicalstocktaking_setup'; 
        DELETE FROM {$coreResource->getTableName('core_resource')} WHERE code='inventoryreports_setup'; 
        DELETE FROM {$coreResource->getTableName('core_resource')} WHERE code='inventoryshipment_setup'; 
        DELETE FROM {$coreResource->getTableName('core_resource')} WHERE code='inventorysupplyneeds_setup'; 
        DELETE FROM {$coreResource->getTableName('core_resource')} WHERE code='inventorywarehouse_setup'; 
        DELETE FROM {$coreResource->getTableName('core_resource')} WHERE code='inventorywebpos_setup'; 
        DELETE FROM {$coreResource->getTableName('core_resource')} WHERE code='inventoryfulfillment_setup'; 
    ");
echo "Success!";die();
          
}



public function removeSuccess(){
        $coreResource = Mage::getSingleton('core/resource');
        $coreResource->getConnection('core_write')->query("
        SET FOREIGN_KEY_CHECKS = 0;
        DROP TABLE  IF EXISTS  {$coreResource->getTableName('os_adjuststock')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('os_adjuststock_product')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('os_barcode')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('os_barcode_template')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('os_debug_pending_orders_items')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('os_increment_id')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('os_installation')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('os_lowstock_notification')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('os_lowstock_notification_product')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('os_lowstock_notification_rule')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('os_lowstock_notification_rule_product')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('os_permission')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('os_purchase_order')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('os_purchase_order_code')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('os_purchase_order_invoice')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('os_purchase_order_invoice_item')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('os_purchase_order_invoice_payment')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('os_purchase_order_invoice_refund')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('os_purchase_order_item')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('os_purchase_order_item_received')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('os_purchase_order_item_returned')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('os_purchase_order_item_transferred')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('os_report_cog')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('os_report_editcolumns')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('os_report_historics')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('os_salesreport_index')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('os_salesreport_report')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('os_stocktaking')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('os_stocktaking_product')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('os_stock_movement')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('os_supplier')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('os_supplier_pricelist')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('os_supplier_product')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('os_transferstock')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('os_transferstock_activity')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('os_transferstock_activity_product')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('os_transferstock_product')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('os_warehouse')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('os_warehouse_creditmemo_item')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('os_warehouse_location')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('os_warehouse_order_item')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('os_warehouse_product')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('os_warehouse_shipment_item')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('os_warehouse_storeCacher')};
        DROP TABLE  IF EXISTS   {$coreResource->getTableName('os_barcode_created_history')};	
	");
	
    $coreResource->getConnection('core_write')->query("
        DELETE FROM {$coreResource->getTableName('core_resource')} WHERE code='barcodesuccess_setup'; 
        DELETE FROM {$coreResource->getTableName('core_resource')} WHERE code='coresuccess_setup'; 
        DELETE FROM {$coreResource->getTableName('core_resource')} WHERE code='debugsuccess_setup'; 
        DELETE FROM {$coreResource->getTableName('core_resource')} WHERE code='inventorysuccess_setup'; 
        DELETE FROM {$coreResource->getTableName('core_resource')} WHERE code='purchaseordersuccess_setup'; 
        DELETE FROM {$coreResource->getTableName('core_resource')} WHERE code='reportsuccess_setup'; 
        DELETE FROM {$coreResource->getTableName('core_resource')} WHERE code='suppliersuccess_setup'; 
		DELETE FROM {$coreResource->getTableName('cataloginventory_stock_item')} WHERE stock_id != 1; 
	
    ");
     echo "Success!";die();         
}


