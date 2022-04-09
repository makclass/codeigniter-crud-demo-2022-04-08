<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Posts extends BaseController
{
    public function index()
    {
        $db = db_connect();
        $data["posts"] = $this->Posts->findAll();
        // $data["posts"] = $db->query("SELECT * FROM posts");
        echo view("posts/index", $data);
    }

    public function show($id)
    {
        $post = $this->Posts->find($id);
        var_dump($post);
    }

    public function create()
    {
        echo view("posts/create");
    }

    public function save()
    {
        $data = $this->request->getPost();
        $this->Posts->insert($data);

        return redirect()->to('/posts/index');
    }

    public function edit($id)
    {
        $data["post"] = $this->Posts->find($id);
        echo view("posts/edit", $data);
    }

    public function update($id)
    {
        $data = $this->request->getPost();
        $this->Posts->update($id, $data);

        return redirect()->to('/posts/');
    }

    public function delete($id)
    {
        $this->Posts->delete($id);
        return redirect()->to('/posts/');
    }



}
