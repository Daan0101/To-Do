<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\DB;
use App\Models\Todo as TodoModel;


class Todo extends Component
{
    #[Validate('required|min:1|max:45')]
    public $title;

    #[Validate('required|min:1|max:255')]
    public $description;

    public function addtodo()
    {
        $this->validate();

        DB::beginTransaction();

        try {
            
            TodoModel::create([
                'user_id' => auth()->user()->id,
                'title' => $this->title,
                'description' => $this->description,
                'completed' => false
            ]);

            DB::commit();

            return redirect(request()->header('Referer'));

            $this->toastr()->success('Todo added successfully!');

        } catch (\Throwable $th) {
            dd($th->getMessage());
            DB::rollBack();
        }
    }



    public function render()
    {
        return view('livewire.todo');
    }
}
