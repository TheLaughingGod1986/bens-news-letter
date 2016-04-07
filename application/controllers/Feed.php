<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Feed extends CI_Controller {
    public function __construct(){
        parent::__construct();
        //load xml helper and text helper
        $this->load->helper(array('xml'));
        // load the models
        $this->load->model('feed_model');
    }
    public function index()
    {
        // set feed Name will display at title area and page top
        $this->data['feed_name'] = 'phpis.com';
        // set page encoding
        $this->data['encoding'] = 'utf-8';
        // set feed url
        $this->data['feed_url'] = 'http://phpis.com/feed';
        // set page language
        $this->data['page_language'] = 'en';
        // set page Description
        $this->data['page_description'] = 'PHP | CodeIgniter | Wordpress | MySQL | Css3 | HTML5 | JQuery';
        // set author email
        $this->data['creator_email'] = 'arjunphp@gmail.com';
        // get the feeds  from database through model method called get_feeds()
        $this->data['query'] = $this->feed_model->get_feeds();
        // this line is very important, this will let browser to display XML format output
        header("Content-Type: application/rss+xml");
        $this->load->view('feed_view',$this->data);
    }
}
/*End of file feed.php*/
/*Location .application/controllers/feed.php*/
