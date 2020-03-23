<?php 
 
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
 
function cek_agent() {
if ($this->agent->is_browser()){
			$agent = $this->agent->browser().' '.$this->agent->version();
			$plat=$this->agent->platform();
			$ipa=$this->input->ip_address();
		}elseif ($this->agent->is_mobile()){
			$agent = $this->agent->mobile();
			$plat=$this->agent->platform();
			$ipa=$this->input->ip_address();
		}else{
			$agent = 'Data user gagal di dapatkan';
			$plat='Platform gagal diketahui';
			$ipa='IP address gagal diketahui';
		}
   exit;
}
 
?>


