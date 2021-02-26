<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        echo'<a href="http://localhost:8000/category">Halaman Produk</a><br>';
        echo'<a href="http://localhost:8000/berita">Halaman News</a><br>';
        echo'<a href="http://localhost:8000/program">Halaman Program</a><br>';
        echo'<a href="http://localhost:8000/aboutus">Halaman About Us</a><br>';
        echo'<a href="http://localhost:8000/contactus">Halaman Contact Us</a><br>';
        echo'<a href="http://www.educastudio.com/">https://www.educastudio.com/</a>';

    }

    public function products(){
        echo'<a href="http://localhost:8000/category/marbel-edu-games">Marbel Edu Games</a><br>';
        echo'<a href="http://localhost:8000/category/marbel-and-friends-kids-games">Marbel And Friends Kids Games</a><br>';
        echo'<a href="http://localhost:8000/category/riri-story-books">Riri Story Books</a><br>';
        echo'<a href="http://localhost:8000/category/kolak-kids-songs">Kolak Kids Song</a><br>';
        
    }

    public function news(){
        echo'<a href="http://localhost:8000/news/">News</a><br>';
        echo'<a href="http://localhost:8000/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19">Educa Studio Berbagi Untuk Warga Sekitar Terdampak Covid 19</a><br>';
    }

    public function program(){
        echo'<a href="http://localhost:8000/program/karir">Karir</a><br>';
        echo'<a href="http://localhost:8000/program/magang">Magang</a><br>';
        echo'<a href="http://localhost:8000/program/kunjungan-industri">Kunjungan Industri</a><br>';
    }
}
