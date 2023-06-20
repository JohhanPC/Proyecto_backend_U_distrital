<?php

namespace App\Http\Controllers\proyecto_u_distrital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users_project;


class UsersController extends Controller
{
    public function read(Request $request){

        $users = new Users_project();
        $data = $users->all();

        return response()->json($data);
    }

    public function create(Request $request){

        $user = new Users_project();
        $user->name = $request->input("name");
        $user->last_name = $request->input("last_name");
        $user->id_type = $request->input("id_type");
        $user->identification_number = $request->input("identification_number");
        $user->phone_number = $request->input("phone_number");
        $user->email = $request->input("email");
        $user->profession = $request->input("profession");
        $user->role = $request->input("role");

        $user->save();

        $message = ["message" => "Registro exitoso!!"];

        return response()->json($message);
    }

    public function update(Request $request){

        $idUser = $request->query("id");
        $user = new Users_project();
        $userSpecific = $user->find($idUser);

        $userSpecific->name = $request->input("name");
        $userSpecific->last_name = $request->input("last_name");
        $userSpecific->id_type = $request->input("id_type");
        $userSpecific->identification_number = $request->input("identification_number");
        $userSpecific->phone_number = $request->input("phone_number");
        $userSpecific->email = $request->input("email");
        $userSpecific->profession = $request->input("profession");
        $userSpecific->role = $request->input("role");

        $userSpecific -> save();

        $message = [
            "message" => "Actualización exitosa!!",
            "idBook" => $request->query("id"),
            "name" => $userSpecific->name
        ];

        return response()->json($message);

    }

    public function delete(Request $request){

        $idUser = $request->query("id");
        $user = new Users_project();
        $userSpecific = $user->find($idUser);
        $userSpecific -> delete();

        $message = [
            "message" => "Eliminación exitosa!!",
            "idUser" => $request->query("id"),
        ];

        return response()->json($message);
    }

}
