<?php
##*HEADER*##

/**
 * Class for table _ECR_TABLE_NAME_.
 */
class TableECR_ELEMENT_NAME extends JTable
{
##ECR_FIELD_1##
##ECR_TABLE_VARS##
   /**
    * Constructor.
    *
    * @param object $_db Database connector object.
    */
    public function __construct(&$_db)
    {
        parent::__construct('#___ECR_TABLE_NAME_', 'id', $_db);
        $this->db = $_db;
    }//function
}//class
