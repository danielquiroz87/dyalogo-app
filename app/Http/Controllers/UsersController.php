<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuari;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;


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

    public function edit($id)
    { 
        //Ejemplo pagina 404
        $user=Usuari::find($id);
        if($user){
            return view('users.edit')->with(['user'=>$user]);
        }
        else{
             return view('404');
        }
    }

    public function delete($id){

        $user=Usuari::find($id);

        if($user){
            $user->delete();

             \Session::flash('flash_message_delete','Usuario eliminado exitosamente!.');

             return redirect()->route('users');
        }
        else{
             return view('404');
        }
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
        if($is_new){
            $v = Validator::make($request->all(), [
                'nombre' => 'required|max:255',
                'email'=>'required|email|max:255',
                'cargo'=>'required|max:20',
                'identificacion'=>'required|max:20',
                'password'=>'required|max:20',
                'file'=>'required|max:40000|mimes:jpg,jpeg,png'
            ]);    
        }else{

            $v = Validator::make($request->all(), [
                'nombre' => 'required|max:255',
                'email'=>'required|email|max:255',
                'cargo'=>'required|max:20',
                'identificacion'=>'required|max:20',
                'password'=>'nullable|max:20',
                'file'=>'nullable|max:40000|mimes:jpg,jpeg,png'
            ]);
        }
        

        if ($v->fails())
        {
            return redirect()->back()->withErrors($v->errors());
        }

        //Validamos si es agente para validar los horarios
        if($request->input('cargo')=='agente'){

            $v_horas=Validator::make($request->all(), [
            'lunes_hora_inicial' => 'required|max:9',
            'lunes_hora_final' => 'required|max:9',
            'martes_hora_inicial'=>'required|max:9',
            'martes_hora_final'=>'required|max:9',
            'miercoles_hora_inicial'=>'required|max:9',
            'miercoles_hora_final'=>'required|max:9',
            'jueves_hora_inicial'=>'required|max:9',
            'jueves_hora_final'=>'required|max:9',
            'viernes_hora_inicial'=>'required|max:9',
            'viernes_hora_final'=>'required|max:9',
            'sabado_hora_inicial'=>'required|max:9',
            'sabado_hora_final'=>'required|max:9',
            'domingo_hora_inicial'=>'required|max:9',
            'domingo_hora_final'=>'required|max:9',
            'festivo_hora_inicial'=>'required|max:9',
            'festivo_hora_final'=>'required|max:9',
        ]);

            if ($v_horas->fails())
            {
                return redirect()->back()->withErrors($v_horas->errors());
            }

        }

          //Movemos el archivo
          $file = $request->file('file');
          if($file){

            $new_file_name=uniqid().'-'.$file->getClientOriginalName();
            $path='img/users/';
            $path_file=$path.$new_file_name;
            $file->move($path,$new_file_name);
            $user->foto=$path_file;
            
          }
          
            $user->nombre=$request->get('nombre');
            $user->email=$request->get('email');
            $user->cargo=$request->get('cargo');
            $user->identificacion=$request->get('identificacion');

            //Si el password es diferente de vacio lo cambiamos
            if($request->get('password')!=""){
                $user->password=Hash::make($request->get('password'));
            
            }
            //cargo es agente guardar los horarios
            if($request->input('cargo')=='agente'){

                $dias=array('lunes','martes','miercoles','jueves','viernes','sabado','domingo','festivo');

                foreach ($dias as $key => $dia) {
                    $str_inicial=$dia."_hora_inicial";
                    $str_final=$dia."_hora_final";
                    $user->$str_inicial=$request->input($str_inicial);
                    $user->$str_final=$request->input($str_final);

                }

            }

            $user->save();
           
         if($is_new){
            //$user->create($request->all());
            \Session::flash('flash_message','Usuario agregado exitosamente!.');

             return redirect()->route('users');

         }else{
            \Session::flash('flash_message','Usuario actualizado exitosamente!.');

            return redirect()->back();

         }
       

    }
}
