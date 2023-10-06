<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Product extends BaseController
{
    public function index()
    {
        $dataProduct = $this->model->findAll();

        return view('product/index', ['products' => $dataProduct]);
    }

    public function __construct()
    {
    $this->model = new \App\Models\ProductModel();
    }
    public function new()
    {
        return view('product/new');
    }
    public function create()
    {
        $dataProduct = $this->request->getPost();
        $this->model->insert($dataProduct);

        return redirect()->to('/product');
    }
    public function edit($id = null)
    {
     $dataProduct = $this->model->where('id', $id)->first();

    return view('/product/edit', ['product' => $dataProduct]);
    }
    public function update($id = null)
    {
   $dataProduct = $this->request->getPost();
   $this->model->where('id', $id)->set($dataProduct)->update();

   return redirect()->to('/product');
    }
    public function delete($id = null)
    {
   $this->model->delete($id);

   return redirect()->to('/product');
    }

}
