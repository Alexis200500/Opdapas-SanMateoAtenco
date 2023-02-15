<?php

namespace App\Http\Controllers;

use App\Models\areas;
use Illuminate\Http\Request;
use App\Models\peticiones;
use App\Models\responsables;
use App\Models\tipo_solicitud;
use App\Models\User;
use App\Models\barrio;
use App\Models\tipousuarios;
use App\Models\usuarios;
use Illuminate\Support\Facades\DB;

class PeticionesController extends Controller
{
    public function pet()
    {

        $barrios = barrio::all();
        $areas = areas::all();
        $responsables = responsables::all();
        $tipo_solicituds = tipo_solicitud::all();
        $id_usuario = auth()->id();
        $datos_usuario = User::where('id', $id_usuario)->first();
        $tipouser = tipousuarios::where('id_tipo_usuario', $datos_usuario->roluser)->first();

        return view('peticion')
        ->with('barrios', $barrios)
            ->with('areas', $areas)
            ->with('responsables', $responsables)
            ->with('tipo_solicituds', $tipo_solicituds)
            ->with('datos_usuario', $datos_usuario)
            ->with('tipouser', $tipouser);
    }


    public function guardarPeticion(Request $request)
    {

        $this->validate($request, [
            'nombre_completo_peticion' => 'required',
            'telefono_peticion' => 'required',
            'id_barrio' => 'required',
            'calle_peticion' => 'required',
            'numero_domicilio_peticion' => 'required',
            'numero_inmueble_peticion' => 'required',
            'fecha_peticion' => 'required',
            'id' => 'required',
            'descripcion_detalle_peticion' => 'required',
            'id_responsable' => 'required',
            'id_area' => 'required',
            'fecha_detalle_peticion' => 'required',
            'prioridad_peticion' => 'required',
            'status_peticion' => 'required',
            'status_info_peticion' => 'required',
            'desarrollo_info_peticion' => 'required',
            'reporte_info_peticion' => 'required',
            'validacion_info_peticion' => 'required',
            'avance_peticion' => 'required',
            'respuesta_peticion' => 'required',
            'ovservacion_peticion' => 'required',
            'respuest_peticion' => 'required'

        ]);

        $solicitud = new peticiones();
        $solicitud->nombre_completo_peticion = $request->nombre_completo_peticion;
        $solicitud->telefono_peticion = $request->telefono_peticion;
        $solicitud->id_barrio = $request->id_barrio;
        $solicitud->calle_peticion = $request->calle_peticion;
        $solicitud->numero_domicilio_peticion = $request->numero_domicilio_peticion;
        $solicitud->numero_inmueble_peticion = $request->numero_inmueble_peticion;
        $solicitud->fecha_peticion = $request->fecha_peticion;
        $solicitud->id = $request->id;
        $solicitud->descripcion_detalle_peticion = $request->descripcion_detalle_peticion;
        $solicitud->id_responsable = $request->id_responsable;
        $solicitud->id_area = $request->id_area;
        $solicitud->fecha_detalle_peticion = $request->fecha_detalle_peticion;
        $solicitud->prioridad_peticion = $request->prioridad_peticion;
        $solicitud->status_peticion = $request->status_peticion;
        $solicitud->status_info_peticion = $request->status_info_peticion;
        $solicitud->desarrollo_info_peticion = $request->desarrollo_info_peticion;
        $solicitud->reporte_info_peticion = $request->reporte_info_peticion;
        $solicitud->validacion_info_peticion = $request->validacion_info_peticion;
        $solicitud->avance_peticion = $request->avance_peticion;
        $solicitud->respuesta_peticion = $request->respuesta_peticion;
        $solicitud->ovservacion_peticion = $request->ovservacion_peticion;
        $solicitud->respuest_peticion = $request->respuest_peticion;
        $solicitud->save();

        alert()->success('¡Solicitud Enviada!', "La solictud fue enviada correctamente.")->persistent("Cerrar");
        return redirect()->route('reportepeticion');
    }


