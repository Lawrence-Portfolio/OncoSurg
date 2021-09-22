<?php namespace BizMark\OncoSurg\Classes\Events;

use RainLab\Blog\Models\Post;

/**
 * Class UserModelExtender
 */
class PostsExtender
{
    /**
     * Add listeners
     * @param \Illuminate\Events\Dispatcher $event
     */
    public function subscribe($event)
    {
        Post::extend(function ($model) {
            $model->addJsonable('authors');
            $model->attachOne['file_article'] = \System\Models\File::class;
        });

        $event->listen('backend.form.extendFields', function ($widget) {

            /** @var \Backend\Widgets\Form $widget */
            if (!$widget->getController() instanceof \RainLab\Blog\Controllers\Posts || $widget->isNested || empty($widget->context)) {
                return;
            }

            if (!$widget->model instanceof \RainLab\Blog\Models\Post) {
                return;
            }

            $additionFields = [
                'authors' => [
                    'label' => 'Авторы',
                    'tab' => 'Дополнительно',
                    'span' => 'full',
                    'type' => 'repeater',
                    'form' => [
                        'fields' => [
                            'author' => [
                                'label' => 'Автор',
                                'span' => 'auto',
                            ]
                        ]
                    ]
                ],
                'journal' => [
                    'label' => 'Журнал',
                    'tab' => 'Дополнительно',
                    'span' => 'full',
                ],
                'file_article' => [
                    'label' => 'Файл со статьей',
                    'tab' => 'Дополнительно',
                    'span' => 'full',
                    'type' => 'fileupload',
                    'fileTypes' => 'doc,docx,pdf'
                ],
            ];

            $widget->addSecondaryTabFields($additionFields);
        });
    }
}