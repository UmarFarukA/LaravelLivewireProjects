<?php

namespace App\Livewire\Forms;

use App\Models\Tricycle;
use Livewire\Attributes\Validate;
use Livewire\Form;

class TricycleForm extends Form
{
    public Tricycle $tricycle;

    #[Validate('required|string|max:45')]
    public string $description = "";

    #[Validate('required|string')]
    public string $color = "";

    #[Validate('required|string|max:45')]
    public string $plate_number = "";

    #[Validate('required|string|max:45')]
    public string $serial_number = "";

    #[Validate('required|string|max:45')]
    public string $model_number = "";

    #[Validate('required|image|max:2048')]
    public $photo;

    public string $photo_path = "";

    #[Validate('required')]
    public int $amount;

    #[Validate('required')]
    public int $category_id;

    #[Validate('required')]
    public int $brand_id;

    public function setTricycle(Tricycle $tricycle)
    {
        $this->color = $tricycle->color;
        $this->description = $tricycle->description;
        $this->model_number = $tricycle->model_number;
        $this->brand_id = $tricycle->brand_id;
        $this->amount = $tricycle->amount;
        $this->category_id = $tricycle->category_id;
        $this->photo_path = $tricycle->photo_path;
        $this->serial_number = $tricycle->serial_number;
        $this->plate_number = $tricycle->plate_number;

        $this->tricycle = $tricycle;
    }

    // protected function rules(): array
    // {
    //     return [
    //         "description" => "required|string|max:250",
    //         "color"=> "required|string",
    //         "model_number"=> "required|string|max:25",

    //     ];
    // }

    public function store()
    {
        $this->validate();

        if($this->photo)
        {
            $this->photo_path = $this->photo->storePublicly('tricycles', ['disk' => 'public']);
        }

        Tricycle::create($this->only([
            'description',
            'photo_path',
            'model_number',
            'plate_number',
            'serial_number',
            'color',
            'amount',
            'category_id',
            'brand_id'
        ]));

    }

    public function update()
    {
        $this->validate();

        if($this->photo)
        {
            $this->photo_path = $this->photo->storePublicly('tricycles', ['disk' => 'public']);
        }

        $this->tricycle->update($this->only([
            'description',
            'photo_path',
            'model_number',
            'plate_number',
            'serial_number',
            'color',
            'amount',
            'category_id',
            'brand_id'
        ]));
    }
}