    public function reportepeticion(Request $request)
    {
        $texto = trim($request->get('texto'));
        $id_usuario = auth()->id();
        $datos_usuarios = User::where('id', $id_usuario)->first();

        $peticiones = peticiones::withTrashed()
            ->join('barrios', 'peticiones.id_barrio', '=', 'barrios.id_barrio')
            ->join('usuarios', 'peticiones.id', '=', 'usuarios.id')
            ->join('responsables', 'peticiones.id_responsable', '=', 'responsables.id_responsable')
            ->join('areas', 'peticiones.id_area', '=', 'areas.id_area')
            ->select('peticiones.id_peticion',
            'peticiones.nombre_completo_peticion',
            'peticiones.telefono_peticion',
            'peticiones.id_barrio',
            'peticiones.calle_peticion',
            'peticiones.numero_domicilio_peticion',
            'peticiones.numero_inmueble_peticion',
            'peticiones.fecha_peticion',
            'peticiones.id',
            'peticiones.descripcion_detalle_peticion',
            'peticiones.id_responsable',
            'peticiones.id_area',
            'peticiones.fecha_detalle_peticion',
            'peticiones.prioridad_peticion',
            'peticiones.status_peticion',
            'peticiones.status_info_peticion',
            'peticiones.desarrollo_info_peticion',
            'peticiones.reporte_info_peticion',
            'peticiones.validacion_info_peticion',
            'peticiones.avance_peticion',
            'peticiones.respuesta_peticion',
            'peticiones.ovservacion_peticion',
            'barrios.nombre_barrio as barrio')
            ->orderby('numero_inmueble_peticion', 'asc')
            ->where('peticiones.nombre_completo_peticion', 'LIKE', '%' . $texto . '%')
            ->orWhere('peticiones.numero_inmueble_peticion', 'LIKE', '%' . $texto . '%')
            ->paginate(10);

        $barrios = barrio::all();
        $areas = areas::all();
        $responsables = responsables::all();

        return view('reportepeticion', compact('texto'))
        ->with('barrios', $barrios)
            ->with('areas', $areas)
            ->with('responsables', $responsables)
            ->with('datos_usuario', $datos_usuarios)
            ->with('peticiones', $peticiones);
    }


    //// AUTOCOMPLETADO ////
    public function vista(){
        $id_usuario = auth()->id();
        $datos_usuarios = User::where('id', $id_usuario)->first();
        $barrios = barrio::all();
        $areas = areas::all();
        $responsables = responsables::all();
        return view ('busqueda')
        ->with('barrios', $barrios)
            ->with('areas', $areas)
            ->with('responsables', $responsables)
            ->with('datos_usuarios', $datos_usuarios);

        $this->validate($request, [
            'nombre_completo_peticion' => 'required',
            'telefono_peticion' => 'required',
            'id_barrio' => 'required',
            'calle_peticion' => 'required',
            'numero_domicilio_peticion' => 'required',
            'numero_inmueble_peticion' => 'required',
            'fecha_peticion' => 'required',
            'id' => 'required',
            'descripcion_detalle_peticion' => 'required',
            'id_responsable' => 'required',
            'id_area' => 'required',
            'fecha_detalle_peticion' => 'required',
            'prioridad_peticion' => 'required',
            'status_peticion' => 'required',
            'status_info_peticion' => 'required',
            'desarrollo_info_peticion' => 'required',
            'reporte_info_peticion' => 'required',
            'validacion_info_peticion' => 'required',
            'avance_peticion' => 'required',
            'respuesta_peticion' => 'required',
            'ovservacion_peticion' => 'required',
            'respuest_peticion' => 'required'

        ]);

        $solicitud = new peticiones();
        $solicitud->nombre_completo_peticion = $request->nombre_completo_peticion;
        $solicitud->telefono_peticion = $request->telefono_peticion;
        $solicitud->id_barrio = $request->id_barrio;
        $solicitud->calle_peticion = $request->calle_peticion;
        $solicitud->numero_domicilio_peticion = $request->numero_domicilio_peticion;
        $solicitud->numero_inmueble_peticion = $request->numero_inmueble_peticion;
        $solicitud->fecha_peticion = $request->fecha_peticion;
        $solicitud->id = $request->id;
        $solicitud->descripcion_detalle_peticion = $request->descripcion_detalle_peticion;
        $solicitud->id_responsable = $request->id_responsable;
        $solicitud->id_area = $request->id_area;
        $solicitud->fecha_detalle_peticion = $request->fecha_detalle_peticion;
        $solicitud->prioridad_peticion = $request->prioridad_peticion;
        $solicitud->status_peticion = $request->status_peticion;
        $solicitud->status_info_peticion = $request->status_info_peticion;
        $solicitud->desarrollo_info_peticion = $request->desarrollo_info_peticion;
        $solicitud->reporte_info_peticion = $request->reporte_info_peticion;
        $solicitud->validacion_info_peticion = $request->validacion_info_peticion;
        $solicitud->avance_peticion = $request->avance_peticion;
        $solicitud->respuesta_peticion = $request->respuesta_peticion;
        $solicitud->ovservacion_peticion = $request->ovservacion_peticion;
        $solicitud->respuest_peticion = $request->respuest_peticion;
        $solicitud->save();

        alert()->success('¡Solicitud Enviada!', "La solictud fue enviada correctamente.")->persistent("Cerrar");
        return redirect()->route('reportepeticion');
    }

