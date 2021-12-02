<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();

        if ($user) {
            return response()->json([
                'message' => 'Tampil Seluruh Data User',
                'status' => 1,
                'dataUser' => $user,
            ], 200);
        }else {
            return response()->json([
                'message' => 'Data User Tidak Ditemukan',
                'status' => 0                                          
            ], 401);
        }
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:5',
        ]);

        if($validator->fails()) {
            return response()->json([
                'status' => 0,
                'user' => $validator->errors()
            ],401);
        }

        $user = User::where('email', $request->email)->first();
        if($user) {
                return response()->json([
                    'status' => 0,
                    'message' => 'Email Sudah Digunakan'
                ],401);
        }else {
            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password'))
            ]);

            if ($user) {
                $token = $user->createToken('myapptoken')->plainTextToken;
                return response()->json([
                    'message' => 'Data User Berhasil Ditambah',
                    'status' => 1,
                    'dataUser' => $user,
                    'token' => $token
                ], 200);
            }else {
                return response()->json([
                    'message' => 'Data User Gagal Ditambah',
                    'status' => 0                                           
                ], 401);
            }
        
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        if ($user) {
            return response()->json([
                'message' => 'Data User Ada Di Database',
                'status' => 1,
                'dataUser' => $user,
            ], 200);
        }else {
            return response()->json([
                'message' => 'Data User Tidak Ditemukan',
                'status' => 0                                          
            ], 401);
        }
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
        $update = User::findOrFail($id);
        $user   = $request->all();

        $validator   = Validator::make($user, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:5',
        ]);

        if($validator->fails()) {
            return response()->json([
                'status' => 0,
                'user' => $validator->errors()
            ], 401);
        }

        $update->update($user);
        if ($update) {
            return response()->json([
                'message' => 'Data User Berhasil Diubah',
                'status' => 1,
                'dataUser' => $update
            ], 200);
        }else {
            return response()->json([
                'message' => 'Data Gagal Diubah',
                'status' => 0                                        
            ], 401);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = User::findOrFail($id);
        $delete->delete();

        if ($delete) {
            return response()->json([
                'message' => 'Data Berhasil Dihapus',
                'status' => 1,
                'dataUser' => $delete
            ], 200);
        }else {
            return response()->json([
                'message' => 'Data Gagal Dihapus',
                'status' => 0                                        
            ], 401);
        }
    }
}
