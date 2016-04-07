<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class rss_model extends CI_Model
{
    // get all
    function get_feeds()
    {
        $query = $this->db->get('members');
        if ($query->numRows() > 0) { // check for rows
            return $query->result();
        }
        return;
    }
}
/*End of file feed_model.php*/
/*Location .application/models/feed_model.php*/
