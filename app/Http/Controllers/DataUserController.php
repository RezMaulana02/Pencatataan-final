<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataUser;

class DataUserController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('search');
        $datausers = DataUser::when($query, function ($queryBuilder) use ($query) {
            return $queryBuilder->where('Nama', 'like', "%{$query}%")
                                ->orWhere('Nama_Alm', 'like', "%{$query}%")
                                ->orWhere('Alamat', 'like', "%{$query}%");
        })->orderBy('created_at', 'DESC')->get();

        return view('datausers.index', compact('datausers'));
    }

    public function create()
    {
        return view('datausers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nama' => 'required|string|max:255',
            'Nama_Alm' => 'required|string|max:255',
            'Alamat' => 'required|string|max:255',
            'No_ktp' => 'required|string|max:255',
            'No_Kk' => 'required|string|max:255',
            'No_telepon' => 'required|string|max:255',
            'Email' => 'required|string|max:255',
        ]);

        DataUser::create($request->all());

        return redirect()->route('datausers.index')->with('success', 'DataUser created successfully.');
    }

    public function show(string $id)
    {
        $datauser = DataUser::findOrFail($id);

        return view('datausers.show', compact('datauser'));
    }

    public function edit(string $id)
    {
        $datauser = DataUser::findOrFail($id);

        return view('datausers.edit', compact('datauser'));
    }

    public function update(Request $request, string $id)
    {
        $datauser = DataUser::findOrFail($id);

        $request->validate([
            'Nama' => 'required|string|max:255',
            'Nama_Alm' => 'required|string|max:255',
            'Alamat' => 'required|string|max:255',
            'No_ktp' => 'required|string|max:255',
            'No_Kk' => 'required|string|max:255',
            'No_telepon' => 'required|string|max:255',
            'Email' => 'required|string|max:255',
        ]);

        $datauser->update($request->all());

        return redirect()->route('datausers.index')->with('success', 'DataUser updated successfully.');
    }

    public function destroy(string $id)
    {
        $datauser = DataUser::findOrFail($id);
        $datauser->delete();

        return redirect()->route('datausers.index')->with('success', 'DataUser deleted successfully.');
    }
}
