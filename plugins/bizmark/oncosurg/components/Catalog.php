<?php namespace BizMark\OncoSurg\Components;

use BizMark\OncoSurg\Models\Category;
use BizMark\OncoSurg\Models\Desease;
use Cms\Classes\ComponentBase;

class Catalog extends ComponentBase
{
    public $categories;

    public function componentDetails()
    {
        return [
            'name'        => 'Catalog Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function onRun()
    {
        $this->categories = Category::All();
    }
}
