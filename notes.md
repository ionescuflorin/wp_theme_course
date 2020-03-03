## 1.Create a new theme

- create a new folder in themes folder

- create a file called index.php

- create a second file called style.css

- provide theme infos inside style.css

```css
/*
    Theme Name: Fictional University
    Author: Brad
    Version: 1.0
    */
```

- add a preview image with a file called screenshot.png (1200 x 900)

- create a file called single.php for single post

 ### **'temp1'**
- create a file called page.php for single page
-------

- setup a global header and footer
- create a file called header.php / footer.php - write the code
- insering in the index.php with **<?php get_header();** / **<?php get_footer();**

-------
- add the css

- add the top admin black bar

- programatically load css by making a file called functions.php and register the syles and scripts

- take the html template:
     - header
     - footer
     - add the styles into the style.css file
     - add font icons and google fonts in functions.php
     - copy and move the images, css, js folders to the wp folder
     - disable chaching ony for dev mode

- integrate the interior page layout for majority of pages and apply that into page.php
- work on breadcrumbs parent-children relationships
- codex.wordpress / developer.wordpress echo get / not echo the
- add sidebar of children menus
- working on blog
- front-page.php it will be used for our home page
- single.php - individual posts
- page.php - individual pages
- custom queries
- to strat creating a custom quey you start by creating a variable
- after finishing using the custom queries use at the end of the php block this code:      
 <?php } wp_reset_postdata(); ?>
- add workflow and automation
- npm i gulp-cli -g
- custom post types
Post type:
- ex Posts
- ex Pages - A page is actually just a post with a special post type of page. (post_type=page)
- create a new custom post type called events

<!-- Hooks are a way for one piece of code to interact/modify another piece of code. They make up the foundation for how plugins and themes interact with WordPress Core, but they’re also used extensively by Core itself.

There are two types of hooks: Actions and Filters. To use either, you need to write a custom function known as a Callback, and then register it with WordPress hook for a specific Action or Filter.

Actions allow you to add data or change how WordPress operates. Callback functions for Actions will run at a specific point in in the execution of WordPress, and can perform some kind of a task, like echoing output to the user or inserting something into the database.

Filters give you the ability to change data during the execution of WordPress. Callback functions for Filters will accept a variable, modify it, and return it. They are meant to work in an isolated manner, and should never have side effects such as affecting global variables and output.

WordPress provides many hooks that you can use, but you can also create your own so that other developers can extend and modify your plugin or theme. -->
-  Better practice to treat CPT as a plugin (Must Use Plugin) - you can't dezactivate it
- make a folder called mu-plugin in wp-content