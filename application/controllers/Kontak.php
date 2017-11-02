<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Kontak extends CI_Controller{
  var $API = "";

  public function __construct()
  {
    parent::__construct();
    $this->API="http://localhost/rest_ci_server";
  }

  function index()
  {
    $data['datakontak'] = json_decode($this->curl->simple_get($this->API.'/Kontak'));
    $this->load->view('kontak/list', $data);
  }

  function create()
  {
    if (isset($_POST['submit'])) {
      $data = array(
        'id'    => $this->input->post('id'),
        'nama'  => $this->input->post('nama'),
        'nomor' => $this->input->post('nomor')
      );
      $Insert = $this->curl->simple_post($this->API.'/Kontak', $data, array(CURLOPT_BUFFERSIZE => 10));
      if ($Insert) {
        $this->session->set_flashdata('hasil','Insert Data Berhasil');
      }else {
        $this->session->set_flashdata('hasil','Insert Data Gagal');
      }
      redirect('Kontak');
    }else {
      $this->load->view('kontak/create');
    }
  }

  function edit()
  {
    if (isset($_POST['submit'])) {
      $data = array(
        'id'    => $this->input->post('id'),
        'nama'  => $this->input->post('nama'),
        'nomor' => $this->input->post('nomor')
      );
      $update = $this->curl->simple_put($this->API.'/Kontak', $data, array(CURLOPT_BUFFERSIZE => 10));
      if ($update) {
        $this->session->set_flashdata('hasil','Update Data Berhasil');
      }else {
        $this->session->set_flashdata('hasil','Update Data Gagal');
      }
      redirect('Kontak');
    }else {
      $params = array('id' => $this->uri->segment(3));
      $data['datakontak'] = json_decode($this->curl->simple_get($this->API.'/kontak',$params));
      $this->load->view('kontak/edit', $data);

      // print_r($data);
    }
  }

  function delete($id)
  {
    if (empty($id)) {
      redirect('kontak');
    }else {
      $delete = $this->curl->simple_delete($this->API.'/Kontak', array('id'=>$id), array(CURLOPT_BUFFERSIZE => 10));
      if ($delete) {
        $this->session->set_flashdata('hasil','Delete Data Berhasil');
      }else {
        $this->session->set_flashdata('hasil','Delete Data Gagal');
      }
      redirect('kontak');
    }
  }

}
