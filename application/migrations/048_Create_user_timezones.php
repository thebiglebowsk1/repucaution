<?php if ( ! defined('BASEPATH')) die('No direct script access allowed');

class Migration_Create_user_timezones extends CI_Migration {

    private $_table = 'user_timezones';

    public function up() {
        $fields = array(
            'id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'user_id' => array(
                'type' => 'INT',
                'constraint' => 11,
            ),
            'timezone' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'default' => 'Pacific/Honolulu'
            )
        );
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->add_field($fields);
        $this->dbforge->create_table($this->_table, TRUE);
    }

    public function down() {
        $this->dbforge->drop_table($this->_table);
    }

}