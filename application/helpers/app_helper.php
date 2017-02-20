<?php
  function pagination($total_rows, $per_page, $base_url = null, $uri_segment = 3){
    $ci =&get_instance();

    if(is_null($base_url)){
      $segment[] = $ci->router->class;
      $segment[] = $ci->router->method;
      $base_url = implode("/", $segment);
    }

    $config['total_rows'] = $total_rows;
    $config['per_page'] = $per_page;
    $config['uri_segment'] = $uri_segment;
    $config['base_url'] = site_url($base_url);
    $config['suffix'] = '?'.http_build_query($_GET, '', "&");
    $ci->load->library('pagination');
    $ci->pagination->initialize($config);
    return $ci->pagination->create_links();
  }

  function checkMarketSession(){
    $ci =&get_instance();
    $ci->userinfo = '';

    $market = $ci->session->userdata('market');

    if($ci->session->userdata('logged_in') == TRUE){
      if($user = $ci->CustomerModel->userinfo($ci->session->userdata('id'))){
        $ci->userinfo = $user;
      }
    }

    if(!empty($market)){
      $marketcategory = $ci->MarketModel->getCategory($market);
      $marketsubcategory = $ci->MarketModel->getSubCategory();

      $data['marketcat'] = $marketcategory;
      $data['marketsubcat'] = $marketsubcategory;
      $data['userinfo'] = $ci->userinfo;

      $ci->load->view('layouts/header', $data);
    }else{
      redirect('secondarycontroller/selectmarket');
    }
  }
?>
