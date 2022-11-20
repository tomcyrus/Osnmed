<?php
$CI = get_instance();
$CI->load->database();
$CI->load->dbforge();

$paytm_info = array();

$paytm['PAYTM_MERCHANT_KEY']     = 'PAYTM_MERCHANT_KEY';
$paytm['PAYTM_MERCHANT_MID']     = 'PAYTM_MERCHANT_MID';
$paytm['PAYTM_MERCHANT_WEBSITE'] = 'DEFAULT';
$paytm['INDUSTRY_TYPE_ID']       = 'Retail';
$paytm['CHANNEL_ID']             = 'WEB';

array_push($paytm_info, $paytm);

// CHECK PREVIOUS DATA
$CI->db->where('key', 'paytm_keys');
$checker = $CI->db->get('settings')->num_rows();

if ($checker) {
    $CI->db->where('key', 'paytm_keys');
    $settings_data['value'] = json_encode($paytm_info);
    $CI->db->update('settings', $settings_data);
}else{
    $settings_data['key']   = 'paytm_keys';
    $settings_data['value'] = json_encode($paytm_info);
    $CI->db->insert('settings', $settings_data);
}

?>
