<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Userlevel_model extends CI_Model
{
    public function getUserLevel($user_id)
    {
        $query = "SELECT `user_role`.`role`
        FROM `user_role` JOIN `user`
        ON `user_role`.`id` = `user`.`role_id`
        WHERE `user`.`id` = `$user_id`
        ";
        return $this->db->query($query)->result_array();
    }
}
