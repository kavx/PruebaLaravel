<?php

namespace ProyectoLaravel\Http\Controllers;

use ProyectoLaravel\empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use View;
use DB;
use Session;

class EmpleadoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        //$empleados=empleado::get();
        //dd($empleados);
        $empleados = DB::table("empleados")->get();
        return view('prueba.index',compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
        return view('empleado.crear');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $empleados=new empleado;
      $empleados->nombres=$request->get('nombres');
      $empleados->apellidos=$request->get('apellidos');
      $empleados->telefono=$request->get('telefono');
      $empleados->correo=$request->get('correo');
      $empleados->save();
      return Redirect::to('empleados');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \ProyectoLaravel\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \ProyectoLaravel\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(empleado $empleado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \ProyectoLaravel\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
       /* $validator = Validator::make(Input::all(), $this->rules);
        if($validator->fails()){

            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));

        }else{*/
            $emple = empleado::findOrFail($id);
            $emple->nombres = $request->nombres;
            $emple->apellidos = $request->apellidos;
            $emple->telefono = $request->telefono;
            $emple->correo = $request->correo;
            $emple->save();
            return response()->json($emple);
      //  }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \ProyectoLaravel\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
   
    public function destroy(Request $request, $id)
    {
         
            $emple = empleado::findOrFail($id);
            $emple->delete();
            return response()->json($emple);
        }
        
       
    

}
