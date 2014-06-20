<?php
class MyAdmin extends ModelAdmin {
  private static $managed_models = array('Student','Mentor'); // Can manage multiple models
  private static $url_segment = 'students'; // Linked as /admin/products/
  private static $menu_title = 'My Product Admin';
}