<?php

  namespace Model;

  class Resource extends \Model_Crud {

    protected static $_table_name = 'resources';

    public $title = "";

    public $body = "";

    protected static $_properties = array(
      'title',
      'body'
    );

    protected static $_labels = array(
      'title' => 'タイトル',
      'body'  => '本文'
    );

    protected static $_defaults = array(
      'title' => '',
      'body'  => ''
    );

    protected static $_rules = array(
      'title' => 'required',
      'body'  => 'required'
    );


  }
