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