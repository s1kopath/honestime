<?php

namespace App\Observers;

use App\Models\SiteSetting;

class SiteSettingObserver
{
    /**
     * Handle the SiteSetting "created" event.
     *
     * @param  \App\Models\SiteSetting  $siteSetting
     * @return void
     */
    public function created(SiteSetting $siteSetting)
    {
        //
    }

    /**
     * Handle the SiteSetting "updated" event.
     *
     * @param  \App\Models\SiteSetting  $siteSetting
     * @return void
     */
    public function updated(SiteSetting $siteSetting)
    {
        //
    }

    /**
     * Handle the SiteSetting "deleted" event.
     *
     * @param  \App\Models\SiteSetting  $siteSetting
     * @return void
     */
    public function deleted(SiteSetting $siteSetting)
    {
        //
    }

    /**
     * Handle the SiteSetting "restored" event.
     *
     * @param  \App\Models\SiteSetting  $siteSetting
     * @return void
     */
    public function restored(SiteSetting $siteSetting)
    {
        //
    }

    /**
     * Handle the SiteSetting "force deleted" event.
     *
     * @param  \App\Models\SiteSetting  $siteSetting
     * @return void
     */
    public function forceDeleted(SiteSetting $siteSetting)
    {
        //
    }
}
