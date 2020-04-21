<?php

namespace CherryAudio\ActionBar;

use Laravel\Nova\ResourceTool;

class ActionBar extends ResourceTool
{
    /**
     * Get the displayable name of the resource tool.
     *
     * @return string
     */
    public function name()
    {
        return 'Action Bar';
    }

    /**
     * Get the component name for the resource tool.
     *
     * @return string
     */
    public function component()
    {
        return 'action-bar';
    }
}
