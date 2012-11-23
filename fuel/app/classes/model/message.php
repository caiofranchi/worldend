<?php
    class Model_Message extends \Orm\Model
    {
        protected static $_table_name = 'messages';
        protected static $_properties = array(
            'cd_message',
            'dc_name' => array( //column name
                'data_type' => 'string',
                'label' => 'Post Title', //label for the input field
                'validation' => array('required', 'max_length'=>array(100), 'min_length'=>array(10)) //validation rules
            ),
            'dc_message' => array(
                'data_type' => 'string',
                'label' => 'Post Content',
                'validation' => array('required')
            ),
            'dt_send' => array(
                'data_type' => 'mysql_date',
                'label' => 'Author Name',
                'validation' =>  array('required', 'max_length'=>array(65), 'min_length'=>array(2))
            ),
            'dc_ip' => array(
                'data_type' => 'string',
                'label' => 'Author Email',
                'validation' =>  array('required', 'valid_email')
            )
        );
        protected static $_primary_key = array('cd_message');


        public static function insert()
        {

        }
    }
?>