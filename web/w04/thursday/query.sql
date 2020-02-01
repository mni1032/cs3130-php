\echo '*********************List all restaurant names*********************'
SELECT name FROM w4_restaurant;    

\echo '****************List restaurant names and addresses****************'
SELECT name, address FROM w4_restaurant;

\echo '************************List  all customers************************'
SELECT first_name || ' ' || last_name AS full_name FROM w4_customer;

\echo '**List  all menu item names and prices of a particular restaurant**'
SELECT name, price FROM w4_menu_item WHERE restaurant_id = 1;

\echo '*View all orders of a particular customer - show the customer name*'
SELECT o.id
,      c.first_name || ' ' || c.last_name AS customer_name 
FROM w4_order o
INNER JOIN w4_customer c ON o.customer_id = c.id
WHERE o.customer_id = 1;

\echo '************List  all orders of a particular restaurant************'
SELECT omi.order_id
,      mi.name
FROM w4_order_menu_items omi
INNER JOIN w4_menu_item mi ON omi.menu_item_id = mi.id
INNER JOIN w4_restaurant r ON mi.restaurant_id = r.id
WHERE restaurant_id = 1;


