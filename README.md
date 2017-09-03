[![GitHub release](https://img.shields.io/github/release/mtthwbckmn/wordpress-meta-support.svg?style=flat-square)](https://github.com/mtthwbckmn/wordpress-meta-support/releases) [![Maintenance](https://img.shields.io/maintenance/yes/2017.svg?style=flat-square)](https://github.com/mtthwbckmn/wordpress-meta-support) [![label](https://img.shields.io/github/issues/mtthwbckmn/wordpress-meta-support.svg?style=flat-square)](https://github.com/mtthwbckmn/wordpress-meta-support/issues) [![GitHub closed issues](https://img.shields.io/github/issues-closed/mtthwbckmn/wordpress-meta-support.svg?style=flat-square)](https://github.com/mtthwbckmn/wordpress-meta-support/issues?q=is%3Aissue+is%3Aclosed)
# Open Graph &amp; Twitter Card Support for WordPress
Automatically add dynamic [Open Graph](http://ogp.me) &amp; [Twitter Card](https://dev.twitter.com/cards/overview) support to your WordPress site. Also supports [Facebook Insights](https://developers.facebook.com/docs/sharing/referral-insights), with an optional `fb:app_id` tag.

## How to Use
Copy and paste the code into your themes `functions.php` file, then edit the example values under '**User Defaults**'. If any of the WordPress posts or pages don't have the necessary information to automatically generate the tags, the default variables will be used. For more information about these values, see the **'[Set Default Variables](https://github.com/mtthwbckmn/wordpress-meta-support#set-default-variables)'** section below.
>##### Note: If you have already initialized PHP in your themes `functions.php` file, do not include the `<?php` or `?>` tags when pasting the code.

## Set Default Variables
* `defTitle` - **Title** - The title of your site as it should appear within the graph.
* `defDesc` - **Description** - A one to two sentence description of your site.
* `defImg` - **Image** - An image URL which should represent your site. Must begin with `http://` or `https://`.
* `defWidth` - **Image Width** - In `pixels`, the width of the default image defined above. Only enter numbers.
* `defHeight` - **Image Height** - In `pixels`, the height of the default image defined above. Only enter numbers.
* `twitter` - **Twitter Username** - The Twitter username associated with the site. Do not include the `@` prefix.
* `fbAppId` - **Facebook App ID** - The app ID from your Facebook page. Enables Facebook Analytics.
>##### Note: The only time the default values are used, is when the code is not able to automatically generate the necessary tags. The default `defLink` and `siteName` variables were removed in the version 1.1 release.

## Supported Websites
The following sites are fully supported for sharing:
* **Facebook** - [Documentation](https://developers.facebook.com/docs/sharing/opengraph) & [Validator](https://developers.facebook.com/tools/debug/)
* **Twitter** - [Card Documentation](https://dev.twitter.com/cards/overview) & [Validator](https://cards-dev.twitter.com/validator)
* **LinkedIn** - [Share Documentation](https://developer.linkedin.com/docs/share-on-linkedin)
* **Google Plus**<sup>[1]</sup> - [Snippet Documentation](https://developers.google.com/+/web/snippet/)
* **Pinterest**<sup>[2]</sup> - [Rich Pin Documentation](https://developers.pinterest.com/docs/rich-pins/overview/) & [Validator](https://developers.pinterest.com/tools/url-debugger/)
>##### <sup>[1]</sup> Google Plus looks for schema.org microdata first, but falls-back on Open Graph. <sup>[2]</sup> Pinterest requires you to validate one of your pages in order to activate Rich Pins for your site.

----

### Upcoming Features
* Fix search & archive/category URL from grabbing first post.
* Improve logic to run faster.
* Create version without comments, and minimized version.
* Add option to use as a WordPress plugin.
>##### Development Note: Features are added in order of priority. The top of the list is more highly prioritized than the bottom. Please submit feature requests & bug reports using GitHub [here](https://github.com/mtthwbckmn/wordpress-meta-support/issues).

### Change Log
* **1.2** - **September 3, 2017** - Renamed `generator.php` to `functions.php` to avoid confusion. Changed from MIT License to GPLv3. Added `snippets` section. Removed code of conduct from repository. Changed some comment wording. Added basic WordPress head snippet. Added WordPress functions snippet. Added supported websites to documentation. Added line breaks after meta tags. Change type to *website* on homepage and singular pages. Grab title from singular pages instead of depending on default. Set archive page to use default description and category title. 
* **1.1** - **August 25, 2017** - Removed the user variable `defLink`, and replaced with an automatically generated URL for non-singular pages. Removed the user variable `siteName`, and replaced with the site name defined in WordPress' settings. Added optional `fb:app_id` property for Facebook. Changed default `type` to website when on non-singular pages. Still defaults to article when on singular pages.
* **1.0** - **August 23, 2017** - First release.

### Author
* **[Matthew Beckman](https://matthewbeckman.co)** - [mtthwbckmn](https://twitter.com/mtthwbckmn)