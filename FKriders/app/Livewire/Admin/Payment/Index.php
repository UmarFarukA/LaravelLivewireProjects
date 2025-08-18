<?php

namespace App\Livewire\Admin\Payment;

use App\Livewire\Admin\Dashboard;
use App\Models\Payment;
use Livewire\Attributes\Computed;

class Index extends Dashboard
{
    public $search = "";

    #[Computed]
    public function payments()
    {
        $query = Payment::query()->with(["allocation", "user"]);

        if ($this->search) {

            $searchTerm = "%" . $this->search . "%";

            $query->where(function ($q) use ($searchTerm) {

                $q->whereHas("user",function($userQuery) use($searchTerm){
                    $userQuery->whereAny(["othernames", "lname"],"like","%". $searchTerm ."%");
                });
            });
        }

        return $query->latest()->paginate(10, pageName: "payments-page");
    }

    public function edit($id)
    {
        $this->dispatch("edit-payment", $id);
    }
    public function render()
    {
        return view('livewire.admin.payment.index');
    }
}
