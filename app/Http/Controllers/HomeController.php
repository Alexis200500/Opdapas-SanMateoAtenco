<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\barrio;
use App\Models\tipo_solicitud;
use App\Models\solicitud;
use App\Models\detalle_solicitud;
use App\Models\User;
Use Alert;
use App\Models\tipo_material;
use App\Models\solicituds_materials;
use App\Models\detalle_solicituds_material;
use App\Models\tipousuarios;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $barrios = barrio::all();
        $tipo_solicituds = tipo_solicitud::all();
        $id_usuario = auth()->id();
        $datos_usuario = User::where('id', $id_usuario)->first();
        $tipouser = tipousuarios::where('id_tipo_usuario', $datos_usuario->roluser)->first();

        return view('inicio2')
        ->with('barrios', $barrios)
            ->with('tipo_solicituds', $tipo_solicituds)
            ->with('datos_usuario', $datos_usuario)
            ->with('tipouser', $tipouser);
    }

    public function alta()
    {
        $barrios = barrio::all();
        $tipo_solicituds = tipo_solicitud::all();
        $id_usuario = auth()->id();
        $datos_usuario = User::where('id', $id_usuario)->first();
        $tipouser = tipousuarios::where('id_tipo_usuario', $datos_usuario->roluser)->first();

        return view('altausers')
        ->with('barrios', $barrios)
            ->with('tipo_solicituds', $tipo_solicituds)
            ->with('datos_usuario', $datos_usuario)
            ->with('tipouser', $tipouser);
    }


    public function dashboard()
    {

        return view('index');
    }

    public function solicitarpipa()
    {
        $barrios = barrio::all();
        $tipo_solicituds = tipo_solicitud::all();
        $id_usuario = auth()->id();
        $datos_usuario = User::where('id',$id_usuario)->first();
        $tipouser = tipousuarios::where('id_tipo_usuario', $datos_usuario->roluser)->first();

        return view('solicitarpipa')
            ->with('barrios', $barrios)
            ->with('tipo_solicituds', $tipo_solicituds)
            ->with('datos_usuario', $datos_usuario)
            ->with('tipouser', $tipouser);
    }

    public function pet()
    {
        $barrios = barrio::all();
        $tipo_solicituds = tipo_solicitud::all();
        $id_usuario = auth()->id();
        $datos_usuario = User::where('id', $id_usuario)->first();
        $tipouser = tipousuarios::where('id_tipo_usuario', $datos_usuario->roluser)->first();

        return view('peticion')
        ->with('barrios', $barrios)
            ->with('tipo_solicituds', $tipo_solicituds)
            ->with('datos_usuario', $datos_usuario)
            ->with('tipouser', $tipouser);
    }

    public function tablero_user()
    {
        $barrios = barrio::all();
        $tipo_solicituds = tipo_solicitud::all();
        $id_usuario = auth()->id();
        $datos_usuario = User::where('id',$id_usuario)->first();

        return view('tablero')
            ->with('barrios', $barrios)
            ->with('tipo_solicituds', $tipo_solicituds)
            ->with('datos_usuario', $datos_usuario);
    }

    public function perfilusuario(){

        $id_usuario = auth()->id();
        $datos_usuario = User::where('id',$id_usuario)->first();
        return view('perfilusuario')
                    ->with('datos_usuario', $datos_usuario);
    }

    public function getPDF($id){
        $solicitud = solicitud::where('id_solicitud', $id)->first();
        $id_barrio = $solicitud->id_barrio;
        $nombre_barrio = barrio::where('id_barrio', $id_barrio)->first();
        $detalles = detalle_solicitud::where('id_solicitud', $id)->first();
        $tipo = tipo_solicitud::all();
        $pdf = PDF::loadView('pdf', compact('solicitud', 'detalles', 'tipo', 'nombre_barrio'));
        return $pdf->stream('prueba.pdf');
    }

    public function autorizarsolicitud(Request $request){
        $autorizar = $request->autorizado;
        $id_solicitud = $request->id_solicitud;

        detalle_solicitud::where('id_solicitud', $id_solicitud)->update(['status_detalle' => $autorizar]);
        alert()->success('¡Solicitud Actulizada!', "La solictud fue actulizada correctamente.")->persistent("Cerrar");
        return redirect()->route('solicitud');
    }

    public function guardarSolicitud(Request $request){

        $this->validate($request,['nombre_completo_solicitud'=>'required',
                                'telefono_solicitud'=>'required',
                                'calle_solicitud'=>'required',
                                'nombre_domicilio_solicitud'=>'required',
                                'numero_inmueble'=>'required',
                                'numero_domicilio_solicitud'=>'required',
                                'id_barrio'=>'required',
                                'status_detalle'=>'required',
                                'fecha_detalle'=>'required',
                                'descripcion_detalle'=>'required',
                                'litros_detalle'=>'required',
                                'id_tipo_solicitud'=>'required']);

        $id_usuario = auth()->id();

        $solicitud = new solicitud;
        $solicitud -> nombre_completo_solicitud = $request->nombre_completo_solicitud;
        $solicitud -> telefono_solicitud = $request->telefono_solicitud;
        $solicitud -> calle_solicitud = $request->calle_solicitud;
        $solicitud -> nombre_domicilio_solicitud = $request->nombre_domicilio_solicitud;
        $solicitud -> numero_inmueble = $request->numero_inmueble;
        $solicitud -> numero_domicilio_solicitud = $request->numero_domicilio_solicitud;
        $solicitud -> id_barrio = $request->id_barrio;
        $solicitud -> id = $id_usuario;
        $solicitud -> save();

        $ultima_solicitud = solicitud::where('id', $id_usuario)->orderBy('id_solicitud','DESC')->first();

        $detalle_solicitud = new detalle_solicitud;
        $detalle_solicitud -> status_detalle = $request->status_detalle;
        $detalle_solicitud -> fecha_detalle = $request->fecha_detalle;
        $detalle_solicitud -> descripcion_detalle = $request->descripcion_detalle;
        $detalle_solicitud -> litros_detalle = $request->litros_detalle;
        $detalle_solicitud -> id_tipo_solicitud = $request->id_tipo_solicitud;
        $detalle_solicitud -> id_solicitud = $ultima_solicitud->id_solicitud;
        $detalle_solicitud -> save();

        alert()->success('¡Solicitud Enviada!', "La solictud fue enviada correctamente.")->persistent("Cerrar");
        return redirect()->route('home');


    }

    public function status(){

        $id_usuario = auth()->id();

        $mis_solicitudes = solicitud::join('detalle_solicituds', 'solicituds.id_solicitud', '=', 'detalle_solicituds.id_solicitud')
        ->orderBy('solicituds.id_solicitud','DESC')
        ->paginate(50)
        ->appends(request()->query());

        $tipo_solicitud = tipo_solicitud::all();

        $datos_usuario = User::where('id',$id_usuario)->first();

        $tipouser = tipousuarios::where('id_tipo_usuario', $datos_usuario->roluser)->first();

        return view('solicitud')
            ->with('mis_solicitudes', $mis_solicitudes)
            ->with('tipo_solicitud', $tipo_solicitud)
            ->with('datos_usuario', $datos_usuario)
            ->with('tipouser', $tipouser);
    }

    public function solicitudmat(){
        $barrios = barrio::all();
        $tipo_materials = tipo_material::all();
        $id_usuario = auth()->id();
        $datos_usuario = User::where('id',$id_usuario)->first();

        return view('solicitudmaterial')
            ->with('barrios', $barrios)
            ->with('tipo_materials', $tipo_materials)
            ->with('datos_usuario', $datos_usuario);
    }

    public function guardamaterial(Request $request){
        $this->validate($request,['nombre_completo_material'=>'required',
                                'telefono_material'=>'required',
                                'nombre_domicilio_material'=>'required',
                                'id_barrio'=>'required',
                                'numero_inmueble'=>'required',
                                'calle_material'=>'required',
                                'numero_domicilio_material'=>'required',
                                'nombre_barrio'=>'required',
                                'status_detalle'=>'required',
                                'fecha_detalle'=>'required',
                                'id_tipo_material'=>'required',
                                'descripcion_detalle'=>'required',
                                'cantidad_material'=>'required']);

        $id_usuario = auth()->id();

        $solicitud = new solicituds_materials;
        $solicitud -> nombre_completo_material = $request->nombre_completo_material;
        $solicitud -> telefono_material = $request->telefono_material;
        $solicitud -> nombre_domicilio_material = $request->nombre_domicilio_material;
        $solicitud -> nombre_barrio = $request->nombre_barrio;
        $solicitud -> calle_material = $request->calle_material;
        $solicitud -> numero_inmueble = $request->numero_inmueble;
        $solicitud -> numero_domicilio_material = $request->numero_domicilio_material;
        $solicitud -> id = $id_usuario;
        $solicitud -> save();

        $ultima_solicitud = solicituds_materials::where('id', $id_usuario)->orderBy('id_material','DESC')->first();

        $detalle_solicitud = new detalle_solicituds_material;
        $detalle_solicitud -> status_detalle = $request->status_detalle;
        $detalle_solicitud -> fecha_detalle = $request->fecha_detalle;
        $detalle_solicitud -> descripcion_detalle = $request->descripcion_detalle;
        $detalle_solicitud -> cantidad_material = $request->cantidad_material;
        $detalle_solicitud -> id_tipo_material = $request->id_tipo_material;
        $detalle_solicitud -> id_material = $ultima_solicitud->id_material;
        $detalle_solicitud -> save();

        alert()->success('¡Solicitud Enviada!', "La solictud fue enviada correctamente.")->persistent("Cerrar");
        return redirect()->route('home');
    }

}
