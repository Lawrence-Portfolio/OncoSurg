<?php namespace BizMark\OncoSurg\Components;

use Cms\Classes\ComponentBase;
use October\Rain\Support\Collection;

class Gallery extends ComponentBase
{
    public $images;
    public $count;

    public function componentDetails()
    {
        return [
            'name' => 'Gallery',
            'description' => 'Фотогалерея'
        ];
    }

    public function onRun()
    {
        $this->getGalleryItems();
    }

    public function getGalleryItems()
    {
        $this->images = $this->page->theme->gallery;
        $this->images = new Collection($this->images);
        $this->count = $this->images->count();
        $this->images = $this->images->forPage(\Input::get('page'), 8);
    }

    public function onGet()
    {
        $this->getGalleryItems();
    }
}
