<?php
class Feed extends Controller {

function Feed()
{
parent::Controller();

$this->load->helper('xml');
$this->load->helper('text');
$this->load->model('posts_model', 'posts');
}

function index()
{
$data['feed_name'] = 'benoats/co/blog';
$data['encoding'] = 'utf-8';
$data['feed_url'] = 'http://benoats.co/blog/feed/';
$data['page_description'] = 'What my site is about comes here';
$data['page_language'] = 'en-en';
$data['creator_email'] = 'mail@me.com';
$data['posts'] = $this->posts->getPosts(10);
header("Content-Type: application/rss+xml");

$this->load->view('rss', $data);
}

}