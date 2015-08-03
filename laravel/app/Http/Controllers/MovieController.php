<?php namespace Cinema\Http\Controllers;

use Cinema\Http\Requests;
use Cinema\Http\Requests\MoviesCreateRequest;
use Cinema\Http\Requests\MoviesUpdateRequest;
use Cinema\Http\Controllers\Controller;
use Cinema\Movie;
use Session;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class MovieController extends Controller {
/*  
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('admin');
        $this->beforeFilter('@find',['only' => ['edit','update','destroy']]);
    }*/

    public function find(Route $route){
        $this->movie = movie::find($route->getParameter('movie'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {

        // $users = User::with('roles')->get();

        $movies = Movie::all();

        return view('movie.index', compact('movies'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('movie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {   
        Movie::create([
            'name' =>$request['name'],
            'path' =>$request['path'],
            'cast' =>$request['cast'],
            'direction' =>$request['direction'],
            'duration' =>$request['duration'],
            'genre_id' =>$request['genre_id'],
            ]);

    return Redirect('/movie')->with('message','store');
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
        return view('movie.edit',['movie'=>$this->movie]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(MovieUpdateRequest $request)
    {
        $this->movie->fill($request->all());
        $this->movie->save();

        Session::flash('message','Pelicula Editada Correctamente');
        return Redirect::to('/movie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy()
    {
        $this->movie->delete();
        Session::flash('message','Pelicula Eliminada Correctamente');
        return Redirect::to('/movie');
    }

}