    public function consultar(Request $request)
    {
        $id_usuario = auth()->id();
        $datos_usuarios = User::where('id', $id_usuario)->first();
        $crit = $request['criterio'];
        $barrios = barrio::all();
        $areas = areas::all();
        $responsables = responsables::all();


        // $usuarios = DB::SELECT("SELECT * FROM usuarios WHERE usuarios.id AND
        // (num_inmueble LIKE  '%$crit%')");

        $usuarios = DB::select("SELECT
        usuarios.id,
        usuarios.nombre,
        usuarios.fecha_n,
        usuarios.edad,
        usuarios.sexo,
        usuarios.email,
        usuarios.num_casa,
        usuarios.celular,
        usuarios.calle,

        usuarios.id_barrio,
        barrios.nombre_barrio as barrio,

        usuarios.num_dom,
        usuarios.num_inmueble,
        usuarios.status,
        usuarios.estado_civil,
        usuarios.tipo_inm,
        usuarios.observacion
        FROM usuarios, barrios
        WHERE usuarios.id_barrio = barrios.id_barrio
        AND (num_inmueble LIKE  '%$crit%')");


        //   return($usuarios);
        return view("busqueda", ['usuarios' => $usuarios, 'crit' => $crit])
            ->with('barrios', $barrios)
            ->with('areas', $areas)
            ->with('responsables', $responsables)
            ->with('datos_usuario', $datos_usuarios);
    }

    public function buscar()
    {
        return view('peticiones.buscar');
    }

    public function buscar_inmueble(Request $request)
    {
        $buscar = $request['buscar'];
          $responsables = responsables::all();

        $usuarios = usuarios::where('num_inmueble', '=', $buscar)
            ->with('responsables', $responsables)
            ->get();
        // return($usuarios);

        return view('peticiones.peticion')
        ->with('usuarios', $usuarios[0]);
    }
    public function guardar_peticion(Request $request)
    {
        $this->validate($request, [
            'nombre_completo_peticion' => 'required',
            'telefono_peticion' => 'required',
            'id_barrio' => 'required',
            'calle_peticion' => 'required',
            'numero_domicilio_peticion' => 'required',
            'numero_inmueble_peticion' => 'required',
            'fecha_peticion' => 'required',
            'id' => 'required',
            'descripcion_detalle_peticion' => 'required',
            'id_responsable' => 'required',
            'id_area' => 'required',
            'fecha_detalle_peticion' => 'required',
            'prioridad_peticion' => 'required',
            'status_peticion' => 'required',
            'status_info_peticion' => 'required',
            'desarrollo_info_peticion' => 'required',
            'reporte_info_peticion' => 'required',
            'validacion_info_peticion' => 'required',
            'avance_peticion' => 'required',
            'respuesta_peticion' => 'required',
            'ovservacion_peticion' => 'required',
            'respuest_peticion' => 'required'

        ]);

        $solicitud = new peticiones();
        $solicitud->id = $request->id;
        $solicitud->nombre_completo_peticion = $request->nombre_completo_peticion;
        $solicitud->telefono_peticion = $request->telefono_peticion;
        $solicitud->id_barrio = $request->id_barrio;
        $solicitud->calle_peticion = $request->calle_peticion;
        $solicitud->numero_domicilio_peticion = $request->numero_domicilio_peticion;
        $solicitud->numero_inmueble_peticion = $request->numero_inmueble_peticion;
        $solicitud->fecha_peticion = $request->fecha_peticion;
        $solicitud->id_responsable = $request->id_responsable;
        $solicitud->id_area = $request->id_area;
        $solicitud->fecha_detalle_peticion = $request->fecha_detalle_peticion;
        $solicitud->prioridad_peticion = $request->prioridad_peticion;

        $solicitud->descripcion_detalle_peticion = $request->descripcion_detalle_peticion;
        $solicitud->status_peticion = $request->status_peticion;
        $solicitud->status_info_peticion = $request->status_info_peticion;
        $solicitud->desarrollo_info_peticion = $request->desarrollo_info_peticion;
        $solicitud->reporte_info_peticion = $request->reporte_info_peticion;
        $solicitud->validacion_info_peticion = $request->validacion_info_peticion;
        $solicitud->avance_peticion = $request->avance_peticion;
        $solicitud->respuesta_peticion = $request->respuesta_peticion;
        $solicitud->ovservacion_peticion = $request->ovservacion_peticion;
        $solicitud->respuest_peticion = $request->respuest_peticion;
        $solicitud->save();

        // dd($request);
        // return redirect()->route('reportepeticion_usuario');
        alert()->success('¡Solicitud Enviada!', "La solictud fue enviada correctamente.")->persistent("Cerrar");
        return redirect()->route('reportepeticion');
    }


    public function consultar2(Request $request)
    {



        $id_usuario = auth()->id();
        $datos_usuarios = User::where('id', $id_usuario)->first();
        $crit = $request['criterio'];
        $barrios = barrio::all();
        $areas = areas::all();
        $responsables = responsables::all();


        $usuarios = DB::SELECT("SELECT * FROM usuarios WHERE usuarios.id AND
        (num_inmueble LIKE  '%$crit%')");


        ///print_r($usuarios);
        return view("busqueda", ['usuarios' => $usuarios, 'crit' => $crit])
            ->with('barrios', $barrios)
            ->with('areas', $areas)
            ->with('responsables', $responsables)
            ->with('datos_usuario', $datos_usuarios);

        $this->validate($request, [
            'nombre_completo_peticion' => 'required',
            'telefono_peticion' => 'required',
            'id_barrio' => 'required',
            'calle_peticion' => 'required',
            'numero_domicilio_peticion' => 'required',
            'numero_inmueble_peticion' => 'required',
            'fecha_peticion' => 'required',
            'id' => 'required',
            'descripcion_detalle_peticion' => 'required',
            'id_responsable' => 'required',
            'id_area' => 'required',
            'fecha_detalle_peticion' => 'required',
            'prioridad_peticion' => 'required',
            'status_peticion' => 'required',
            'status_info_peticion' => 'required',
            'desarrollo_info_peticion' => 'required',
            'reporte_info_peticion' => 'required',
            'validacion_info_peticion' => 'required',
            'avance_peticion' => 'required',
            'respuesta_peticion' => 'required',
            'ovservacion_peticion' => 'required',
            'respuest_peticion' => 'required'

        ]);

        $solicitud = new peticiones();
        $solicitud->nombre_completo_peticion = $request->nombre_completo_peticion;
        $solicitud->telefono_peticion = $request->telefono_peticion;
        $solicitud->id_barrio = $request->id_barrio;
        $solicitud->calle_peticion = $request->calle_peticion;
        $solicitud->numero_domicilio_peticion = $request->numero_domicilio_peticion;
        $solicitud->numero_inmueble_peticion = $request->numero_inmueble_peticion;
        $solicitud->fecha_peticion = $request->fecha_peticion;
        $solicitud->id = $request->id;
        $solicitud->descripcion_detalle_peticion = $request->descripcion_detalle_peticion;
        $solicitud->id_responsable = $request->id_responsable;
        $solicitud->id_area = $request->id_area;
        $solicitud->fecha_detalle_peticion = $request->fecha_detalle_peticion;
        $solicitud->prioridad_peticion = $request->prioridad_peticion;
        $solicitud->status_peticion = $request->status_peticion;
        $solicitud->status_info_peticion = $request->status_info_peticion;
        $solicitud->desarrollo_info_peticion = $request->desarrollo_info_peticion;
        $solicitud->reporte_info_peticion = $request->reporte_info_peticion;
        $solicitud->validacion_info_peticion = $request->validacion_info_peticion;
        $solicitud->avance_peticion = $request->avance_peticion;
        $solicitud->respuesta_peticion = $request->respuesta_peticion;
        $solicitud->ovservacion_peticion = $request->ovservacion_peticion;
        $solicitud->respuest_peticion = $request->respuest_peticion;
        $solicitud->save();

        alert()->success('¡Solicitud Enviada!', "La solictud fue enviada correctamente.")->persistent("Cerrar");
        return redirect()->route('reportepeticion');
    }


    public function editarreporte($id_peticion)
    {
        $id_usuario = auth()->id();
        $datos_usuarios = User::where('id', $id_usuario)->first();

        // $usuarios = usuarios::where('id',$id)->first();

        $peticiones = peticiones::withTrashed()
            ->join('barrios', 'peticiones.id_barrio', '=', 'barrios.id_barrio')
            ->join('usuarios', 'peticiones.id', '=', 'usuarios.id')
            ->join('responsables', 'peticiones.id_responsable', '=', 'responsables.id_responsable')
            ->join('areas', 'peticiones.id_area', '=', 'areas.id_area')
            ->select(
                'peticiones.id_peticion',
                'peticiones.nombre_completo_peticion',
                'peticiones.telefono_peticion',
                'peticiones.id_barrio',
                'peticiones.calle_peticion',
                'peticiones.numero_domicilio_peticion',
                'peticiones.numero_inmueble_peticion',
                'peticiones.fecha_peticion',
                'peticiones.id',
                'peticiones.descripcion_detalle_peticion',
                'peticiones.id_responsable',
                'peticiones.id_area',
                'peticiones.fecha_detalle_peticion',
                'peticiones.prioridad_peticion',
                'peticiones.status_peticion',
                'peticiones.status_info_peticion',
                'peticiones.desarrollo_info_peticion',
                'peticiones.reporte_info_peticion',
                'peticiones.validacion_info_peticion',
                'peticiones.avance_peticion',
                'peticiones.respuesta_peticion',
                'peticiones.ovservacion_peticion',
                'barrios.nombre_barrio as barrio'
            )

            ->where('id_peticion', $id_peticion)
            ->get();

        $barrios = barrio::all();
        $usuarios = usuarios::all();
        $responsables = responsables::all();
        $areas = areas::all();

        return view('editarreporte')
            ->with('barrios', $barrios)
             ->with('datos_usuario', $datos_usuarios)
            ->with('peticiones', $peticiones[0])
            ->with('usuarios', $usuarios)
            ->with('responsables', $responsables)
            ->with('areas', $areas);
    }

    public function cambioreporte(Request $request)
    {
        $this->validate($request, [
            'nombre_completo_peticion' => 'required',
            'telefono_peticion' => 'required',
            'id_barrio' => 'required',
            'calle_peticion' => 'required',
            'numero_domicilio_peticion' => 'required',
            'numero_inmueble_peticion' => 'required',
            'fecha_peticion' => 'required',
            'id' => 'required',
            'descripcion_detalle_peticion' => 'required',
            'id_responsable' => 'required',
            'id_area' => 'required',
            'fecha_detalle_peticion' => 'required',
            'prioridad_peticion' => 'required',
            'status_peticion' => 'required',
            'status_info_peticion' => 'required',
            'desarrollo_info_peticion' => 'required',
            'reporte_info_peticion' => 'required',
            'validacion_info_peticion' => 'required',
            'avance_peticion' => 'required',
            'respuesta_peticion' => 'required',
            'ovservacion_peticion' => 'required',
            'respuest_peticion' => 'required'

        ]);

        $peticiones = peticiones::find($request->id_peticion);
        $peticiones->id_peticion = $request->id_peticion;
        $peticiones->nombre_completo_peticion = $request->nombre_completo_peticion;
        $peticiones->telefono_peticion = $request->telefono_peticion;
        $peticiones->id_barrio = $request->id_barrio;
        $peticiones->calle_peticion = $request->calle_peticion;
        $peticiones->numero_domicilio_peticion = $request->numero_domicilio_peticion;
        $peticiones->numero_inmueble_peticion = $request->numero_inmueble_peticion;
        $peticiones->fecha_peticion = $request->fecha_peticion;
        $peticiones->id = $request->id;
        $peticiones->descripcion_detalle_peticion = $request->descripcion_detalle_peticion;
        $peticiones->id_responsable = $request->id_responsable;
        $peticiones->id_area = $request->id_area;
        $peticiones->fecha_detalle_peticion = $request->fecha_detalle_peticion;
        $peticiones->prioridad_peticion = $request->prioridad_peticion;
        $peticiones->status_peticion = $request->status_peticion;
        $peticiones->status_info_peticion = $request->status_info_peticion;
        $peticiones->desarrollo_info_peticion = $request->desarrollo_info_peticion;
        $peticiones->reporte_info_peticion = $request->reporte_info_peticion;
        $peticiones->validacion_info_peticion = $request->validacion_info_peticion;
        $peticiones->avance_peticion = $request->avance_peticion;
        $peticiones->respuesta_peticion = $request->respuesta_peticion;
        $peticiones->ovservacion_peticion = $request->ovservacion_peticion;
        $peticiones->respuest_peticion = $request->respuest_peticion;
        $peticiones->save();

        alert()->success('¡Solicitud Modificada!', "La Peticion fue modificada correctamente.")->persistent("Cerrar");
        return redirect()->route('reportepeticion');
    }

    //PETIOCIONES DE ALEXIS MORALES GOMEZ

    function reportepeticion_usuario($id){

         $usuarios = usuarios::find($id);
        //  return $usuarios;

        $peticiones = peticiones::all('*')
        ->where('id',$id);
        //  return $peticiones;

        $id_usuario = auth()->id();
        $datos_usuarios = User::where('id', $id_usuario)->first();


        return view('peticiones.peticiones_usuarios')
            ->with('usuarios',$usuarios)
            ->with('datos_usuario', $datos_usuarios)
            ->with('peticiones',$peticiones);
    }

    public function peticion_usuario($id){
        $usuarios = usuarios::find($id);

        $id_usuario = auth()->id();
        $datos_usuarios = User::where('id', $id_usuario)->first();

        $barrios = barrio::all();
        $usuarios = usuarios::find($id);
        $responsables = responsables::all();
        $areas = areas::all();


        return view('peticiones.peticiones_alta')
        ->with('responsables',$responsables)
            ->with('barrios', $barrios)
        ->with('datos_usuario', $datos_usuarios)
        ->with('areas',$areas)
        ->with('usuarios',$usuarios);
    }

    public function guardarpeticion_usuario(Request $request){

        $this->validate($request, [
            'nombre_completo_peticion' => 'required',
            'telefono_peticion' => 'required',
            'id_barrio' => 'required',
            'calle_peticion' => 'required',
            'numero_domicilio_peticion' => 'required',
            'numero_inmueble_peticion' => 'required',
            'fecha_peticion' => 'required',
            'id' => 'required',
            'descripcion_detalle_peticion' => 'required',
            'id_responsable' => 'required',
            'id_area' => 'required',
            'fecha_detalle_peticion' => 'required',
            'prioridad_peticion' => 'required',
            'status_peticion' => 'required',
            'status_info_peticion' => 'required',
            'desarrollo_info_peticion' => 'required',
            'reporte_info_peticion' => 'required',
            'validacion_info_peticion' => 'required',
            'avance_peticion' => 'required',
            'respuesta_peticion' => 'required',
            'ovservacion_peticion' => 'required',
            'respuest_peticion' => 'required'

        ]);

        $solicitud = new peticiones();
        $solicitud->nombre_completo_peticion = $request->nombre_completo_peticion;
        $solicitud->telefono_peticion = $request->telefono_peticion;
        $solicitud->id_barrio = $request->id_barrio;
        $solicitud->calle_peticion = $request->calle_peticion;
        $solicitud->numero_domicilio_peticion = $request->numero_domicilio_peticion;
        $solicitud->numero_inmueble_peticion = $request->numero_inmueble_peticion;
        $solicitud->fecha_peticion = $request->fecha_peticion;
        $solicitud->id = $request->id;
        $solicitud->descripcion_detalle_peticion = $request->descripcion_detalle_peticion;
        $solicitud->id_responsable = $request->id_responsable;
        $solicitud->id_area = $request->id_area;
        $solicitud->fecha_detalle_peticion = $request->fecha_detalle_peticion;
        $solicitud->prioridad_peticion = $request->prioridad_peticion;
        $solicitud->status_peticion = $request->status_peticion;
        $solicitud->status_info_peticion = $request->status_info_peticion;
        $solicitud->desarrollo_info_peticion = $request->desarrollo_info_peticion;
        $solicitud->reporte_info_peticion = $request->reporte_info_peticion;
        $solicitud->validacion_info_peticion = $request->validacion_info_peticion;
        $solicitud->avance_peticion = $request->avance_peticion;
        $solicitud->respuesta_peticion = $request->respuesta_peticion;
        $solicitud->ovservacion_peticion = $request->ovservacion_peticion;
        $solicitud->respuest_peticion = $request->respuest_peticion;
        $solicitud->save();
        alert()->success('¡Solicitud Enviada!', "La solictud fue enviada correctamente.")->persistent("Cerrar");
        return redirect()->route('reportepeticion');
    }


}
