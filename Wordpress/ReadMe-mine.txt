Admin Panel:
  login: admin
  password: admin

http://localhost/wordpress_woocommerce/wordpress-4.9.8-ru_RU/wordpress/wp-admin/


#To remove footer-> your theme(storefront)-> functions.php

#To remove wordpress sidebar ->..\wordpress\wp-content\themes\storefront\sidebar.php -> comment

#Theme images are stored in ..../wordpress/wp-content/plugins/materialis-companion/theme-data/materialis/sections/images/apple-1838564.jpg

#To change admin password: go phpMyAdmin-> wp-users-> press "Pencil" over admin line-> for password select function "MD5"-> change password->save

#header.php по умолчанию и некоторые другие файлы шаблонов находятся в файле wp-includes/theme-compat/


================================================================================================
#front page text, other pages & blogs text is stored in SQL DB-> wp_posts
#header, footer text is stored in ..../wordpress/wp-content/YOUR-THEME 

#To edit front page => go to admin panel => PAGES-> ALL PAGES -> FRONT PAGE . Or go SQL DB-> wp_posts -> FRONT PAGE(post_title column). All front page is just a one row record in wp_posts.
#To edit, add, delete blog records(which are displayed by link "Blog") =>go to admin panel => go to RECORDS. Or  go SQL DB-> -> wp_posts ->

#To change themes-> Внешний вид -> Темы

To make the SQL record in wp_posts to be blog, change the SQL field "post_type" to "post"

#To change "ЕЩЕ один сайт на Wordpress" (or meaning the title of site) -> SQL -> wp_options -> field {blogdescription}. Or Admin Console-> Settings->...

#To change what page to display on frontPAge(on start)-> WP Admin Console-> Settings-> Reading-> ....

#Add a new page-> WP Admin Console-> Pages-> Add new. Then add it to menu:WP Admin Console-> Appearance-> Menu-> Add to menu

#Change login page-> https://codex.wordpress.org/Customizing_the_Login_Form

#edit some text in footer: go to ..../wordpress/wp-content/YOUR-THEME -> template_parts-> footer-> site-info (it's diffrent in different themes, sometimes it is in index.php, footer.php)



=================== 2021 ===========================


#Login page => /wp-login.php   => <label for="user_login

# Remove meta, remove archieve => Appearance -> Widgets -> turn off

# Edit "One more Wordpress site" => Appearance -> Header  Or => Settings

#Change admin language => Settings
#Front page (static or posts) => Customize-> Homepage settings 

#Change side-bar appearnce/position => Appearance -> General settings -> Posts & pages Settings

# Set homepage (static or posts) => Settings -> Reading

# Set theme designed page!!!! => go "Plugins" => intall "Starter Templates — Elementor, Gutenberg & Beaver Builder Templates" 
      => after go to "Appearance" -> Starter template -> if 1st time visit select "Elementor"
      ->choose template -> import all or selected pages -> Go to "Pages" -> make imported pages Published -> Go to "Menu" -> add it to menu 
      
      
 ----------- Woocommerce ------------     
      
# Woocommerce -> intall "Woocommerce" in pugin section
# Edit loop of all products at frontstore => \wp-content\plugins\woocommerce\templates\loop. 
   For example, Edit price at => price.php, edit "Add to cart" button at => add-to-cart.php
# Edit one single product template (when user clicks it) =>   \wp-content\plugins\woocommerce\templates\single-product

# Fix thumbnail products image => Appearance -> Customize -> Woocommerce -> Product Image ->  Uncropped Images will display using the aspect ratio in which they were uploaded -> Publish
# Products per row, Rows per page => Appearance -> Customize -> Woocommerce -> Product Catalog

# Remove all footer and "Built with Storefront & WooCommerce" => go to => wp-content\themes\storefront\function.php => add code =>  remove_action(storefront_footer, storefront_credit,20);
# Var_2, just edit footer => In the file: themes>storefront>inc>storefront-template-functions.php => edit function storefront_credit()