<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = json_decode(
            file_get_contents(APPPATH . '../data/content.json'),
            true
        );

        return view('home', $data);
    }
}
