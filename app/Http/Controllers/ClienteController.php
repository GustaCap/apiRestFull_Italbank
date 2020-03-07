<?php

namespace App\Http\Controllers;

use App\Cliente;

// use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Documentidscannedmod;
use App\Archivo;
use App\Raiz;
use Carbon\Carbon as CarbonCarbon;
use Carbon\Traits\Timestamp;
use Facade\FlareClient\Http\Client;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;


class ClienteController extends Controller
{

    public function getToken(Request $request)
    {

        if ($request->isJson()) {

            try {
                $data = $request->json()->all();

                $cliente = Cliente::where('email', $data['email'])->first();

                if ($cliente && Hash::check($data['password'], $cliente->password)) {

                    return response()->json($cliente, 200);
                    # code...
                } else {

                    return response()->json(['error' => 'No content'], 406);
                    # code...
                }
            } catch (ModelNotFoundException $e) {

                return response()->json(['error' => 'No content'], 406);
                //throw $th;
            }
            # code...
        }

        return response()->json(['error' => 'Unauthorized'], 406);

        # code...
    }


    public function showClientes(Request $request)
    {
        if ($request->isJson()) {

            $clientes = Cliente::all();

            return response()->json($clientes, 200);

        }

        // return response()->json([], 200);

    }


    public function storeFiles(Request $request)
    {

        $this->validate($request, [


            'files.*' => 'required|mimes:doc,docx,pdf,txt,png,jpg,jpeg,csv,gif|max:2048'
        ]);


        if ($request->hasfile('files')) {


            $imagenes = $request->file('files');
             /**
             * El idCliente debe venir en el POST del cliente
             */
            $idcliente = '1';
            $cliente = Cliente::find($idcliente);

            $nombre = $imagenes->getClientOriginalName();
            $nombreimage = date('Y-m-d').'_'.$idcliente.'_'.$nombre;

            /**
             * La raiz debe venir en el POST del cliente
             */
            $raiz = 'prueba';

            /**
             * La función public_path() => api-italdoc/public/
             */
            $ruta = public_path().'/'.$raiz;

            $imagenes->move($ruta, $nombreimage);


        }

        $url = Archivo::create([

            'cliente_id' => $idcliente,
            'files' =>  '/'.$raiz.'/'.$nombreimage

            ]);

        $url->save();

        $cliente = Cliente::with('archivos')->get();

        return response()->json($cliente, 200);

    }


    public function getClient(Request $request, $id)
    {

        if ($request->isJson()) {

            // $cliente = Cliente::find($id);
            $cliente = Cliente::all()->where('id', $id);
            $cliente = Cliente::with('images')->get();

            return response()->json($cliente, 200);
        }

        return response()->json(['error' => 'Format Not Authorized'], 406);

    }


    public function getRaiz(Request $request, $id)
    {

        if ($request->isJson()) {

            // $cliente = Cliente::find($id);
            $raiz = Raiz::all()->where('id', $id);


            return response()->json($raiz, 200);
        }

        return response()->json(['error' => 'Format Not Authorized'], 406);

    }


    public function getArchivos(Request $request, $id)
    {

        if ($request->isJson()) {

            // $cliente = Cliente::find($id);
            $archivos = Archivo::all()->where('cliente_id', $id);


            return response()->json($archivos, 200);
        }

        return response()->json(['error' => 'Format Not Authorized'], 406);

    }



}
