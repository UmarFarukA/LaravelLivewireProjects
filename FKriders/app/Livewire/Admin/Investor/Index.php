<?php

namespace App\Livewire\Admin\Investor;

use App\Livewire\Admin\Dashboard;
use App\Models\Investor;
use App\Models\InvestorPayment;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Index extends Dashboard
{
    public $search = "";

    #[Computed]
    public function investors()
    {
        // $query = ;

        // if($this->search){
        //     $query->whereAny(["lname", "othernames"], "like", "%".$this->search."%")->get();
        // }

        // return $query->latest()->paginate(10, pageName:"investors-page");
        $query = InvestorPayment::query()->with(["investor.user"]);

        if ($this->search) {

            $searchTerm = "%" . $this->search . "%";

            $query->where(function ($q) use ($searchTerm) {

                $q->whereHas("investor.user",function($userQuery) use($searchTerm){
                    $userQuery->whereAny(["othernames", "lname"],"like","%". $searchTerm ."%");
                });
            });
        }
        return $query->latest()->paginate(10, pageName: "investor-page");
    }

    public function edit($id){
        $this->dispatch("edit-investor", $id);
    }
    public function render()
    {
        return view('livewire.admin.investor.index');
    }
}
