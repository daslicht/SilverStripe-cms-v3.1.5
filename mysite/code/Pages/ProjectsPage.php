<?php
class Project extends Page {

    private static $has_many = array(
        'Students' => 'Student'
    );
    private static $many_many = array(
        'Mentors' => 'Mentor'
    );


    public function getCMSFields() {
        
        // Get the fields from the parent implementation
        $fields = parent::getCMSFields();   
        
        // Create a default configuration for the new GridField, allowing record editing
        $config = GridFieldConfig_RelationEditor::create();
        
        // Set the names and data for our gridfield columns
        $config->getComponentByType('GridFieldDataColumns')->setDisplayFields(array(
            'Name' => 'Name',
            'Project.Title'=> 'Project' // Retrieve from a has-one relationship
        )); 
        
        // Create a gridfield to hold the student relationship    
        $studentsField = new GridField(
            'Students', // Field name
            'Student', // Field title
            $this->Students(), // List of all related students
            $config
        );  
        // Create a tab named "Students" and add our field to it
        $fields->addFieldToTab('Root.Students', $studentsField); 
        
        $mentorsField = new GridField(
            'Mentors',
            'Mentors',
            $this->Mentors(),
            GridFieldConfig_RelationEditor::create()
        );

        $fields->addFieldToTab('Root.Mentors', $mentorsField);


        return $fields;
    }


}




class Project_Controller extends Page_Controller {
}