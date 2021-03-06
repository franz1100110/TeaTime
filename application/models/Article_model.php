<?php
 
class Article_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get article by id
     */
    function get_article($id)
    {
        return $this->db->get_where('article',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all article
     */
    function get_all_article()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('article')->result_array();
    }
        
    /*
     * function to add new article
     */
    function add_article($params)
    {
        $this->db->insert('article',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update article
     */
    function update_article($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('article',$params);
    }
    
    /*
     * function to delete article
     */
    function delete_article($id)
    {
        return $this->db->delete('article',array('id'=>$id));
    }
}
