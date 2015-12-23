<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
    }

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
	    
		$this->load->view('welcome_message');
	}
	
	public function llltest(){
	    $year = date('Y')+1;
	    $time = $year.'-12-31';
	    echo $time;
	}
	
    function create_randomstr($lenth = 6) {
        return $this->random($lenth, '123456789abcdefghijklmnpqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ');
    }
    
    /**
     * 产生随机字符串
     * @param    int        $length  输出长度
     * @param    string     $chars   可选的 ，默认为 0123456789
     * @return   string     字符串
     */
    function random($length, $chars = '0123456789') {
        $hash = '';
        $max = strlen($chars) - 1;
        for ($i = 0; $i < $length; $i++) {
            $hash .= $chars[mt_rand(0, $max)];
        }
        return $hash;
    }
    
    function toCSV($header, $data, $filename) {
        $sep = "\t";
        $eol = "\n";
        $csv = count($header) ? '"' . implode('"' . $sep . '"', $header) . '"' . $eol : '';
        foreach ($data as $line) {
            $csv .= '"' . implode('"' . $sep . '"', $line) . '"' . $eol;
        }
        //$encoded_csv = mb_convert_encoding($csv, 'UTF-16LE', 'UTF-8');
        echo $csv;exit;
    
        header('Content-Description: File Transfer');
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment; filename="' . $filename . '.csv"');
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
        header('Content-Length: ' . strlen($encoded_csv));
        echo chr(255) . chr(254) . $encoded_csv;
        exit;
    }
}
