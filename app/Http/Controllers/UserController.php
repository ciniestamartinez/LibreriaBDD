<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
Use Firebase\JWT\JWT;

class UserController extends Controller
{
    private $key = "_gjkhlaefHISDG67893YUMBNLRSUIASRN57dzdg78745vcbyIUFJIS12'";
    
    public function login(Request $request){
        //Buscar el user por email
        User::find('email');

        //Comprobar que email y password de user son iguales
        foreach ($users as $key => $user){
            if($request->email == $user->email){
                print ("Usuario registrado");
                //Si son iguales codifico el token
                $data_token = [
                "email" => $user->email
                ];
                $token = JWT::encode($data_token, $this->$key);
                //Devolver la respuesta en formato JSON con el token y código 200
                return response()->json([
                "token" => $token
                ],200);
            }else{
                //Si no son iguales devolver la respuesta JSON con código 401
                return response()->json(401);
                print ("Usuario no registrado");
            }
        }
    }

    public function register(Request $request)
    {
        $user->create();
    }
    
    public function getUsers(){
        $users = User::all();
        foreach ($users as $key => $user){
            print($user);
        }
    }

    public function lend(Request $request){
        $user->name = $request->name;
        $book->title = $request->title;
        $user->save(); 
    } 
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Register a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
