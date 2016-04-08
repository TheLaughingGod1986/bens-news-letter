<!--?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');</p-->
<?php
class Data extends CI_Model {

function __construct()
{
// Call the Model constructor
parent::__construct();
}

function get_data()
{
$this-&gt;db-&gt;select('month, wordpress, codeigniter, highcharts');
$this-&gt;db-&gt;from('project_requests');
$query = $this-&gt;db-&gt;get();
return $query-&gt;result();
}

}