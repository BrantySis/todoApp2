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
            'classes' => Classes::all()
        ]);
    }

    public function updated($property)
    {
        if ($property === 'form.class_id') {
            // Fetch sections based on the selected class ID
            $this->sections = Section::where('class_id', $this->form->class_id)->get();

            // Clear the section_id if no sections are available
            if ($this->sections->isEmpty()) {
                $this->form->section_id = '';
            }
        }
    }

    public function store()
    {
        $this->validate();
        
        Student::create(
            $this->form->all()
        );
                
        flash()->success('Student added successfully');
        
        return $this->redirect(Index::class, navigate: true);
    }
}
