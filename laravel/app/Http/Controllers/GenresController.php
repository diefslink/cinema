<?php namespace Cinema\Http\Controllers;

use Cinema\Http\Requests;
use Cinema\Http\Requests\GenresCreateRequest;
use Cinema\Http\Requests\GenresUpdateRequest;
use Cinema\Http\Controllers\Controller;
use Cinema\Genre;
use Session;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class GenresController extends Controller {
/*  
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('admin');
        $this->beforeFilter('@find',['only' => ['edit','update','destroy']]);
    }*/

    public function find(Route $route){
        $this->genre = genre::find($route->getParameter('genero'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {

        // $users = User::with('roles')->get();

        $genres = Genre::all();

        return view('genero.index', compact('genres'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('genero.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {   
        Genre::create([
            'genre' =>$request['genre'],
            ]);

    return Redirect('/genero')->with('message','store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit()
    {
        return view('genero.edit',['genre'=>$this->genre]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(GenreUpdateRequest $request)
    {
        $this->genre->fill($request->all());
        $this->genre->save();

        Session::flash('message','Genero Editado Correctamente');
        return Redirect::to('/genero');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy()
    {
        $this->genre->delete();
        Session::flash('message','Genero Eliminado Correctamente');
        return Redirect::to('/genero');
    }

}
