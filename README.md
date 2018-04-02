# A RESTful Demo

A demo for how to use the RESTful programming style.

## What it Does

* Covers `GET`, `POST`, `PUT`, `DELETE`.
    * `GET`: retrieves data.
    * `POST`: creates data.
    * `PUT`: updates data.
    * `DELETE`: removes data.
* To use the CRUD functions, you would not access the system through a browser (like the example shows).
* All of the functionality is provided through `.htaccess` rules.

## Try the Framework

Index Page: http://git.avidwebco.com/restful-demo/

Customer Data (All): http://git.avidwebco.com/restful-demo/customer

Customer Data (Specific): http://git.avidwebco.com/restful-demo/customer/12345

Product Data (All): http://git.avidwebco.com/restful-demo/product

Product Data (Specific): http://git.avidwebco.com/restful-demo/product/12345

## What You See

Upon loading the `Index Page` - you will be greeted with a page alerting you that no data has been found. This is due to there not being a request in the URL.

By loading either of the `Customer Data` pages, you will see information that depends on what is being requested in the URL. If you request only `customer`: you would see a list of customers (if there were any). If you request a specific customer, like `12345`, you would receive the data about that customer (if there was any).

By loading either of the `Product Data` pages, you will see information that depends on what is being requested in the URL. If you request only `product`: you will see a list of all of the products in the database (if there were products). If you request a specific product, like `12345`, you will receive attributive data about that product (if any products existed).
