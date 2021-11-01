<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\pembelian;

class MyController extends Controller
{
    //membuat method
    public function index()
{
    $data = [
        ['nama' => 'Dadang Konelo' , 'kelas' => 'XII RPL 3'],
        ['nama' => 'Mamat Kelvin' , 'kelas' => 'XII RPL 1'],
        ['nama' => 'Asep Jenang' , 'kelas' => 'XII RPL 2']
    ];
    return view('latihan' , compact('data'));

}
    public function posting()
    {
        $posts = Post::all();
        return view('post' , compact('posts'));
    }
    public function pembelian()
    {
        $pembelian = pembelian::all();
        return view('pembelian' , compact('pembelian'));
    }
    public function singlepembelian($id)
    {
        $singlepembelian = pembelian::find($id);
        return view('singlepembelian' , compact('singlepembelian'));
    }
}