<?php
 
class User_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get user by id
     */
    function get_user($id)
    {
        return $this->db->get_where('user',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all user
     */
    function get_all_user()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('user')->result_array();
    }
        
    /*
     * function to add new user
     */
    function add_user($params)
    {
        $this->db->insert('user',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update user
     */
    function update_user($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('user',$params);
    }
    
    /*
     * function to delete user
     */
    function delete_user($id)
    {
        return $this->db->delete('user',array('id'=>$id));
    }
}
