<?php
class Producer extends DataObject {
    
    private static $db = array(
        'Name' => 'Varchar'
    );

    private static $has_one = array(
        'Project' => 'Project'
    ); 

    function getInfo() {
        return $this->renderWith('StudentInfo');
    }

}