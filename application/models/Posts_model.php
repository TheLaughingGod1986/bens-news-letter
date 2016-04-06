<?php
class Posts_model extends Model {

    // get all postings
    function getPosts($limit = NULL)
    {
        return $this->db->get('posts', $limit);
