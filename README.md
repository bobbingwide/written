# Written 
![screenshot](screenshot.png)
* Contributors: bobbingwide
* Donate link: https://www.oik-plugins.com/oik/oik-donate/
* Tags: blocks, FSE, Gutenberg, full-site-editing
* Requires at least: 5.5.1
* Tested up to: 6.4.1
* Version: 0.3.1
* License: GPLv2 or later
* License URI: http://www.gnu.org/licenses/gpl-2.0.html

Written theme - Full Site Editing theme replacing genesis-hm

## Description 
This theme implements a Full Site Editing (FSE) replacement of the Genesis-hm theme that was used on [herbmiller.me](https://herbmiller.me)

Requirements:
1. Implement Full Site Editing.
2. Similar look and feel as the Genesis-hm theme.
3. Implement on herbmiller.me when stable.

Contents:

*  templates
*  template parts

The `templates` are:

* 404.html
* index.html
* no-sidebar.html
* screenshot.html
* shortcode_unautop.html
* singular.html


* See the template visualization: https://developer.wordpress.org/files/2014/10/Screenshot-2019-01-23-00.20.04.png

The `parts` are:

* 404-not-found
* clone
* content-sidebar
* footer
* footer-widgets
* header
* metadates
* metadates-issue-33345
* query-sidebar
* query-sidebar-short
* sidebar
* sidebar-short
* social-links

## Installation 

* Either install Gutenberg 11.0.0 or higher or install and build the latest Gutenberg source.
* Activate Gutenberg.

* Install and activate the Written theme. Full Site Editing will be enabled automatically.
* For some of the templates and template parts to work properly you will need to install and activate the pre-requisite plugins.

* Pre-requisite plugins: see also Notes

* [oik](https://wordpress.org/plugins/oik/)
* [oik-fields v1.52.0](https://github.com/bobbingwide/oik-fields)
* [sb-breadcrumbs-block](https://github.com/bobbingwide/sb-breadcrumbs-block)
* [Yoast SEO](https://wordpress.org/plugins/wordpress-seo/) - for breadcrumbs logic
* [SB Post Edit block](https://github.com/bobbingwide/sb-post-edit-block)
* [oik-blocks v0.6.0](https://github.com/bobbingwide/oik-blocks)



## Change Log 
# 0.3.1 
* Changed: Fluid typography? #18
* Added:  Add some print styles
* Fixed: Don't trailingslashit( null ) #20
* Tested: With WordPress 6.4.1
* Tested: With Gutenberg 17.1.4
* Tested: With PHP 8.1 and PHP 8.2

# 0.3.0 
* Changed: Add WP and oik-unloader blocks to footer
* Changed: more custom CSS changes
* Fixed: Avoid Warnings with Gutenberg 13.3.0 #17
* Changed: Style latest posts and comments similarly #10
* Changed: Improve widget alignment. Reintroduce stripes #10
* Changed: Add settings.appearanceTools: true #14
* Changed: Ensure we load separate core block assets. Add active-plugins block to footer #16
* Changed: Override navigation-submenu using same logic as navigation-link #14
* Tested: With WordPress 6.0.0
* Tested: With Gutenberg 13.3.0

# 0.2.1 
* Changed: Update templates and parts from the database #14

# 0.2.0 
* Changed: Add theme support for wp-block-styles
* Changed: Update clone template part as 500px wide group #14
* Added: Add 404 template #14
* Changed: Update theme.json to version:2. Not certain that it's absolutely necessary. #4
* Changed: Wrap header part in a group #4
* Changed: Simplify index.html template #4
* Changed: Rework metadates template part to use the Row block #4
* Changed: Rename block-templates and block-template-parts to templates and parts #14
* Tested: With WordPress 5.9.1 and WordPress Multi Site
* Tested: With Gutenberg 12.6.0
* Tested: With PHP 8.0

# 0.1.4 
* Changed: Improve styling with left and right padding/margins and normal font sizes #13

# 0.1.3 
* Changed: Remove Follow me from sidebar-short.
* Changed: Use social-links rather than sidebar-short in query-sidebar-short

# 0.1.2 
* Changed: Force social links into a vertical list using a narrow column
* Changed: Update screenshot of 'Written' post rather than page.
* Changed: Add custom.css copied from genesis-hm #10
* Changed: Add missing social icons as listed by [bw_follow_me alt=0],#1

# 0.1.1 
* Changed: Style featured image as Grows,#1

# 0.1.0 
* Changed: Set metadates paragraph size to extra-small
* Added: Create screenshot.html template to create a screenshot
* Added: Implement navigation link overrides - copied from ThisIs...
* Added: Add shortcode_unautop block template to demo Gutenberg issue 33345
* Added: Add no-sidebar block template for the My Favourite Theme post
* Tested: With Gutenberg 11.0.0
* Tested: With WordPress 5.8-RC2
* Tested: With PHP 8.0

# 0.0.0 
* Style post edit block consistent with other metadates fields
* Switch to using CSS flex rather than grid and improve Category and Tags display
* Add clone.html template part
* Tweak styling for flexed content
* Define styling for is-style- prefixed classes: fancy, plain, griddled and flexed #1
* More work on sidebar.html - excluding the Products widget #9
* Experiment with CSS grid styling for the metadates
* Experiment with CSS grid styling for the metadates
* Add font family for verse and other style/settings changes for better match with genesis-hm #1
* Try registering some block styles: Plain and Fancy #5
* Implement metadates.html using CSS grid #1
* Save the metadates template part demonstrating Gutenberg issue 33345
* Save the metadates template part demonstrating Gutenberg issue 33345
* Style the archive block's select dropdown
* Set margin on core/heading. Attempt to set font size for oik-bbw/wp block.
* Set background colour for body and groups and font size for footer content. Remove post-excerpt styling
* Prevent images from stretching. Fixes #8. Part fixes #4
* Separate sidebar into new template part. #9
* Use same fix as TT1 blocks to prevent images from stretching #8
* Define colours, font size and weight #1
* Implement singular.html for a single post, page or attachment #1
* a0d8a63 Don't show the underlining on a site title link. #5
* Set content and wide widths #1
* Add Grows style for images #3
* Add functions.php copied/cobbled from thisis. Start adding register_block_style logic #3
* Attempts to style the site title and tagline in the header
* Add index.html to get started #1
* Add theme.json copied from fse-tutorial
* Add index.html which uses header and footer template parts
* index.php is needed for parent themes
* Add style.css for Written v0.0.0
* Initial commit


### Block overrides 

Written may contain a number of overrides to Gutenberg server rendered blocks which didn't behave the way I expected.

Improvement areas include:

* Navigation link - changes hardcoded links from s.b/hm to the site URL

## Copyright 
(C) Copyright Herb Miller, Bobbing Wide 2021, 2022

* This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
