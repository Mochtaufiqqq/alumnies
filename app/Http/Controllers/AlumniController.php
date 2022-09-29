<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumni;
use App\Models\User;

class AlumniController extends Controller
{

    public function dashboard(){
        return view('content.user.page');
    }

    public function index (){

        return view('content.admin.dashboard');
    }
    public function show (){
        $users = User::all();

        return view ('content.admin.show',[
            'users' => User::all()
        ],compact('users'));
    }

    public function accept (User $users) {
        User::where("id", $users->id)->update(["status_user_id" => 2]);

        return redirect("/lihatalumni")->with("success", "User Sudah Diaktivasi !");

    }

    // public function add() {
    //     $alumnis = Alumni::all();

    //     return view ('content.admin.add',[
    //         'alumnis' => Alumni::all()
    //     ],compact('alumnis'));
    // }

    // public function store(Request $request) {
    //     $validatedData = $request->validate([
    //         'nis' => 'required|unique:alumnis',
    //         'nama' => 'required',
    //         'pekerjaan' => 'required',
    //         'alamat' => 'required',
    //         'tahun_keluar'  => 'required',
    //         'email' => 'required|unique:alumnis',
    //         'no_telp' => 'required',
    //         'password' => 'required'
    //     ]);

    //     // $validatedData['image'] = $request->file('image')->store('alumni-images');

    //     Alumni::create($validatedData);

    //     return redirect('/lihatalumni')->with('success', 'Data Berhasil Ditambahkan');
    // }

    // public function edit(Alumni $alumnis) {
    //     return view('content.admin.edit',[
    //         'title' => 'Edit Data Alumni',
    //         'alumnis' => $alumnis
    //     ]);
    // }
    //  public function update(Request $request , Alumni $alumnis) {
    //     $validatedData = $request->validate([
    //         'nis' => 'required',
    //         'nama' => 'required',
    //         'pekerjaan' => 'required',
    //         'alamat' => 'required',
    //         'tahun_keluar' => 'required',
    //         'email' => 'required',
    //         'no_telp' => 'required',
    //         'password' => 'required',
    //     ]);

    //     Alumni::where('id', $alumnis->id)->update($validatedData);

    //     return redirect('/lihatalumni')->with('success', 'Data berhasil dirubah!');
    //  }
     
    //  public function delete(Alumni $alumnis) {
    //     Alumni::destroy($alumnis->id);

    //     return redirect('/lihatalumni')->with('success', 'Data Berhasil Dihapus');
    //  }
}
