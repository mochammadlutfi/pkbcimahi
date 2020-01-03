<?php

namespace App\Http\Controllers\User;

use App\Models\Slider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\Event;
use GuzzleHttp\Exception\RequestException;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $title = 'Beranda';
        $slider = Slider::latest()->get();
        $client = new Client();
        $req = $client->get('https://blog.pkbcimahi.or.id/wp-json/wp/v2/posts?_embed&per_page=6');

        $event = Event::latest()->limit(3)->get();

        $blog = json_decode($req->getBody()->getContents(), true);
        // dd($res);
        // print("<pre>".print_r($blog, true)."</pre");
        return view('frontend/beranda', compact('title', 'slider', 'blog', 'event'));
    }

    public function wp_api()
    {
        $client = new Client();
        $req = $client->get('https://blog.pkbcimahi.or.id/wp-json/wp/v2/posts');

        $res = $req->getBody()->getContents();

        // dd($res);
    }
}
