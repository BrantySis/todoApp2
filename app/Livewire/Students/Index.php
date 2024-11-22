<?php

namespace App\Livewire\Students;

use App\Models\Student;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Illuminate\Database\Eloquent\Builder;
use Livewire\WithPagination;

class Index extends Component
{


    public $search;

    use WithPagination, WithoutUrlPagination;

    #[Layout('layouts.app')]
    public function render()
    {

        $query = Student::query();

        $query = $this->applySearch($query);

        return view('livewire.students.index', [
            //'students' => Student::paginate(10)
            'students' => $query->paginate(10)
        ]);
    }

    public function delete(Student $student)
    {
        $student->delete();

        flash()->success('Student Deleted successfully!');
    }

    public function applySearch(Builder $query)
    {
        return $query->where('name', 'like', '%' . $this->search . '%');
    }
}

