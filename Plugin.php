<?php
namespace CheerfulLab\FrontendSpelling;

use System\Classes\PluginBase;

/**
 * frontend-spelling Plugin Information File
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
            'name' => 'Frontend Spelling',
            'description' => 'Response spelling from users',
            'author'      => 'CheerfulLab',
            'icon'        => 'icon-envelope-square'
        ];
    }

    public function registerNavigation()
    {
        return [
            'catalog' => [
                'label'       => 'Spelling requests',
                'url' => \Backend::url('cheerfullab/frontendspelling/spellingrequests'),
                'icon'        => 'icon-envelope-square',
                'order'       => 500,
                'sideMenu' => [
                    'spelling' => [
                        'label'       => 'Spelling requests',
                        'icon'        => 'icon-list-alt',
                        'url' => \Backend::url('cheerfullab/frontendspelling/spellingrequests'),
                    ],
                ]

            ]
        ];
    }

    public function registerComponents()
    {
        return [
            'CheerfulLab\frontendspelling\components\Frontendspelling' => 'frontendspellings'
        ];
    }

}
