<?php namespace BizMark\OncoSurg\Components;

use Cms\Classes\ComponentBase;
use BizMark\OncoSurg\Models\Desease as Deseases;
use BizMark\OncoSurg\Models\Review as Reviews;

class Desease extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Desease Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'title'       => 'Slug',
                'default'     => '{{ :slug }}',
                'type'        => 'string',
            ]
        ];
    }

    public function onRun()
    {
        $desease = Deseases::where('slug', $this->property('slug'))->whereNull('parent_id')->first();

        if (empty($desease)){
            return $this->controller->run('404');
        }

        $this->page['desease'] = $desease;
    }
}
