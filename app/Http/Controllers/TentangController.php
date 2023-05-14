<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TentangController extends Controller
{
    public function index()
    {
        $about = About::first();
        return view('tentang.index', compact('about'));
    }

    public function update(Request $request, About $about)
    {
        $input = $request->all();
        if ($request->has('logo')) {

            File::delete('uploads' . $about->logo);

            $logo = $request->file('logo');
            $nama_gambar = time() . rand(1, 9) . '.' . $logo->getClientOriginalExtension();
            $logo->move('uploads', $nama_gambar);
            $input['logo'] = $nama_gambar;
        } else {
            unset($input['logo']);
        }

        $about->update($input);

        return redirect('/tentang');
    }
}

