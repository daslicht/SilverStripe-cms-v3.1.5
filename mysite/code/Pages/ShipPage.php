<?php
class ShipPage extends Page {
    
    private static $db = array();

    private static $has_many = [
        'Images' => 'ShipImage'
    ];
     
    public function getCMSFields() {
        $fields = parent::getCMSFields();
        	   //addFieldToTab( string $tabName, FormField $field, string $insertBefore = null ) 
        $fields->addFieldToTab("Root.Images", new UploadField('Images'));
         
        return $fields;
    }
}
 
class ShipPage_Controller extends Page_Controller {
}