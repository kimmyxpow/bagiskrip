<?php

namespace App\Http\Controllers;

use App\Models\Code;
use App\Models\Lang;
use App\Models\Visibility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $langs = Lang::orderBy('name')->get();
        $visibilities = Visibility::all();

        return view('code.index', compact('langs', 'visibilities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'script' => ['required'],
            'title' => ['required', 'max:255'],
            'lang_hash' => ['required', 'max:255'],
            'password' => ['max:255'],
            'visibility_hash' => ['required', 'max:255'],
        ]);

        $validatedData['hash'] = bin2hex(random_bytes(20));

        if ($request->password) {
            $validatedData['password'] = bcrypt($request->password);
        }

        $code = Code::create($validatedData);

        return to_route('show', $code->hash);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Code  $code
     * @return \Illuminate\Http\Response
     */
    public function show(Code $code)
    {
        if (!is_null($code->password) && session('unlock') !== $code->hash) {
            return to_route('password', $code->hash);
        }

        $code->views += 1;
        $code->save();

        session()->forget('unlock');

        return view('code.show', compact('code'));
    }

    public function password(Code $code)
    {
        if (session('unlock') === $code->hash || is_null($code->password)) {
            return to_route('show', $code->hash);
        }

        return view('code.password', compact('code'));
    }

    public function unlock(Request $request, Code $code)
    {
        if (Hash::check($request->password, $code->password)) {
            session(['unlock' => $code->hash]);
            return to_route('show', $code->hash);
        }

        return to_route('password', $code->hash)->with('message', 'Password salah');
    }
}
