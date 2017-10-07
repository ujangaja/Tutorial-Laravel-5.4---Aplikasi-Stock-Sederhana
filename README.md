# Tutorial-Laravel-5.4---Aplikasi-Stock-Sederhana
Tutorial Laravel 5.4 - Aplikasi Stock Sederhana


Membuat Model
-
Buat model Produk, PurchaseOrder, PurchaseItem, 
SaleOrder, SaleItem*
php artisan make:model Product
php artisan make:model PurchaseOrder
php artisan make:model PurchaseItem
php artisan make:model SaleOrder
php artisan make:model SaleItem


-
Buat migration, membuat di database**
php artisan make:migration --create=products create_products_table
php artisan make:migration --create=purchase_orders create_purchase_orders_table
php artisan make:migration --create=purchase_items create_purchase_items_table
php artisan make:migration --create=sale_orders create_sale_orders_table
php artisan make:migration --create=sale_items create_sale_items_table