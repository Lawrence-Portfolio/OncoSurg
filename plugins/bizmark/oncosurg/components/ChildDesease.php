<?php namespace BizMark\OncoSurg\Components;

use Cms\Classes\ComponentBase;

class ChildDesease extends ComponentBase
{
    public $parent;
    public $desease;

    public function componentDetails()
    {
        return [
            'name'        => 'ChildDesease Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'title' => 'Slug',
                'default' => '{{ :slug }}',
                'type' => 'string',
            ],
            'parent' => [
                'title' => 'parent',
                'default' => '{{ :parent }}',
                'type' => 'string',
            ]
        ];
    }

    public function onRun() {
        $this->parent = \BizMark\OncoSurg\Models\Desease::whereSlug($this->property('parent'))->first();
        if (empty($this->parent)) {
            return $this->controller->run(404);
        }


        $this->desease = \BizMark\OncoSurg\Models\Desease::whereSlug($this->property('slug'))->where('parent_id', $this->parent->id)->first();
        if (empty($this->desease)) {
            return $this->controller->run(404);
        }
    }
}
