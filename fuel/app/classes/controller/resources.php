<?php

  use \Model\Resource;

  class Controller_Resources extends Controller {

    # GET /resources
    public function action_index() {
      $resources = $this->get_resources();

      $data = array();
      $data['resources'] = $resources;
      return Response::forge(View::forge('resources/index', $data));
    }

    # GET /resources/:id
    public function action_show() {
      $resource = $this->get_resource();

      $data = array();
      $data['resource'] = $resource;
      return Response::forge(View::forge('resources/show', $data));
    }

    # GET /resources/new
    public function action_new() {
      $resource = $this->new_resource();

      $data = array();
      $data['resource'] = $resource;
      return Response::forge(View::forge('resources/new', $data));
    }

    # GET /resources/:id/edit
    public function action_edit() {
      $resource = $this->get_resource();

      $data = array();
      $data['resource'] = $resource;
      return Response::forge(View::forge('resources/edit', $data));
    }

    # POST /resources
    public function action_create() {
      $resource = $this->new_resource();
      # Create
      return Response::redirect("/resources/$resource->id");
    }

    # PUT /resources/:id
    public function action_update() {
      $resource = $this->get_resource();
      # Update
      return Response::redirect("/resources/$resource->id");
    }

    # DELETE /resources/:id
    public function action_destroy() {
      $resource = $this->get_resource();
      # Delete
      return Response::redirect("/resources");
    }

    private function get_resources() {
      return Resource::find_all();
    }

    private function new_resource() {
      return new Resource();
    }

    private function get_resource() {
      $id = $this->request->named_params['id'];
      return Resource::find(array('where' => array('id' => $id)))[0];
    }
  }
