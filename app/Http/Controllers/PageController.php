<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }
    
    public function about() {
        return 'Nama saya Iqbal dengan NIM 2241760121';
    }
    
    public function articles($id) {
        return 'Nomor id: ' . $id;
    }
}
