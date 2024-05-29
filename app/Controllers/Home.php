<?php

namespace App\Controllers;

use App\Models\IndexModel;

class Home extends BaseController
{
    protected $HOME;

    public function __construct()
    {
        $this->HOME = new IndexModel();
    }

    public function index()
    {
        $getdata = $this->HOME->getdata();
        $data = array(
            'port' => $getdata
        );

        return view('index', $data);
    }
}
