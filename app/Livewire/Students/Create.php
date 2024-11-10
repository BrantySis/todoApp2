<?php

namespace App\Livewire\Students;

use App\Livewire\Forms\StudentForm;
use App\Models\Classes;
use App\Models\Section;
use App\Models\Student;
use Livewire\Component;

class Create extends Component
{
    public StudentForm $form;

    public $sections = [];

    public function render()
    {
        return view('livewire.students.create', [
            'classes' => Classes::all(),
            'sections' => $this->sections  // Pass sections to the view
        ]);
    }

    public function updated($property)
    {
        // Trigger when class_id changes
        if ($property === 'form.class_id') {
            $this->sections = Section::where('class_id', $this->form->class_id)->get();
        }
    }

    public function store()
    {
        $this->validate();

        Student::create($this->form->all());

        flash()->success('Student added successfully');

        return $this->redirect(Index::class, navigate: true);
    }
}