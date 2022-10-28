<?php

namespace JustinByrne\ABunchOfLivewireComponents\Livewire;

use Livewire\Component;

class Autocomplete extends Component
{
    /** Component parameters */
    public $model;

    public string $name;

    public string $display = 'name';

    public string $value = 'id';

    public string $label = 'Search';

    /** Dynamic variables */
    public string $search = '';

    public $selected_value;
    
    public function render()
    {
        return view('a-bunch-of-livewire-components::autocomplete', [
            'items' => $this->model::where($this->display, 'like', '%'.$this->search.'%')->get(),
        ]);
    }

    public function selectItem($item, $value)
    {
        $this->search = $item;
        
        $this->selected_value = $value;
    }

    public function updatingSearch()
    {
        $this->reset('selected_value');
    }
}
