\echo '*********************List all restaurant names*********************'
SELECT name FROM w4_restaurant;    

\echo '****************List restaurant names and addresses****************'
SELECT name, address FROM w4_restaurant;

\echo '************************List  all customers************************'
SELECT first_name || ' ' || last_name AS full_name FROM w4_customer;

\echo '**List  all menu item names and prices of a particular restaurant**'
-- write your query here

\echo '*View all orders of a particular customer - show the customer name*'
-- write your query here

\echo '************List  all orders of a particular restaurant************'
-- write your query here


