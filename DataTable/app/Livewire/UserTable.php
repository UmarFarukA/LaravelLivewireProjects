<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserTable extends Component
{
    use WithPagination;

    public $per_page = 5;

    public $search = '';

    public $admin = '';

    public $searchBy = "name";

    public $sortBy = "ASC";

    public function setSort($searchByField)
    {
        if($this->searchBy === $searchByField) {
            $this->sortBy = ($this->sortBy === "ASC") ? "DESC" : "ASC";
            return;
        }
        $this->searchBy = $searchByField;
        $this->sortBy = "DESC";
    }

    public function render()
    {
        return view('livewire.user-table', [
            'users' => User::search($this->search)
            ->when($this->admin !== "", function($query){
                $query->where('is_admin', $this->admin);
            })
            ->orderBy($this->searchBy, $this->sortBy)
            ->paginate($this->per_page)
        ]);
    }

    public function delete($id)
    {
        try {
            User::find($id)->delete();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
