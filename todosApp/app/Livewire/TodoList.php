<?php

namespace App\Livewire;

use App\Models\Todo;
use Exception;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class TodoList extends Component
{
    use WithPagination;


    #[Rule('required|min:2|max:25')]
    public $name;

    #[Rule('required|min:3|max:25')]
    public $editName;

    public $edit_id;

    public $search = "";

    public $todos;

    public function create()
    {
        $validated = $this->validateOnly('name');
        Todo::create($validated);

        $this->reset('name');

        session()->flash('success', 'Created');
        // $this->redirect(route('index'));
    }

    public function delete($todo_id)
    {
        try {
            Todo::findOrfail($todo_id)->delete();
        } catch (Exception $err) {
            session()->flash('error', 'Error deleting todo');
            return;
        }
    }

    public function toggle($todo_id)
    {
        try {
            $todo = Todo::findOrfail($todo_id);
            $todo->completed = !$todo->completed;
            $todo->save();
        } catch (Exception $err) {
            session()->flash('error', 'Error Toggling todo');
            return;
        }
    }

    public function edit($id)
    {
        $this->edit_id  = Todo::find($id)->id;
        $this->editName = Todo::find($id)->name;
    }

    public function cancel()
    {
        $this->reset('editName', 'edit_id');
    }

    public function update($id)
    {
        try {
            $this->validateOnly('editName');

            $todo = Todo::find($id);

            $todo->name = $this->editName;

            $todo->save();

            $this->cancel();
        } catch (Exception $err) {
            session()->flash('error', 'Error Updating todo');
            return;
        }

    }

    public function render()
    {
        $this->todos = Todo::latest()->where('name', 'like', '%'.$this->search.'%')->get();

        return view('livewire.todo-list', [
            'todos' => $this->todos
        ]);
    }
}
