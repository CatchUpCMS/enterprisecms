<?php

namespace Modules\Dashboard\Events\Handlers;

use Modules\Dashboard\Events\ConfigWasSaved;
use File;

class SetDebug
{
    /**
     * Handle the event.
     *
     * @param ConfigWasSaved $event
     */
    public function handle(ConfigWasSaved $event)
    {
        if ($event->key !== 'cms.core.app.debug') {
            return;
        }

        $path = config('cms.core.app.debugfile');
        if ($event->value == 'true') {
            File::put($path, 'DEBUG Enabled - '.time());
        } else {
            if (File::exists($path)) {
                File::delete($path);
            }
        }
    }
}
