<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Symfony\Component\VarDumper\Dumper\DataDumperInterface;

class RecordsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    private $client;
    private $request;

    public function __construct(Request $req)
    {
        $this->middleware('auth');
        $this->client = new Client;
        $this->request = $req;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('records/index');
    }

    public function insert()
    {
        $data = Input::all();
        $rules = array(
            'fname' => 'required',
            'lname' => 'required',
            'address' => 'required',
            'cnumber' => 'numeric',
            'email' => 'email',
            'bdate' => 'date',
            'services' => 'nullable'
        );
        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            dd($validator->messages());
        }
        else {
            $this->client->first_name = Input::get('fname');
            $this->client->last_name = Input::get('lname');
            $this->client->address = Input::get('address');
            $this->client->contact_number = Input::get('cnumber');
            $this->client->email = Input::get('email');
            $this->client->birth_date = Input::get('bdate');
            $this->client->save();
            echo "saved.";
        }
    }

    public function search($key)
    {
        $data = DB::table('clients')->select('first_name','last_name','address')->where('first_name', 'like', '%' . $key . '%')->get();;
        if (!$data->isEmpty()) {
            return json_encode($data);
        }
        else {
            return null;
        }
    }
}
