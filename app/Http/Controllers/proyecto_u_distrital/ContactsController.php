<?php

namespace App\Http\Controllers\proyecto_u_distrital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contacts;

class ContactsController extends Controller
{
    public function read(Request $request){

        $contact = new Contacts();
        $data = $contact->all();

        return response()->json($data);
    }

    public function create(Request $request){

        $contact = new Contacts();
        $contact->name = $request->input("name");
        $contact->last_name = $request->input("last_name");
        $contact->phone_number = $request->input("phone_number");
        $contact->email = $request->input("email");
        $contact->title = $request->input("title");
        $contact->comments = $request->input("comments");

        $contact->save();

        $message = ["message" => "Registro exitoso!!"];

        return response()->json($message);
    }

    public function update(Request $request){

        $idContact = $request->query("id");
        $contact = new Contacts();
        $contactSpecific = $contact->find($idContact);

        $contactSpecific->name = $request->input("name");
        $contactSpecific->last_name = $request->input("last_name");
        $contactSpecific->phone_number = $request->input("phone_number");
        $contactSpecific->email = $request->input("email");
        $contactSpecific->title = $request->input("title");
        $contactSpecific->comments = $request->input("comments");

        $contactSpecific -> save();

        $message = [
            "message" => "Actualización exitosa!!",
            "idBook" => $request->query("id"),
            "name" => $contactSpecific->name
        ];

        return response()->json($message);

    }

    public function delete(Request $request){

        $idContact = $request->query("id");
        $contact = new Contacts();
        $contactSpecific = $contact->find($idContact);
        $contactSpecific -> delete();

        $message = [
            "message" => "Eliminación exitosa!!",
            "idContact" => $request->query("id"),
        ];

        return response()->json($message);
    }

}
