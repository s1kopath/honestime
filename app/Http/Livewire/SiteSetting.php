<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\SiteSetting as SiteSettingModel;

class SiteSetting extends Component
{
    public $title;
    public $favicon;

    public function render()
    {
        return view('livewire.site-setting');
    }

    public function mount()
    {
        $siteSetting = SiteSettingModel::first();
        if ($siteSetting) {
            $this->title = $siteSetting->title;
            $this->favicon = $siteSetting->favicon;
        } else {
            $this->title = '';
            $this->favicon = '';
        }
        // dd($this->title);
    }

    public function baseSettingUpdate()
    {
        $siteSetting = SiteSettingModel::first();
        if ($siteSetting) {
            $siteSetting->title = $this->title;
            $siteSetting->favicon = $this->favicon;
            $siteSetting->save();
        } else {
            $newSetting = new SiteSettingModel();
            $newSetting->title = $this->title;
            $newSetting->favicon = $this->favicon;
            $newSetting->save();
        }
    }
}
