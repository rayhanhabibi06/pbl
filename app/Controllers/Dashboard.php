<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $data['title'] = 'Main Page';
        return view('dashboard/pages/main', $data);
    }

    public function history(){
        $data['title'] = 'History Page';
        return view('dashboard/pages/history', $data);
    }
}
