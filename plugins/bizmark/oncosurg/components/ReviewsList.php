<?php namespace BizMark\OncoSurg\Components;

use Input;
use Cms\Classes\ComponentBase;
use BizMark\OncoSurg\Models\Review;

class ReviewsList extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'ReviewsList',
            'description' => 'Get all reviews without link to desease'
        ];
    }

    public function getReviews()
    {
        return Review::whereNull('desease_id')->where('active', 1)->get();
    }

    public function onSendReview() {
        $data = Input::All();

        $review = new Review;
        $review->author = e(array_get($data, 'username'));
        $review->email = e(array_get($data, 'email'));
        $review->comment = e(array_get($data, 'description'));
        $review->rating = e(array_get($data, 'rating'));
        $review->save();
    }

    public function onAjax()
    {
        return true;
    }
}
