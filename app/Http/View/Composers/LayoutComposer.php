<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;

class LayoutComposer
{
    public function compose(View $view)
    {
        $layout = [
            'mode'                       => 'light',
            'width'                      => 'fluid',
            'menuPosition'               => 'fixed',
            'topbar'                     => [
                'color' => 'dark',
            ],
            'showRightSidebarOnPageLoad' => false,
        ];

        $view->with('layout', $layout);
    }
}
