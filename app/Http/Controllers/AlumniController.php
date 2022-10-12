<?php

namespace App\Http\Controllers;

use App\Models\User;
use PDF;
use App\Models\TentangKami;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class AlumniController extends Controller
{

    public function dashboarduser(){
        return view('content.user.dashboard');
    }

    public function index (){

        return view('content.admin.dashboard');
    }

    public function profile()
    {
        $users = User::all();
        return view('content.user.detail_profile',[
            'users' => $users
        ],compact('users'));
    }

    public function tentangkami(){
        $tentangkami = TentangKami::all();

        return view ('content.user.tentangkami',[
            'tentangkami' => TentangKami::all()
        ],compact('tentangkami'));
    }

    public function show (){
        $users = User::where('role_id', 2)->get();
        return view ('content.admin.show',compact('users'));
    }

    public function useraktif(){
        $users = User::where('status', 1)->where('role_id', 2)->latest()->get();
        return view ('content.admin.showuseractive',['users' => $users]);
    }

    public function usernonaktif(){
        $users = User::where('status', 0)->where('role_id', 2)->latest()->get();
        return view ('content.admin.showusernonactive',['users' => $users]);
    }

    public function accept ($id) {
        User::where('id', $id)->update(['status' => 1]);
        return redirect("/semuauser")->with("success", "User Sudah Diaktivasi !");
    }
    public function tolak(User $users) {
        User::destroy($users->id);

        return redirect('/semuauser')->with('success', 'User Berhasil Ditolak!');
     }
    

    public function add() {
        $users = User::all();

        return view ('content.admin.add',[
            'users' => User::all()
        ],compact('users'));
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'foto_profile' => 'required|mimes:jpg,png,jpeg|max:5000',
            'nisn' => 'required|unique:users',
            'nama' => 'required',
            'alamat' => 'required',
            'jurusan'  => 'required',
            'thn_lulus'  => 'required',
            'email' => 'required|min:8|unique:users',
            'role' => 'required',
            'password' => 'required'
        ]);

            $fileName = time().$request->file('foto_profile')->getClientOriginalName();
            $path = $request->file('foto_profile')->storeAs('profile-images2', $fileName. 'public');
         $validatedData['foto_profile'] = '/storage/' .$path;
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/semuauser')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit(User $user) {
        return view('content.admin.edit',[
           
            'user' => $user
        ]);
    }

     public function update(Request $request , User $user) {
        $validatedData = $request->validate([
            'foto_profile' => 'image|mimes:jpg,png,jpeg|max:5000',
            'nisn'      => 'required',
            'nama'        => 'required',
            'thn_lulus'  => 'required',
            'jurusan'    => 'required',
            'alamat'     => 'required',
            'email'     => 'required',
            'password'   => 'required|min:8',
        ]);

        if($request->file()) {
            $fileName = time().$request->file('foto_profile')->getClientOriginalName();
            $path = $request->file('foto_profile')->storeAs('profile-images2', $fileName. 'public');
         $validatedData['foto_profile'] = '/storage/' .$path;

        }
        
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::where('id', $user->id)->update($validatedData);

        return redirect('/semuauser')->with('success', 'Data berhasil diubah!');
     }
     
     public function delete(User $users) {
        User::destroy($users->id);

        return redirect('/semuauser')->with('success', 'Data berhasil dihapus!');
     }
     public function detailuser(User $users) {
        return view('content.admin.detailuser',[
           
            'users' => $users
        ]);
    }

    public function reportpdfuser(){
        $users = User::all();

        $pdf = PDF::loadview('content.admin.reportpdfuser',['users'=> $users])->setOptions(['defaultFont' => 'sans-serif']);;
    	return $pdf->download('report-users.pdf');
        return redirect('/semuauser');
    }

    public function uploadDokumentasi(Request $request){
        $request -> validate([
            'image'=> 'required|image|mimes:jgp,png,jpeg,svg|max:6000',
            'judul'=> 'required',
            'waktu' => 'required'
        ]);

        $fileName = time().$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('dokumentasi', $fileName. 'public');
        $validatedData['image'] = '/storage/' .$path;

        User::create($validatedData);
        
        return redirect('/dokumentasi')->with('success','Foto berhasil di upload');
    }

    public function showDokumentasi(){
        $users = User::where('role_id', 2)->latest()->get();
        return view ('content.admin.show',compact('users'));
    }
}
