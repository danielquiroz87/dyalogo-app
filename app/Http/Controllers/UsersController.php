<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuari;
use Illuminate\Support\Facades\Validator;


class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        

        $users=Usuari::paginate(25);

        return view('users.index')->with(['users'=>$users]);
    }

    public function new()
    {   
        return view('users.new');
    }

    public function edit(Usuari $user)
    { 
        return view('users.edit')->with(['user'=>$user]);
    }
    public function save(Request $request)
    {
        $is_new=false;
        $user=false;
        if($request->input('is_new') && $request->input('id')==0){
            $is_new=true;
            $user=new Usuari();
        }else{
            $id=(int) $request->input('id');
            if($id>0){
                $user=Usuari::find($id);
            }
        }

        $v = Validator::make($request->all(), [
            'id' => 'required|integer|max:255',
            'nombre' => 'required|max:255',
            'email'=>'required|email|max:255',
            'cargo'=>'required|max:20',
            'identificacion'=>'required|max:20'
        ]);

        if ($v->fails())
        {
            return redirect()->back()->withErrors($v->errors());
        }

        //Validamos si es agente para validar los horarios
        if($request->input('cargo')=='agente'){

            $v_horas=Validator::make($request->all(), [
            'lunes_hora_inicio' => 'required|date_format:H:i:s',
            'lunes_hora_final' => 'required|date_format:H:i:s',
            'martes_hora_inicial'=>'required|date_format:H:i:s',
            'martes_hora_final'=>'required|date_format:H:i:s',
            'miercoles_hora_inicial'=>'required|date_format:H:i:s',
            'miercoles_hora_final'=>'required|date_format:H:i:s',
            'jueves_hora_inicial'=>'required|date_format:H:i:s',
            'jueves_hora_final'=>'required|date_format:H:i:s',
            'viernes_hora_inicial'=>'required|date_format:H:i:s',
            'viernes_hora_final'=>'required|date_format:H:i:s',
            'sabado_hora_inicial'=>'required|date_format:H:i:s',
            'sabado_hora_final'=>'required|date_format:H:i:s',
            'domingo_hora_inicial'=>'required|date_format:H:i:s',
            'domingo_hora_final'=>'required|date_format:H:i:s',
            'festivo_hora_inicial'=>'required|date_format:H:i:s',
            'festivo_hora_final'=>'required|date_format:H:i:s',
        ]);

            if ($v_horasv->fails())
            {
                return redirect()->back()->withErrors($v->errors());
            }

        }
         if($is_new){
            $user->nombre=$request->get('nombre');
            $user->correo=$request->get('email');
            $user->password=$request->get('password');
            $user->cargo=$request->get('cargo');
            $user->identificacion=$request->get('identificacion');


            $user->save();
            //$user->create($request->all());
         }else{
            $user->update($request->all());
         }
       

        return view('users.new')->with(['user'=>$user]);
    }
}
