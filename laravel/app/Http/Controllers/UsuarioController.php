<?php namespace Cinema\Http\Controllers;

use Cinema\Http\Requests;
use Cinema\Http\Requests\UserCreateRequest;
use Cinema\Http\Requests\UserUpdateRequest;
use Cinema\Http\Controllers\Controller;
use Cinema\User;
use Session;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class Usuariocontroller extends Controller {
/*	
	public function __construct(){
		$this->middleware('auth');
		$this->middleware('admin');
		$this->beforeFilter('@find',['only' => ['edit','update','destroy']]);
	}*/

	/*public function find(Route $route){
		$this->user = User::find($route->getParameter('usuario'));
	}*/
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {

        // $users = User::with('roles')->get();

        $users = User::all();

        return view('usuario.index', compact('users'));
}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('usuario.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{	
		User::create([
			'name' =>$request['name'],
			'email' =>$request['email'],
			'password' => bcrypt($request['password']),
			]);

	return Redirect('/usuario')->with('message','store');
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
    	$user = User::find($id);
        return view('usuario.edit',['user'=>$user]);
    }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(UserUpdateRequest $request)
	{
		$this->user->fill($request->all());
		$this->user->save();

		Session::flash('message','Usuario Editado Correctamente');
		return Redirect::to('/usuario');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
		$this->user->delete();
		Session::flash('message','Usuario Eliminado Correctamente');
		return Redirect::to('/usuario');
	}

}
