<?php

namespace App\View\Components;

use App\Models\Code;
use Illuminate\View\Component;
use Illuminate\Database\Eloquent\Builder;

class AppLayout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $latestScripts = Code::whereHas('visibility', function (Builder $query) {
            $query->where('key', 'public');
        })->latest()->take(5)->get();
        $popularScripts = Code::whereHas('visibility', function (Builder $query) {
            $query->where('key', 'public');
        })->orderBy('views', 'desc')->take(5)->get();

        $langsFolder = 'js/langs/';
        $langFiles = glob($langsFolder . '*.*');

        $langFiles = array_map('basename', $langFiles);

        return view('layouts.app', compact('latestScripts', 'popularScripts', 'langFiles'));
    }
}
