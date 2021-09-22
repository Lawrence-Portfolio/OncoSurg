<?php namespace BizMark\OncoSurg;

use Event;
use Backend;
use System\Classes\PluginBase;
use BizMark\OncoSurg\Classes\Events\PostsExtender;

/**
 * OncoSurg Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'OncoSurg',
            'description' => 'No description provided yet...',
            'author'      => 'BizMark',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {
        Event::subscribe(PostsExtender::class);
    }

    /**
     * Registering additional twig functions
     *
     * @return array
     */
    public function registerMarkupTags() {
        return [
            'filters' => [
                'plural'  => function ($number, $params) {
                    $cases = [2, 0, 1, 1, 1, 2];
                    return $number . ' ' . $params[($number % 100 > 4 && $number % 100 < 20) ? 2 : $cases[min($number % 10, 5)]];
                }
            ],
        ];
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'BizMark\OncoSurg\Components\Gallery' => 'Gallery',
            'BizMark\OncoSurg\Components\Catalog' => 'Catalog',
            'BizMark\OncoSurg\Components\Desease' => 'Desease',
            'BizMark\OncoSurg\Components\ReviewsList' => 'ReviewsList',
            'BizMark\OncoSurg\Components\ChildDesease' => 'ChildDesease',
            'BizMark\OncoSurg\Components\Search' => 'Search',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {

        return [
            'bizmark.oncosurg.*' => [
                'tab' => 'OncoSurg',
                'label' => 'Управление плагином OncoSurg'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'oncosurg' => [
                'label'       => 'OncoSurg',
                'url'         => Backend::url('bizmark/oncosurg/deseases'),
                'icon'        => 'icon-heartbeat',
                'permissions' => ['bizmark.oncosurg.*'],
                'order'       => 500,
                'sideMenu'    => [
                    'deseases' => [
                        'label'       => 'Заболевания',
                        'url'         => Backend::url('bizmark/oncosurg/deseases'),
                        'icon'        => 'icon-stethoscope',
                        'permissions' => ['bizmark.oncosurg.*'],
                        'order'       => 500,
                    ],
                    'categories' => [
                        'label' => 'Категории',
                        'url'         => Backend::url('bizmark/oncosurg/categories'),
                        'icon'        => 'icon-list',
                        'permissions' => ['bizmark.oncosurg.*'],
                        'order'       => 500,
                    ],
                    'reviews' => [
                        'label'       => 'Отзывы',
                        'url'         => Backend::url('bizmark/oncosurg/reviews'),
                        'icon'        => 'icon-commenting',
                        'permissions' => ['bizmark.oncosurg.*'],
                        'order'       => 500,
                    ],
                ],
            ],
        ];

    }
}