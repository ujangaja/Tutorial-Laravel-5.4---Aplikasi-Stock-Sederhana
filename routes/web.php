<?php



Route::get('/', function () {
    return view('welcome');
});

Route::resource('products','ProductController');
Route::resource('purchase_orders','PurchaseOrderController');
Route::('purchase_orders.purchase_items','PurchaseOrder\PurchaseItemController');
Route::('sale_orders','SaleOrderController');
Route::resource('sale_orders.sale_items','SaleOrder\SaleItemController');
