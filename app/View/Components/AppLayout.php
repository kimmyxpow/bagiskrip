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
        $baseQuery = Code::whereHas('visibility', function (Builder $query) {
            $query->where('name', 'public');
        });

        $latestScripts = $baseQuery->latest()->limit(5)->get();
        $popularScripts = $baseQuery->orderBy('views')->limit(5)->get();

        $langsFolder = opendir('js/langs/');
        $langFiles = [];

        while (($file = readdir($langsFolder)) !== false) {
            $langFiles[] = $file;
        }

        closedir($langsFolder);

        array_splice($langFiles, 0, 2);

        return view('layouts.app', compact('latestScripts', 'popularScripts', 'langFiles'));
    }
}
