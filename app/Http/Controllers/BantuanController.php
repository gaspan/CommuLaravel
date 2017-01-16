<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Redirect;

use GuzzleHttp\Client;



class BantuanController extends Controller
{
    protected $data = [
                'base_uri'  => 'http://localhost:8000',
                'headers'   => [
                    'api-key'   => 'base64:rtjZaJpgQGoz23tp3l88iaJgGaMh9A9mdWUpsqKAecM='
                ]
    ];

    public function viewBantuan()
    {
        $id =session()->get('id_anggota');

        $client = new Client($this->data);

        $response = $client->get('api/anggota/viewbantuan/'.$id);

        $body = $response->getBody();

        $bantuans = json_decode($body);

        return view('bantuan')->with(compact('bantuans'));
    }
    
}
