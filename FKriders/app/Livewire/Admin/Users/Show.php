<?php

namespace App\Livewire\Admin\Users;

use App\Livewire\Admin\Dashboard;
use App\Models\Investor;
use App\Models\User;
use Illuminate\Http\Request;

class Show extends Dashboard
{
    public User $user;

    public $user_details = 1;

    public $amount_invested;

    public $amount_paid;

    public $progress;

//    public function mount(Request $request)
//     {
//         $investor = Investor::where('user_id', "=",  $request->id)
//             ->with('payments')
//             ->first();

//         dd($investor);

//         if ($investor) {
//             $this->user_details = $investor;

//             $this->amount_invested = $investor->amount_invested;
//             $this->amount_paid = $investor->payments->sum('amount_due');

//             // Progress (percentage)
//             $this->progress = $this->amount_invested > 0
//                 ? ($this->amount_paid / $this->amount_invested) * 100
//                 : 0;
//         }
//     }

    public function show(User $user)
    {
        $this->user = $user::with('allocation.payments')->first();
    }

    public function render()
    {
        return view('livewire.admin.users.show', [
            'user' => $this->user,
        ]);
    }
}
