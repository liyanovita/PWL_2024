<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
     // Menampilkan pesan 'Selamat Datang'
     public function index()
     {
         return 'Selamat Datang';
     }
 
     // Menampilkan nama dan NIM
     public function about()
     {
         return 'Nama dan NIM';
     }
     
      // Menampilkan halaman dinamis dengan id
    public function articles($id)
    {
        return 'Halaman Artikel dengan Id ' . $id;
    }
}
