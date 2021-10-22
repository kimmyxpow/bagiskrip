<?php

namespace App\Http\Controllers;

use App\Models\Code;
use App\Models\Lang;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('myCode', [
            'title' => 'Dashboard',
            'codes' => Code::filter(request(['s']))->where('user_id', Auth::id())->orderBy('name')->paginate(12),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addCode', [
            'title' => 'Upload Kode',
            'langs' => Lang::all()->sortBy('name'),
            'action' => '/codes',
            'continue' => 'login',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedRules = [
            'lang' => 'required|max:255',
            'code' => 'required|max:65535',
            'name' => 'required|max:255',
        ];

        if ($request->neededPassword == 'y') {
            $validatedRules['password'] = 'required|min:6|max:255';
        }

        $validatedData = $request->validate($validatedRules);

        $validatedData['slug'] = Str::lower(Str::slug($validatedData['name'])) . '-' . mt_rand(1000, 9999);
        $validatedData['user_id'] = Auth::id();
        $validatedData['code'] = htmlspecialchars($request['code']);
        $validatedData['lang_id'] = $validatedData['lang'];
        if ($request->neededPassword == 'y') {
            $validatedData['password'] = md5($validatedData['password']);
        }
        unset($validatedData['lang']);

        Code::create($validatedData);

        Code::where('slug', $validatedData['slug'])->update(['published_at' => Code::all()->firstWhere('slug', $validatedData['slug'])->added_at]);

        return redirect('/codes/' . $validatedData['slug']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Code  $code
     * @return \Illuminate\Http\Response
     */
    public function show(Code $code)
    {
        $code->views += 1;
        $code->save();

        if (Auth::id() != $code->user->id) {
            if (!is_null($code->password)) {
                if (session()->missing('unlocked')) {
                    return redirect('/codes/unlock/' . $code->slug);
                } else {
                    return view('code', [
                        'title' => $code->name,
                        'code' => $code,
                    ]);
                }
            }
        }

        return view('code', [
            'title' => $code->name,
            'code' => $code,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Code  $code
     * @return \Illuminate\Http\Response
     */
    public function edit(Code $code)
    {
        return view('editCode', [
            'title' => 'Edit : ' . $code->name,
            'code' => $code,
            'langs' => Lang::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Code  $code
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Code $code)
    {
        $validatedRules = [
            'lang' => 'required|max:255',
            'code' => 'required|max:65535',
            'name' => 'required|max:255',
        ];

        if ($request->neededPassword == 'y') {
            $validatedRules['password'] = 'required|min:6|max:255';
        }

        $validatedData = $request->validate($validatedRules);

        $validatedData['slug'] = Str::lower(Str::slug($validatedData['name'])) . '-' . mt_rand(1000, 9999);
        $validatedData['user_id'] = Auth::id();
        $validatedData['code'] = htmlspecialchars($request['code']);
        $validatedData['lang_id'] = $validatedData['lang'];
        if ($request->neededPassword == 'y') {
            $validatedData['password'] = md5($validatedData['password']);
        }
        unset($validatedData['lang']);

        // return $validatedData;

        Code::where('id', $code->id)->update($validatedData);

        return redirect('/codes/' . $validatedData['slug']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Code  $code
     * @return \Illuminate\Http\Response
     */
    public function destroy(Code $code)
    {
        Code::destroy($code->id);

        return redirect('/codes')->with('success', 'Berhasil menghapus kode <span class="font-mono">`' . $code->name . '`</span>!!!');
    }
}
