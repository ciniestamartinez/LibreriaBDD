<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class User extends Model
{
    protected $table = 'users';
    protected $fillable = ['name', 'email', 'password'];

    public function __construct(Request $request){
        $this->request = $request;
        $this->user = new User;
    }

    public function books(){
        return $this->belongsToMany('App\Book');
    }

    public function create(Request $request){
        $user = new User($request);
        $this->user->name = $request->name;
        $this->user->email = $request->email;
        $this->user->password = $request->password;
        $this->user->save();
    }
}
