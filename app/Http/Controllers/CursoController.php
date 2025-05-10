<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
 
class CursoController extends Controller
{
    // link ou endereço da API
    private $urlApi = 'http://127.0.0.1:8001/api/cursos';
 
    public function index() {
        $response = Http::get($this->urlApi);
        $data = $response->json();
        return view('cursos.index', ['cursos' => $data['data'] ?? [], 'message' => $data['message'] ?? '']);
    }
 
    public function show($id)
    {
        $response = Http::get("$this->urlApi/$id");
 
        $curso = $response->json()['data'] ?? null;
 
        if ($curso) {
            return view('curso.show', compact('curso'));
        }
 
        return redirect()->route('curso.index')->with('error', 'curso não encontrado!');
    }
 
    public function create() {
        return view('curso.create');
    }
 
    public function store(Request $request) {
        Http::post($this->urlApi, $request->only('nome', 'descricao', 'cargaHorariaCurso', 'valorCurso'));
        return redirect()->route('cursos.index');
    }
 
    public function edit($id) {
        $response = Http::get("$this->urlApi/$id");
        $curso = $response->json()['data'] ?? null;
 
        return view('curso.edit', compact('curso'));
    }
 
    public function update(Request $request, $id) {
        Http::put("$this->urlApi/$id", $request->only('nome', 'descricao', 'cargaHorariaCurso', 'valorCurso'));
        return redirect()->route('cursos.index');
    }
 
    public function destroy($id) {
        Http::delete("$this->urlApi/$id");
        return redirect()->route('cursos.index');
    }
 
}  
 