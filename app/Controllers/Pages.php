<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Pages extends Controller
{
    public function index()
    {
        return view('welcome_message');
    }

    public function view($page = 'home', $option = '')
    {
        // if ( ! is_file(APPPATH.'/Views/pages/'.$page.'.php'))
        // {
        //     // Whoops, we don't have a page for that!
        //     throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        // }

        $data['title'] = ucfirst($page); // Capitalize the first letter
        $data['option'] = $option;

        echo view('templates/header', $data);
        echo view('pages/home', $data);
        echo view('templates/footer', $data);
    }
}