# Include-Both-Posts-and-Pages-in-Search-Results-on-Wordpress

The function tutebucket_search_filter($query) is a custom function that modifies the query used by WordPress when performing a search. Here’s a breakdown of what each part of the code does:

The function tutebucket_search _filter is defined with $query as its parameter, which represents the WordPress query object.
The code checks if the current query is a search query with $query->is_search. This is crucial because the modifications should only affect search queries and not other types of queries like retrieving posts for the homepage or archives.
If the condition is true, meaning it is a search query, the function modifies the query using $query->set(‘post_type’, array(‘post’,’page’));. This line instructs WordPress to look for both posts and pages, whereas the default behavior is typically to only search posts.
After modifying the query, it is returned with return $query;, ensuring that the modified query is used for the search.

[Read more]([https://website-name.com](https://tutebucket.com/optimizing-wordpress-search/))
