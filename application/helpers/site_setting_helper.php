<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('convertToBase64'))
{
	function site_setting()
	{
	// $path = FCPATH.$path;
		 $CI=& get_instance();
	 	$q        = $CI->db->get('site_setting');
        $num_rows = $q->num_rows();
        if ($num_rows > 0) {
            foreach ($q->result_array() as $rows) {
                $data[] = $rows;
            }
            $q->free_result();
            return $data;
        }
	}
}