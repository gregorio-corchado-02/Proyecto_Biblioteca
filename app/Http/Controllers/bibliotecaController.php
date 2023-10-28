<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\validadorBiblioteca;


class bibliotecaController extends Controller
{
    public function metodoWelcome(){
        return view('welcome');
    }

    public function metodoResgistrar(){
        return view('registrar');
    }

    public function metodoGuardar(validadorBiblioteca $req){
        
        $validated = $req->validate([
            'txtIsbn' => 'required|numeric|min:13',
            $nombreLibro = $req->input('txtTitulo'),
            'txtTitulo' => 'required',
            'txtAutor' => 'required',
            'txtPagina' => 'required|numeric',
            'txtEditorial' => 'required',
            'txtEmail' => 'required|email',
         ]);
      
         return redirect('/resgistrar')->with('confirmacion','Todo correcto: Libro ' .$nombreLibro.  ' guardado');
        }
}
