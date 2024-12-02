<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class ModalComponent extends Component
{
    public $isOpen = false;
    public $componentToLoad = null;
    public $componentData = [];

    protected $listeners = ['open-modal'];

    public function openModal($componentName, $data = [])
    {

        $this->isOpen = true;
        $this->componentToLoad = $componentName;
        $this->componentData = $data;
    }

    public function closeModal()
    {
        $this->isOpen = false;
        $this->componentToLoad = null;
        $this->componentData = [];
    }

    public function render()
    {
        return view('livewire.modal-component');
    }
}
