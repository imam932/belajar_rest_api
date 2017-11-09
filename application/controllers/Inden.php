<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Inden extends CI_Controller{
  var $API = "";

  public function __construct()
  {
    parent::__construct();
    $this->API="http://localhost/rest_ci_server";
  }

  function index()
  {
    $data['datainden'] = json_decode($this->curl->simple_get($this->API.'/Inden'));
    $this->load->view('inden/list', $data);
  }

  function create()
  {
    if (isset($_POST['submit'])) {
      $data = array(
        'id'    => $this->input->post('id'),
        'nama'  => $this->input->post('nama'),
        'type' => $this->input->post('type'),
        'warna' => $this->input->post('warna'),
        'jumlah' => $this->input->post('jumlah'),
        'harga' => $this->input->post('harga')
      );
      $Insert = $this->curl->simple_post($this->API.'/Inden', $data, array(CURLOPT_BUFFERSIZE => 10));
      if ($Insert) {
        $this->session->set_flashdata('hasil','Insert Data Berhasil');
      }else {
        $this->session->set_flashdata('hasil','Insert Data Gagal');
      }
      redirect('Inden');
    }else {
      $this->load->view('inden/create');
    }
  }

  function edit()
  {
    if (isset($_POST['submit'])) {
      $data = array(
        'id'    => $this->input->post('id'),
        'nama'  => $this->input->post('nama'),
        'type' => $this->input->post('type'),
        'warna' => $this->input->post('warna'),
        'jumlah' => $this->input->post('jumlah'),
        'harga' => $this->input->post('harga')
      );
      $update = $this->curl->simple_put($this->API.'/Inden', $data, array(CURLOPT_BUFFERSIZE => 10));
      if ($update) {
        $this->session->set_flashdata('hasil','Update Data Berhasil');
      }else {
        $this->session->set_flashdata('hasil','Update Data Gagal');
      }
      redirect('Inden');
    }else {
      $params = array('id' => $this->uri->segment(3));
      $data['datainden'] = json_decode($this->curl->simple_get($this->API.'/inden',$params));
      $this->load->view('inden/edit', $data);

      // print_r($data);
    }
  }

  function delete($id)
  {
    if (empty($id)) {
      redirect('inden');
    }else {
      $delete = $this->curl->simple_delete($this->API.'/Inden', array('id'=>$id), array(CURLOPT_BUFFERSIZE => 10));
      if ($delete) {
        $this->session->set_flashdata('hasil','Delete Data Berhasil');
      }else {
        $this->session->set_flashdata('hasil','Delete Data Gagal');
      }
      redirect('inden');
    }
  }

}
