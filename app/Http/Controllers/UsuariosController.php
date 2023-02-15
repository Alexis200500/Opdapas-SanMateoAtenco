<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\barrio;
use App\Models\usuarios;
use App\Imports\ImportUsuarios;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use App\Exports\UsersExport;


class UsuariosController extends Controller
{



    public function altausuario()
    {
        $id_usuario = auth()->id();
        $datos_usuarios = User::where('id', $id_usuario)->first();

        $barrios = barrio::all();
        return view('Usuarios.alta')
            ->with('datos_usuario', $datos_usuarios)
            ->with('barrios', $barrios);
    }

    public function guardarusuario(Request $request)
    {

        $this->validate($request, [
            'nombre' => 'required',
            'fecha_n' => 'required',
            'edad' => 'required',
            'sexo' => 'required',
            'image',
            'ine',
            'curp',
            'rfc',
            'comdom',
            'facebook',
            'google',
            'email' => 'required',
            'num_casa' => 'required',
            'celular' => 'required',
            'calle' => 'required',
            'id_barrio' => 'required',
            'num_dom' => 'required',
            'num_inmueble' => 'required',
            'status' => 'required',
            'estado_civil' => 'required',
            'tipo_inm' => 'required',
            'observacion' => 'required'
        ]);

        $file = $request->file('image');
        if ($file != "") {
            $ldate = date('Ymd_His_');
            $imagen   = $file->getClientOriginalName();
            $imagen2  = $ldate . $imagen;
            \Storage::disk('local')->put($imagen2, \File::get($file));
        } else {
            $imagen2 = 'sin_foto.jpg';
        }
        $file_ine = $request->file('ine');
        if ($file_ine != "") {
            $ldate = date('Ymd_His_');
            $imagen_ine   = $file_ine->getClientOriginalName();
            $imagen3  = $ldate . $imagen_ine;
            \Storage::disk('local')->put($imagen3, \File::get($file_ine));
        } else {
            $imagen3 = 'sin_foto.jpg';
        }
        $file_comdom = $request->file('comdom');
        if ($file_comdom != "") {
            $ldate = date('Ymd_His_');
            $imagen_comdom   = $file_comdom->getClientOriginalName();
            $imagen4  = $ldate . $imagen_comdom;
            \Storage::disk('local')->put($imagen4, \File::get($file_comdom));
        } else {
            $imagen4 = 'sin_foto.jpg';
        }

        $usuarios = new usuarios;
        $usuarios->id = $request->id;
        $usuarios->nombre = $request->nombre;
        $usuarios->fecha_n = $request->fecha_n;
        $usuarios->edad = $request->edad;
        $usuarios->sexo = $request->sexo;
        $usuarios->image = $imagen2;
        $usuarios->ine = $imagen3;
        $usuarios->curp = $request->curp;
        $usuarios->rfc = $request->rfc;
        $usuarios->comdom = $imagen4;
        $usuarios->facebook = $request->facebook;
        $usuarios->google = $request->google;
        $usuarios->email = $request->email;
        $usuarios->num_casa = $request->num_casa;
        $usuarios->celular = $request->celular;
        $usuarios->calle = $request->calle;
        $usuarios->id_barrio = $request->id_barrio;
        $usuarios->num_dom = $request->num_dom;
        $usuarios->num_inmueble = $request->num_inmueble;
        $usuarios->status = $request->status;
        $usuarios->estado_civil = $request->estado_civil;
        $usuarios->tipo_inm = $request->tipo_inm;
        $usuarios->observacion = $request->observacion;

        $usuarios->latitud = '0';
        // $usuarios->latitud = $request->latitud;
        $usuarios->longitud = '0';
        // $usuarios->longitud = $request->longitud;
        $usuarios->calle2 = $request->calle2;

        $usuarios->save();

        alert()->success('¡Usuario agregado!', "El usuarios fue agregado correctamente.")->persistent("Cerrar");
        return redirect()->route('reporteusuarios');
        // echo "Usuario agregado";
    }

    public function reporteusuarios(Request $request)
    {
        $texto = trim($request->get('texto'));
        $id_usuario = auth()->id();
        $datos_usuarios = User::where('id', $id_usuario)->first();

        $usuarios = usuarios::withTrashed()
            ->join('barrios', 'usuarios.id_barrio', '=', 'barrios.id_barrio')
            ->select(
                'usuarios.id',
                'usuarios.nombre',
                'usuarios.celular',
                'usuarios.id_barrio',
                'usuarios.num_inmueble',
                'usuarios.calle',
                'usuarios.num_dom',
                'usuarios.image',
                'usuarios.status',
                'usuarios.created_at',
                'usuarios.deleted_at',
                'barrios.nombre_barrio as barrio'
            )
            ->orderby('id', 'asc')
            ->where('usuarios.nombre', 'LIKE', '%' . $texto . '%')
            ->orWhere('usuarios.num_inmueble', 'LIKE', '%' . $texto . '%')
            ->paginate(10);

        $contaru = Usuarios::where('id', $request->barr)->count();

        return view('Usuarios/reporteusuarios', compact('texto'))
            ->with('datos_usuario', $datos_usuarios)
            ->with('usuarios', $usuarios);
    }

