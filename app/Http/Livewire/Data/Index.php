<?php

namespace App\Http\Livewire\Data;

use Livewire\Component;
use App\Models\Data;

class Index extends Component

{
    public $data, $mode;

    public $form_mode = [
        'add' => [
            'action' => 'addRow',
            'text' => 'Tambah'
        ],
        'edit' => [
            'action' => 'editRow',
            'text' => 'Edit'
        ]
    ];

    public function render()
    {
        return view('livewire.data.index')
        ->layoutData([
            'title' => 'Data'
        ]);
    }

    public function mount()
    {
        $this->mode = 'add';
    }
}
