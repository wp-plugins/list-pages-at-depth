=== List Pages at Depth ===
Contributors: Ben Huson
Donate link: http://www.benhuson.co.uk/wordpress-plugins/list-pages-at-depth/
Tags: wp_list_pages, navigation, page parents, breadcrumbs, cms
Requires at least: 2.8
Tested up to: 2.8.6
Stable tag: 1.0

A more powerful version of wp_list_pages() which allows you to specify a start depth - useful for displaying secondary and tertiary navigation seperately from your primary navigation.


== Description ==
A more powerful version of wp_list_pages() which allows you to specify a start depth.

This means you can easily display secondary and tertiary navigation seperately from the primary navigation on your site.

The list_pages_at_depth function accepts all the same arguments as wp_list_pages, but has an additional argument called 'startdepth'. Set this to be 0 to display primary navigation, 1 for secondary navigation etc. If you wanted to display secondary navigation with indented tertiary navigation you can use this in conjunction with the depth argument - simply set startdepth to 1 and depth to 2.

<?php list_pages_at_depth(array('startdepth' => 1,'depth' => 1)); ?>


== Changelog ==

= 1.0 =

* First Release