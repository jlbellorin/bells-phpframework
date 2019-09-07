<?php
  class Pages extends Controller {
    public function __construct() {

    }

    public function index() {
      $data = ['title' => 'Bells PHP Framework'];
      $this->view('pages/index', $data);
    }
  }