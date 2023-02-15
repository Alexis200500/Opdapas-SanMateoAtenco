<?php

namespace App\Http\Controllers;

use App\Models\ficha_usuario;
use App\Models\User;
use App\Models\usuarios;
use App\Models\barrio;
use Illuminate\Http\Request;
use PDF;
use function Ramsey\Uuid\v1;

class FichaController extends Controller
{
    public function altaficha ($id)
    {
        $id_usuario = auth()->id();
        $datos_usuarios = User::where('id', $id_usuario)->first();

        // $usuarios = usuarios::where('id',$id)->first();

        $usuarios = usuarios::withTrashed()
            ->join('barrios', 'usuarios.id_barrio', '=', 'barrios.id_barrio')
            ->where('id', $id)
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

            ->first();


        $barrios = barrio::all();

        return view('Ficha/altaficha')
            ->with('datos_usuario', $datos_usuarios)
            ->with('usuarios', $usuarios)
            ->with('barrios', $barrios);
    }
    public function reporteficha(Request $request)
    {
        $texto = trim($request->get('texto'));
        $id_usuario = auth()->id();
        $datos_usuarios = User::where('id', $id_usuario)->first();

        $fichas = ficha_usuario::withTrashed()
            ->join('barrios', 'ficha_usuarios.id_barrio', '=', 'barrios.id_barrio')
            ->select(
            'ficha_usuarios.id_ficha',
            'ficha_usuarios.nombre_completo_ficha',
            'ficha_usuarios.fecha_ficha',
            'ficha_usuarios.email_ficha',
            'ficha_usuarios.status_ficha',
            'ficha_usuarios.id_barrio',
            'barrios.nombre_barrio as barrio'
            )
            ->orderby('id_ficha', 'asc')
             ->where('ficha_usuarios.nombre_completo_ficha', 'LIKE', '%' . $texto . '%')
            ->orWhere('ficha_usuarios.id_ficha', 'LIKE', '%' . $texto . '%')
            ->paginate(10);



        return view('Ficha.reporteficha', compact('texto'))
            ->with('datos_usuario', $datos_usuarios)
            ->with('fichas', $fichas);
    }

    public function guardaficha(Request $request)
    {

        $this->validate($request, [
            'nombre_completo_ficha' => 'required',
            'fecha_ficha' => 'required',
            'edad_ficha' => 'required',
            'sexo_ficha' => 'required',
            'email_ficha' => 'required',
            'num_casa_ficha' => 'required',
            'celular_ficha' => 'required',
            'calle_ficha' => 'required',
            'id_barrio' => 'required',
            'numero_domicilio_ficha' => 'required',
            'numero_inmueble_ficha' => 'required',
            'id' => 'required',
            'status_ficha' => 'required',
            'ine_ficha' => 'required',
            'curp_ficha' => 'required',
            'comprobante_ficha' => 'required',
            'maps_ficha' => 'required'
        ]);

        $file_ine = $request->file('ine_ficha');
        if ($file_ine != "") {
            $ldate = date('Ymd_His_');
            $imagen_ine   = $file_ine->getClientOriginalName();
            $imagen3  = $ldate . $imagen_ine;
            \Storage::disk('local')->put($imagen3, \File::get($file_ine));
        } else {
            $imagen3 = 'sin_foto.jpg';
        }
        $file_comdom = $request->file('comprobante_ficha');
        if ($file_comdom != "") {
            $ldate = date('Ymd_His_');
            $imagen_comdom   = $file_comdom->getClientOriginalName();
            $imagen4  = $ldate . $imagen_comdom;
            \Storage::disk('local')->put($imagen4, \File::get($file_comdom));
        } else {
            $imagen4 = 'sin_foto.jpg';
        }

        $fichas = new ficha_usuario();
        $fichas->nombre_completo_ficha = $request->nombre_completo_ficha;
        $fichas->fecha_ficha = $request->fecha_ficha;
        $fichas->edad_ficha = $request->edad_ficha;
        $fichas->sexo_ficha = $request->sexo_ficha;
        $fichas->email_ficha = $request->email_ficha;
        $fichas->num_casa_ficha = $request->num_casa_ficha;
        $fichas->celular_ficha = $request->celular_ficha;
        $fichas->calle_ficha = $request->calle_ficha;
        $fichas->id_barrio = $request->id_barrio;
        $fichas->numero_domicilio_ficha = $request->numero_domicilio_ficha;
        $fichas->numero_inmueble_ficha = $request->numero_inmueble_ficha;
        $fichas->id = $request->id;
        $fichas->status_ficha = $request->status_ficha;
        $fichas->ine_ficha = $imagen3;
        $fichas->curp_ficha = $request->curp_ficha;
        $fichas->comprobante_ficha = $imagen4;
        $fichas->maps_ficha = $request->maps_ficha;
        $fichas->save();

        alert()->success('¡Usuario agregado!', "El usuarios fue agregado correctamente.")->persistent("Cerrar");
        return redirect()->route('reporteficha');
        // echo "Usuario agregado";
    }

    
    public function fichapdf($id_ficha){
        
        //  $pdf = PDF::loadView('Ficha.ficha_pdf');
        //  return $pdf->stream('ficha_pdf');
  
      
              $fichas= ficha_usuario::where('id_ficha', $id_ficha)->first();
              $pdf = PDF::loadView('Ficha.ficha_pdf', compact('fichas'));
              return $pdf->stream('ficha.pdf');
  
      
      }
}
