# Open Graph &amp; Twitter Card Support for WordPress
Automatically adds dynamic [Open Graph](http://ogp.me) &amp; [Twitter Card](https://dev.twitter.com/cards/overview) support to WordPress.

## How to Use
Copy and paste the code into your themes `functions.php` file, and edit the example values under '**User Variables**'. If any of the WordPress posts or pages don't have the necessary information to automatically generate the tags, the default variables will be used. For more information about these values, see the **'[Set Default Variables](https://github.com/mtthwbckmn/wordpress-meta-support#set-default-variables)'** section below.
>##### Note: If you have already initialized PHP in the `functions.php` file, do not include the `<?php` or `?>` tags.

## Set Default Variables
* `defTitle` - **Title** - The title of your site as it should appear within the graph.
* `defLink` - **Site Link** - The canonical URL of your site that will be used in the graph.
* `defDesc` - **Description** - A one to two sentence description of your site.
* `defImg` - **Image** - An image URL which should represent your site. Must begin with `http://` or `https://`.
* `defWidth` - **Image Width** - In `pixels`, the width of the default image defined above. Only enter numbers.
* `defHeight` - **Image Height** - In `pixels`, the height of the default image defined above. Only enter numbers.
* `siteName` - **Site Name** - The name which should be displayed for the overall site.
* `twitter` - **Twitter Username** - The Twitter username associated with the site. Do not include the `@` prefix.
>##### Note: The only time default values are used is when we're not able to automatically generate the necessary tags.

----

### Upcoming Features
* Add optional `fb_id` to the [Open Graph](http://ogp.me) code.
* Pull in **link** from non-singular pages (archives, categories, etc), instead of falling back on default value.
* Pull in **title** from `<title>` for non-singular pages (archives, categories, etc), instead of falling back on default value.
* Create version without comments, and minimized version.
* Add option to use as a WordPress plugin.
>##### Development Note: Features are added in order of priority. The top of the list is more highly prioritized than the bottom. Please submit feature requests & bug reports using GitHub [here](https://github.com/mtthwbckmn/wordpress-meta-support/issues).

### Authors
* **[Matthew Beckman](https://matthewbeckman.co)** - [mtthwbckmn](https://twitter.com/mtthwbckmn)

### Change Log
* **1.0** - **August 23, 2017** - First release