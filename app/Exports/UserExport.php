<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
class UserExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
        
    //return User::all();
       
    
    public function view(): View
    {
        return view('usuarios.export', [
            'usuarios' => User::all()
        ]);
    }
}