    public function editarusuario($id)
    {
        $id_usuario = auth()->id();
        $datos_usuarios = User::where('id', $id_usuario)->first();

        // $usuarios = usuarios::where('id',$id)->first();

        $usuarios = usuarios::withTrashed()
            ->join('barrios', 'usuarios.id_barrio', '=', 'barrios.id_barrio')
            ->select(
                'usuarios.id',
                'usuarios.nombre',
                'usuarios.fecha_n',
                'usuarios.edad',
                'usuarios.sexo',
                'usuarios.image',
                'usuarios.ine',
                'usuarios.curp',
                'usuarios.rfc',
                'usuarios.comdom',
                'usuarios.facebook',
                'usuarios.google',
                'usuarios.email',
                'usuarios.num_casa',
                'usuarios.celular',
                'usuarios.calle',
                'usuarios.id_barrio',
                'barrios.nombre_barrio as barrio',
                'usuarios.num_dom',
                'usuarios.num_inmueble',
                'usuarios.status',
                'usuarios.estado_civil',
                'usuarios.tipo_inm',
                'usuarios.observacion'
            )
            ->where('id', $id)
            ->get();

            $locations = DB::table('usuarios')->where('id',$id)->get();

        $barrios = barrio::all();

        return view('Usuarios/editarusuario',compact('locations'))
            ->with('datos_usuario', $datos_usuarios)
            ->with('usuarios', $usuarios[0])
            ->with('barrios', $barrios);
    }

