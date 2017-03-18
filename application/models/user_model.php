<?php

class User_model extends Model {

    public function __construct() {
        parent::__construct();
        //load database
        $this->load_database();
    }

    // INserting the Data into the Model files.
    public function insertData($data = array()) {
        $getuserId = $this->db->query("SELECT user_id FROM user where user_name = '" . $data['user_name'] . "'");
        if ($getuserId->num_rows > 0) {
            $user_id = $getuserId->result_array[0]['user_id'];
            $query = "INSERT INTO offenses set user_id = '" . (int)$user_id . "',";
            foreach ($data['offenses'] as $key => $offense) {
                $query .= " $key = '" . $offense . "' , ";
            }
            $query .= " G_B_time = '" . $data['G_B_time'] . "' , calculation_mode = '" . $this->db->escape($data['calculation_mode']) . "'";
            $this->db->query($query);
        } else {
            $addUser = $this->db->query("INSERT INTO user set user_name = '" . $this->db->escape($data['user_name']) . "'");
            $getLastID = $this->db->getlastrow();

            $query = "INSERT INTO offenses set user_id = '" . (int)$getLastID . "',";
            foreach ($data['offenses'] as $key => $offense) {
                $query .= " $key = '" . $offense . "' , ";
            }
            $query .= " G_B_time = '" . $data['G_B_time'] . "' , calculation_mode = '" . $this->db->escape($data['calculation_mode']) . "'";
            $this->db->query($query);
        }
        return TRUE;
    }

}
