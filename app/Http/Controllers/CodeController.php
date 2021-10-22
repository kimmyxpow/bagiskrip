<?php

namespace App\Http\Controllers;

use App\Models\Code;
use App\Models\Lang;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CodeController extends Controller
{
    public function index()
    {
        return view('continue', [
            'title' => 'My Code',
        ]);
    }

    public function create()
    {
        return view('addCode', [
            'title' => 'Upload Kode',
            'langs' => Lang::all()->sortBy('name'),
            'action' => '/add',
            'continue' => 'not login',
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'lang' => 'required|max:255',
            'code' => 'required|max:65535',
            'name' => 'required|max:255'
        ]);

        $validatedData['slug'] = Str::lower(Str::slug($validatedData['name'])) . '-' . mt_rand(1000, 9999);
        $validatedData['user_id'] = 2;
        $validatedData['code'] = htmlspecialchars($request['code']);
        $validatedData['lang_id'] = $validatedData['lang'];
        unset($validatedData['lang']);

        Code::create($validatedData);

        Code::where('slug', $validatedData['slug'])->update(['published_at' => Code::all()->firstWhere('slug', $validatedData['slug'])->added_at]);

        return redirect('/codes/' . $validatedData['slug']);
    }

    public function lock(Code $code)
    {
        if (Auth::id() != $code->user->id) {
            return view('unlock', [
                'title' => 'Buka Kunci Kode',
                'code' => $code
            ]);
        }

        return redirect('/codes/' . $code->slug);
    }

    public function unlock(Code $code, Request $request)
    {
        $password = md5($request->password);
        if ($password != $code->password) {
            return redirect('/codes/unlock/' . $code->slug)->with('error', 'Password incorect');
        }

        return redirect('/codes/' . $code->slug)->with('unlocked', 'Berhasil membuka kode');
    }
}
