<?php

namespace App\Http\Controllers;


use App\Models\areas;
use App\Models\responsables;
use App\Models\tipo_solicitud;
use App\Models\User;
use App\Models\barrio;
use App\Models\form_solicitud;
use App\Models\tipousuarios;
use App\Models\usuarios;
use PDF;
use Illuminate\Http\Request;

use DB;
use DateTime;

use Carbon\Carbon;

class FormatosController extends Controller
{
    private $pagination = 5;
    public function oficio_PDF()
    {
        // $oficio = oficios::where('id_oficio', $id_oficio)->first();
         $pdf = PDF::loadView('Formatos_de_solisitud.formato_de_solisitud');
        return $pdf->stream('formato_de_solisitud.pdf');
    }

    public function solisitud()
    {
        $usuarios = usuarios::all();
        $barrios = barrio::all();
        $areas = areas::all();
        $responsables = responsables::all();
        $tipo_solicituds = tipo_solicitud::all();
        $id_usuario = auth()->id();
        $datos_usuario = User::where('id', $id_usuario)->first();
        $tipouser = tipousuarios::where('id_tipo_usuario', $datos_usuario->roluser)->first();

        return view('Formatos.formulario_de_solisitud')
        ->with('barrios', $barrios)
            ->with('areas', $areas)
            ->with('responsables', $responsables)
            ->with('tipo_solicituds', $tipo_solicituds)
            ->with('datos_usuario', $datos_usuario)
            ->with('tipouser', $tipouser)
            ->with('usuarios', $usuarios);
    }
    public function reporteformulario(Request $request)
    {
        $texto = trim($request->get('texto'));
        $id_usuario = auth()->id();
        $datos_usuario = User::where('id', $id_usuario)->first();
        $tipouser = tipousuarios::where('id_tipo_usuario', $datos_usuario->roluser)->first();

        $hoy = Carbon::today(); //Aquí se obtiene la fecha de hoy
        $hoy= $hoy->format('Y-m-d');


        $solisitud = form_solicitud::all();
        // $solisitud = form_solisitud::orderBy('id', 'desc')->paginate($this->pagination);

        $solisitud = DB::table('form_solicitud')
        ->selectRaw("form_solicitud.*, DATEDIFF(fecha_limite, '$hoy') AS dias")
        ->orderBy('id','DESC')
        ->paginate(20);


        return view('Formatos.reporteformulario', compact('texto'))
            ->with('solisitud', $solisitud)
            ->with('datos_usuario', $datos_usuario)
            ->with('tipouser', $tipouser);
    }

