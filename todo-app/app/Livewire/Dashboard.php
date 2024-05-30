<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Todo;

class Dashboard extends Component
{
    public $todos;

    public function mount()
    {
        $this->todos = Todo::where('user_id', auth()->user()->id)->get();
    }

    public function render()
    {

        return view('livewire.dashboard', [
            'todos' => $this->todos,
        ]);
    }

    public function deleteTodo($id)
    {
        $todo = Todo::find($id);
        $todo->delete();
        return redirect(request()->header('Referer'));
    }

    public function markAsNotDone($id)
    {
        $todo = Todo::find($id);
        $todo->update(['completed' => false]);
        $this->todos = Todo::where('user_id', auth()->user()->id)->get();
        return redirect(request()->header('Referer'));
    }

    public function markAsDone($id)
    {
        $todo = Todo::find($id);
        $todo->update(['completed' => true]);
        $this->todos = Todo::where('user_id', auth()->user()->id)->get();
        return redirect(request()->header('Referer'));
    }
}