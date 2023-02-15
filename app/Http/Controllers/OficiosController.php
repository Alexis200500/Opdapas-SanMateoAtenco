<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\oficios;
use App\Models\tareas;
use PDF;
use Alert;
use Carbon\Carbon;
use App\Models\User;
use DB;

class OficiosController extends Controller
{
    public function oficios(){
        
        $id_usuario = auth()->id();
        $datos_usuario = User::where('id',$id_usuario)->first();
        return view('oficio')
        ->with('datos_usuario', $datos_usuario);
    }
    public function tablaoficios(){
        
        $id_usuario = auth()->id();
        $datos_usuario = User::where('id',$id_usuario)->first();
        $tiempo = Carbon::now()->format('Y-m-d'); 
        $oficio = oficios::all();
        $oficios = oficios::select('fecha_limite_oficio')->get();


        $array = array($oficios);

        for($i = 0; $i == count($array); $i++){
            $array[$i];
             }
        $arre = $array[$i]; 
        
        if($arre == $tiempo){
            $arre;
        }
        
          
        return view('tablaoficios')
        ->with('datos_usuario', $datos_usuario)
        ->with('oficios', $oficios)
        ->with('oficio', $oficio)
        ->with('arre', $arre)
        ->with('tiempo', $tiempo);
        

       
    }

    public function aceptaroficio(Request $request){
        
        $aceptar_oficio = $request->aceptaroficio;
        $id_oficio = $request->id_oficio;

        $id_usuario = auth()->id();
        $datos_usuario = User::where('id',$id_usuario)->first();

        switch($datos_usuario->roluser) {
            case('user1'):       
                oficios::where('id_oficio', $id_oficio)->update(['usuario1_oficio' => $aceptar_oficio,
                                                                 'estatus_acep_oficio' => "Yellow"]); 
            break;
 
            case('user2'):   
                oficios::where('id_oficio', $id_oficio)->update(['usuario2_oficio' => $aceptar_oficio,
                                                                 'estatus_acep_oficio' => "Green",
                                                                 'estatus_oficio' => "Completo"]); 
            break;
 
            default:
        }

        alert()->success('¡Aceptado con exito!', "El oficio ha sido aceptado correctamente.")->persistent("Cerrar");
        return redirect()->route('consulta');
    }

    public function guardaroficio(Request $request){
        
        $this->validate($request,['lugar_y_fecha'=>'required',
                                'numero_oficio'=>'required',
                                'asunto'=>'required',
                                'contenido'=>'required']);

        $fecha_actual = date("Y-m-d");
        $hora_actual = date("h:i a");
        $fecha_limite = date("Y-m-d",strtotime($fecha_actual."+ 5 days"));

        $oficio = new oficios;
        $oficio -> lugar_y_fecha = $request->lugar_y_fecha;
        $oficio -> numero_oficio = $request->numero_oficio;
        $oficio -> numero_oficio = $request->numero_oficio;
        
        $oficio -> estatus_oficio = "1";
        $oficio -> estatus_acep_oficio = "Red";
        $oficio -> usuario1_oficio = "No";
        $oficio -> usuario2_oficio = "No";
        $oficio -> fecha_entrega_oficio = $fecha_actual;
        $oficio -> fecha_limite_oficio = $fecha_limite;
        
        $oficio -> contenido = $request->contenido;
        $oficio -> asunto = $request->asunto;
        $oficio -> save();

        alert()->success('¡Oficio creado con exito!', "Se ha enviado la solictud de oficio correctamente.")->persistent("Cerrar");
        return redirect()->route('home');
    }

    public function consulta(){

        $id_usuario = auth()->id();
        $datos_usuario = User::where('id',$id_usuario)->first();
        $oficios = oficios::all();
        $user = User::all();

        return view('consulta_oficio')
            ->with('oficios', $oficios)
            ->with('user', $user)
            ->with('datos_usuario', $datos_usuario);
    }

    public function oficio_PDF($id_oficio){
        $oficio = oficios::where('id_oficio', $id_oficio)->first();
        $pdf = PDF::loadView('oficio_pdf', compact('oficio'));
        return $pdf->stream('oficio.pdf');
    }

    public function cronograma(){
        $id_usuario = auth()->id();
        $datos_usuario = User::where('id',$id_usuario)->first();
        //$oficios = oficios::all();

         /*$fecha_inicio_actual = date("Y-m-d");
        $hora_actual = date("h:i a");
        $fecha_fin = date("Y-m-d",strtotime($fecha_inicio_actual."+ 5 days"));

        $oficio = new oficios;
        $oficio -> fecha_inicio_actividad = $fecha_inicio_actual;
        $oficio -> fecha_limite_actividad = $fecha_fin;*/


            return view('cronograma')
                //->with('oficios', $oficios)
                ->with('datos_usuario', $datos_usuario);
        
    }

    public function tareas(){
        $id_usuario = auth()->id();
        $datos_usuario = User::where('id',$id_usuario)->first();
        $tareas = tareas::all();
        $fecha_entrega = tareas::select('fecha_tarea')->get();
        $fecha_act = Carbon::now();
        $hora = Carbon::now();
        
   


        return view('tareas')
        ->with('datos_usuario', $datos_usuario)
        ->with('fecha_act', $fecha_act)
        ->with('hora', $hora)
        ->with('tareas', $tareas);
    }

    public function guardartareas(Request $request){
        $this->validate($request,['personal_tarea'=>'required',
                                  'nombre_tarea'=>'required',
                                  'descripcion_tarea'=>'required',
                                  'fecha_tarea'=>'required',
                                  'hora_tarea'=>'required']);

       
        
        
        $tareas = new tareas;
        $tareas -> personal_tarea = $request->personal_tarea;
        $tareas -> nombre_tarea = $request->nombre_tarea;
        $tareas -> descripcion_tarea = $request->descripcion_tarea;
        $tareas -> fecha_tarea = $request->fecha_tarea;
        $fecha = $tareas -> hora_tarea = $request->hora_tarea;
        
        $tareas -> save();
        
        alert()->success('¡Oficio creado con exito!', "Se ha enviado la solictud de oficio correctamente.")->persistent("Cerrar");
        return redirect()->route('home');
    }

}