    public function guardar_formato(Request $request)
    {
      /*   $this->validate($request, [
            'nombre_solisitud' => 'required',
            'representante_solisitud' => 'required',
            'calle_solisitud' => 'required',
            'no_solisitud' => 'required',
            'barrio_solisitud' => 'required',
            'cp_solisitud' => 'required',
            'telefono_solisitud' => 'required',
            'caracater_solisitud' => 'required',
            'calle_in_solisitud' => 'required',
            'no_in_solisitud' => 'required',
            'barrrio_in_solisitud' => 'required',
            'cp_in_solisitud' => 'required',
            'clave_solisitud' => 'required',
            'superficie_pred_solisitud' => 'required',
            'superficie_const_solisitud' => 'required',
            'servicoal' => 'required',
            'motivo_solisitud' => 'required',
            'no_tomas' => 'required',
            'diametro_toma' => 'required',
            'no_bene_toma' => 'required',
            'no_descarga' => 'required',
            'diametro_descarga' => 'required',
            'no_ben_descarga' => 'required',
            'servicio' => 'required'
        ]);

        $solicitud = new form_solisitud();
        $solicitud->nombre_solisitud = $request->nombre_solisitud;
        $solicitud->representante_solisitud = $request->representante_solisitud;
        $solicitud->calle_solisitud = $request->calle_solisitud;
        $solicitud->no_solisitud = $request->no_solisitud;
        $solicitud->barrio_solisitud = $request->barrio_solisitud;
        $solicitud->cp_solisitud = $request->cp_solisitud;
        $solicitud->telefono_solisitud = $request->telefono_solisitud;
        $solicitud->caracater_solisitud = $request->caracater_solisitud;
        $solicitud->calle_in_solisitud = $request->calle_in_solisitud;
        $solicitud->no_in_solisitud = $request->no_in_solisitud;
        $solicitud->barrrio_in_solisitud = $request->barrrio_in_solisitud;
        $solicitud->cp_in_solisitud = $request->cp_in_solisitud;
        $solicitud->clave_solisitud = $request->clave_solisitud;
        $solicitud->superficie_pred_solisitud = $request->superficie_pred_solisitud;
        $solicitud->superficie_const_solisitud = $request->superficie_const_solisitud;
        $solicitud->servicoal = $request->servicoal;
        $solicitud->motivo_solisitud = $request->motivo_solisitud;
        $solicitud->no_tomas = $request->no_tomas;
        $solicitud->diametro_toma = $request->diametro_toma;
        $solicitud->no_bene_toma = $request->no_bene_toma;
        $solicitud->no_descarga = $request->no_descarga;
        $solicitud->diametro_descarga = $request->diametro_descarga;
        $solicitud->no_ben_descarga = $request->no_ben_descarga;
        $solicitud->servicio = $request->servicio;
        $solicitud->save();
 */

 
$fecha_actual = date("Y-m-d");

$fecha_limite = date("Y-m-d",strtotime($fecha_actual."+ 5 days"));

$solicitud = new form_solicitud();
$solicitud->id= $request->id;
$solicitud->nombre_solicitud = $request->nombre_solicitud;
$solicitud->id_responsable = $request->id_responsable;

$solicitud -> fecha_solicitud = $fecha_actual;
$solicitud -> fecha_limite = $fecha_limite;


$solicitud->calle_solicitud = $request->calle_solicitud;
$solicitud->no_solicitud = $request->no_solicitud;

$solicitud->id_barrio = $request->id_barrio;

$solicitud->cp_solicitud = $request->cp_solicitud;
$solicitud->telefono_solicitud = $request->telefono_solicitud;
$solicitud->caracater_solicitud = $request->caracater_solicitud;
$solicitud->calle_in_solicitud = $request->calle_in_solicitud;
$solicitud->no_in_solicitud = $request->no_in_solicitud;

$solicitud->cp_in_solicitud = $request->cp_in_solicitud;
$solicitud->clave_solicitud = $request->clave_solicitud;
$solicitud->id_barrio2 = $request->id_barrio2;
$solicitud->superficie_pred_solicitud = $request->superficie_pred_solicitud;
$solicitud->superficie_const_solicitud = $request->superficie_const_solicitud;
$solicitud->servicoal = $request->servicoal;
$solicitud->motivo_solicitud = $request->motivo_solicitud;
$solicitud->no_tomas = $request->no_tomas;
$solicitud->diametro_toma = $request->diametro_toma;
$solicitud->no_bene_toma = $request->no_bene_toma;
$solicitud->no_descarga = $request->no_descarga;
$solicitud->diametro_descarga = $request->diametro_descarga;
$solicitud->activo = "No";
$solicitud->servicio = $request->servicio;
$solicitud->save();

//dd($request);
alert()->success('Formulario Enviado!', "El formulario fue enviado correctamente.")->persistent("Cerrar");
return redirect()->route('reporteformulario');

        
        // dd($request);
        // return redirect()->route('reportepeticion_usuario');
        alert()->success('Formulario Enviado!', "El formulario fue enviado correctamente.")->persistent("Cerrar");
        return redirect()->route('reporteformulario');
    }

    public function fechas(){
        
        $hoy = Carbon::today(); //Aquí se obtiene la fecha de hoy
        $hoy= $hoy->format('Y-m-d');

        $usuarios = DB::table('form_solicitud')
        ->selectRaw("form_solicitud.*, DATEDIFF(fecha_limite, '$hoy') AS dias")
        ->orderBy('created_at','DESC')
        ->get(); 
        return view('dias')
        ->with('usuarios',$usuarios);  
    }


    public function activar($id)
    {
      $empresa= \DB:: UPDATE("update form_solicitud set activo = 'Si'
      where id= $id");

      return redirect()->route('reporteformulario');
     
    }

    public function formatopdf($id)
    {
        // 
        
        $form_solicitud = form_solicitud::where('id', $id)
        ->join('barrios','form_solicitud.id_barrio','=','barrios.id_barrio')
        ->join('responsables','form_solicitud.id_responsable','=','responsables.id_responsable')
        ->select('form_solicitud.*', 'barrios.nombre_barrio as barrio', 'responsables.nombre_responsable as representante')
        ->first();

        $form_solicitud2 = form_solicitud::where('id', $id)
        ->join('barrios','form_solicitud.id_barrio2','=','barrios.id_barrio')
        ->join('responsables','form_solicitud.id_responsable','=','responsables.id_responsable')
        ->select('form_solicitud.*', 'barrios.nombre_barrio as barrio2', 'responsables.nombre_responsable as representante')
        ->first();

        $pdf = PDF::loadView('Formatos.formatopdf', compact('form_solicitud','form_solicitud2'));
        return $pdf->download('Solicitud.pdf');
        
    }


}







