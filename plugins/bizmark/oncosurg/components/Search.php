<?php namespace BizMark\OncoSurg\Components;

use Input;
use Cms\Classes\ComponentBase;

class Search extends ComponentBase
{
    public $deseases;

    public function componentDetails()
    {
        return [
            'name'        => 'Search',
            'description' => 'Search for desease'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun() {
        $query = e(\Input::get('q'));

        $this->deseases = \BizMark\OncoSurg\Models\Desease::where('name', 'LIKE', '%'.$query.'%')->get();
    }
}
