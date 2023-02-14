# Shop search

The built-in search engine automatically indexes both content and products.

!!! caution

    You can use [all the supported search capabilities](search_engines.md#search-engine-comparison)
    of Solr with the shop.
    
    You can also run the shop with Elasticsearch search engine, but searching 
    for products is only available by redirecting users to the 
    [`/search` route](../../templating/urls_and_routes/urls_and_routes.md#search),
    and searching by product code is not available. 
    
    You can run the shop and use the Legacy search engine,
    but it only covers the most basic functionalities such as displaying the product catalog.
    
    Running the Legacy search engine disables product search,
    as well as other functionalities, such as unsupported sorting types in the catalog.

The search displays the results in different groups. A group can consist of products, videos, downloads, etc.

![Categories in search results](../img/search_categories.png "Categories in search results")

You can configure groups displayed in tabs such as products and content.
The products can be shown in a list or gallery view.

The user can use the back button to go back without leaving the search.
URLs are unique, so you can share a link to a search result.

The search uses Ajax to refresh the list.

Boosting can be defined in the configuration.

The search comes with an extension plugin system which enables indexing custom fields by Content Type.