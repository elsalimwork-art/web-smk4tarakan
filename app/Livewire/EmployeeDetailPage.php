<?php

namespace App\Livewire;

use Livewire\Component;

class EmployeeDetailPage extends Component
{
    public function render()
    {
        return view('livewire.employee-detail-page')
            ->layout('layouts.app');
    }

    public array $employee = [];

    public function mount($id = null): void
    {
        // Get the employee ID from the route parameter.
        $id = $id ?? request()->route('id');

        // Validate the employee ID.
        abort_unless(
            $id !== null && ctype_digit((string) $id),
            404
        );

        // Load the shared employee data.
        $employees = require resource_path('data/pegawai.php');

        // Find the employee using the ID.
        $employee = collect($employees)->firstWhere('id', (int) $id);

        // Return a 404 response if the employee does not exist.
        abort_unless($employee, 404);

        // Store the employee data.
        $this->employee = $employee;
    }
}