    public function perfilusuario($id)
    {
        $id_usuario = auth()->id();
        $datos_usuarios = User::where('id', $id_usuario)->first();

        // $usuarios = usuarios::where('id',$id)->first();

        $usuarios = usuarios::withTrashed()
            ->join('barrios', 'usuarios.id_barrio', '=', 'barrios.id_barrio')
            ->select(
                'usuarios.id',
                'usuarios.nombre',
                'usuarios.fecha_n',
                'usuarios.edad',
                'usuarios.sexo',
                'usuarios.image',
                'usuarios.ine',
                'usuarios.curp',
                'usuarios.rfc',
                'usuarios.comdom',
                'usuarios.facebook',
                'usuarios.google',
                'usuarios.email',
                'usuarios.num_casa',
                'usuarios.celular',
                'usuarios.calle',
                'usuarios.id_barrio',
                'barrios.nombre_barrio as barrio',
                'usuarios.num_dom',
                'usuarios.num_inmueble',
                'usuarios.status',
                'usuarios.estado_civil',
                'usuarios.tipo_inm',
                'usuarios.observacion'
            )
            ->where('id', $id)
            ->get();


        $barrios = barrio::all();

        return view('Usuarios/perfilusuario')
            ->with('datos_usuario', $datos_usuarios)
            ->with('usuarios', $usuarios[0])
            ->with('barrios', $barrios);
    }
    public function cambiousuario(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'fecha_n' => 'required',
            'edad' => 'required',
            'sexo' => 'required',
            'image',
            'ine',
            'curp',
            'rfc',
            'comdom',
            'facebook',
            'google',
            'email' => 'required',
            'num_casa' => 'required',
            'celular' => 'required',
            'calle' => 'required',
            'id_barrio' => 'required',
            'num_dom' => 'required',
            'num_inmueble' => 'required',
            'status' => 'required',
            'estado_civil' => 'required',
            'tipo_inm' => 'required',
            'observacion' => 'required'
        ]);

        $file = $request->file('image');
        if ($file != "") {
            $ldate = date('Ymd_His_');
            $imagen   = $file->getClientOriginalName();
            $imagen2  = $ldate . $imagen;
            \Storage::disk('local')->put($imagen2, \File::get($file));
        } else {
            $imagen2 = 'sin_foto.jpg';
        }
        $file_ine = $request->file('ine');
        if ($file_ine != "") {
            $ldate = date('Ymd_His_');
            $imagen_ine   = $file_ine->getClientOriginalName();
            $imagen3  = $ldate . $imagen_ine;
            \Storage::disk('local')->put($imagen3, \File::get($file_ine));
        } else {
            $imagen3 = 'sin_foto.jpg';
        }
        $file_comdom = $request->file('comdom');
        if ($file_comdom != "") {
            $ldate = date('Ymd_His_');
            $imagen_comdom   = $file_comdom->getClientOriginalName();
            $imagen4  = $ldate . $imagen_comdom;
            \Storage::disk('local')->put($imagen4, \File::get($file_comdom));
        } else {
            $imagen4 = 'sin_foto.jpg';
        }
        $usuarios = usuarios::find($request->id);
        $usuarios->id = $request->id;
        $usuarios->nombre = $request->nombre;
        $usuarios->fecha_n = $request->fecha_n;
        $usuarios->edad = $request->edad;
        $usuarios->sexo = $request->sexo;
        $usuarios->image = $imagen2;
        $usuarios->ine = $imagen3;
        $usuarios->curp = $request->curp;
        $usuarios->rfc = $request->rfc;
        $usuarios->comdom = $imagen4;
        $usuarios->facebook = $request->facebook;
        $usuarios->google = $request->google;
        $usuarios->email = $request->email;
        $usuarios->num_casa = $request->num_casa;
        $usuarios->celular = $request->celular;
        $usuarios->calle = $request->calle;
        $usuarios->id_barrio = $request->id_barrio;
        $usuarios->num_dom = $request->num_dom;
        $usuarios->num_inmueble = $request->num_inmueble;
        $usuarios->status = $request->status;
        $usuarios->estado_civil = $request->estado_civil;
        $usuarios->tipo_inm = $request->tipo_inm;
        $usuarios->observacion = $request->observacion;
        $usuarios->save();

        alert()->success('¡Usuario modificado!', "El usuarios fue modificado correctamente.")->persistent("Cerrar");
        return redirect()->route('reporteusuarios');
    }
    ///////////////////////////////////////////////////////////////////////////
    public function reporteusers(Request $request)
    {

        $id_usuario = auth()->id();
        $datos_usuarios = User::where('id', $id_usuario)->first();

        $user = User::select(
            'id',
            'name',
            'email',
            'roluser',
            'foto_user',
        )
            ->get();


        return view('reporteusers')
            ->with('datos_usuario', $datos_usuarios)
            ->with('user', $user);
    }

    public function editaruser($id)
    {
        $idd = auth()->id();
        $datos_usuarios = User::where('id', $idd)->first();

        // $usuarios = usuarios::where('id',$id)->first();

        $user = User::select(
            'id',
            'name',
            'email',
            'roluser',
            'foto_user',
        )
        ->where('id', $id)
            ->get();


        return view('editaruser')
            ->with('datos_usuario', $datos_usuarios)
            ->with('user', $user[0]);
    }

    public function cambiouser(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'roluser' => 'required',
            'foto_user' => 'required',
        ]);

        $file = $request->file('foto_user');
        if ($file != "") {
            $ldate = date('Ymd_His_');
            $imagen_user   = $file->getClientOriginalName();
            $imagen5  = $ldate . $imagen_user;
            \Storage::disk('local')->put($imagen5, \File::get($file));
        } else {
            $imagen5 = 'sin_foto.jpg';
        }

        $user = User::find($request->id);
        $user->id = $request->id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->roluser = $request->roluser;
        $user->foto_user =  $imagen5;

        $user->save();

        alert()->success('¡Usuario modificado!', "El usuarios fue modificado correctamente.")->persistent("Cerrar");
        return redirect()->route('reporteusers');
    }
    public function editarperfil()
    {
        $idd = auth()->id();
        $datos_usuario = User::where('id', $idd)->first();



        return view('editarperfil')
        ->with('datos_usuario', $datos_usuario);
    }

    public function cambioperfil(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'roluser' => 'required',
            'foto_user' => 'required',
        ]);

        $file = $request->file('foto_user');
        if ($file != "") {
            $ldate = date('Ymd_His_');
            $imagen_user   = $file->getClientOriginalName();
            $imagen5  = $ldate . $imagen_user;
            \Storage::disk('local')->put($imagen5, \File::get($file));
        } else {
            $imagen5 = 'sin_foto.jpg';
        }

        $user = User::find($request->id);
        $user->id = $request->id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->roluser = $request->roluser;
        $user->foto_user =  $imagen5;

        $user->save();

        alert()->success('¡Usuario modificado!', "El usuarios fue modificado correctamente.")->persistent("Cerrar");
        return redirect()->route('perfiluser');
    }
    public function perfiluser()
    {
        $idd = auth()->id();
        $datos_usuario = User::where('id', $idd)->first();



        return view('perfiluser')
            ->with('datos_usuario', $datos_usuario);
    }

    /////////////////////////////////////////////////////////////////

    // ACTIVAR, DESACTIVAR Y ELIMINAR USUARIOS
    public function desactivar_usuario($id)
    {
        $usuarios = usuarios::find($id);
        $usuarios->delete();
        alert()->success('¡Usuario desactivado!', "El usuarios fue desactivado.")->persistent("Cerrar");
        return redirect()->route('reporteusuarios');
    }

    public function activar_usuario($id)
    {
        $usuarios = usuarios::withTrashed()->where('id', $id)->restore();
        alert()->success('¡Usuario activado!', "El usuarios fue activado.")->persistent("Cerrar");
        return redirect()->route('reporteusuarios');
    }


    // IMPORTAR A MYSQL
    function importar(Request $request)
    {
        // php artisan make:import AlumnosImport --model=Alumnos hacer una importacion
        $this->validate($request, [
            'archivo' => 'required|mimes:xls,xlsx,csv'
        ]);
        Excel::import(new ImportUsuarios, $request->archivo);
        return redirect()->route('reporteusuarios');
    }

    public function reporteusuarios2(Request $request)
    {
        $id_usuario = auth()->id();
        $datos_usuarios = User::where('id', $id_usuario)->first();

        $usuarios = DB::SELECT("SELECT 	usuarios.nombre,
                                usuarios.fecha_n,
                                usuarios.edad,
                                usuarios.sexo,

                                usuarios.image,
                                usuarios.ine,
                                usuarios.curp,
                                usuarios.rfc,
                                usuarios.comdom ,
                                usuarios.facebook,
                                usuarios.google,
                                usuarios.email,
                                usuarios.num_casa,
                                usuarios.celular,
                                usuarios.calle,

                                usuarios.id_barrio,
                                barrios.nombre_barrio,

                                usuarios.num_dom,
                                usuarios.num_inmueble,
                                usuarios.status,
                                usuarios.estado_civil,
                                usuarios.tipo_inm,
                                usuarios.observacion
                                FROM usuarios, barrios
                                WHERE usuarios.id_barrio = barrios.id_barrio");

        $barrios = barrio::all();
        $contar = Usuarios::count();

        $brus = Usuarios::select(DB::raw("COUNT(*) as count"))
            ->where("id_barrio")
            ->groupBy(DB::raw("nombre_barrio"))
            ->pluck('count');


        return view('home2', compact('brus'))
            ->with('usuarios', $usuarios)
            ->with('datos_usuario', $datos_usuarios)
            ->with('contar', $contar)
            ->whit('brus', $brus)
            ->with('barrios', $barrios);
    }

    public function buscar_barrio(Request $request)
    {
        $barr = $request['barr'];

        $barrios = barrio::all();
        $id_usuario = auth()->id();
        $datos_usuarios = User::where('id', $id_usuario)->first();

        // $usuarios = DB::SELECT("SELECT usuarios.nombre,
        //                         usuarios.fecha_n,
        //                         usuarios.edad,
        //                         usuarios.sexo,
        //                         usuarios.email,
        //                         usuarios.num_casa,
        //                         usuarios.celular,
        //                         usuarios.calle,

        //                         usuarios.id_barrio,
        //                         barrios.nombre_barrio,

        //                         usuarios.num_dom,
        //                         usuarios.num_inmueble,
        //                         usuarios.status,
        //                         usuarios.estado_civil,
        //                         usuarios.tipo_inm,
        //                         usuarios.observacion
        //                         FROM usuarios, barrios
        //                         WHERE usuarios.id_barrio = barrios.id_barrio
        //                         AND usuarios.id_barrio = $barr");
        $usuarios = Usuarios::join('barrios', 'usuarios.id_barrio', '=', 'barrios.id_barrio')
            ->select('*', 'barrios.nombre_barrio')
            ->where("usuarios.id_barrio", "=", $barr)
            ->paginate(10);
        $contar = Usuarios::where('id_barrio', $request->barr)->count();


        // $usuarios = DB::SELECT("SELECT COUNT(*) FROM usuarios WHERE id_barrio = $barr");

        // return($contar);
        // return($usuarios);
        // return($barrios);
        // return($barr);
        return view('home2')
            ->with('usuarios', $usuarios)
            ->with('datos_usuario', $datos_usuarios)
            ->with('barrios', $barrios)
            ->with('contar', $contar)
            ->with('barr', $barr);
    }
    public function bajar()
    {
        return Excel::download(new UsersExport, 'Usuarios-list.xlsx');
    }
}
