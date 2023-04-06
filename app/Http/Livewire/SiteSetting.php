<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\SiteSetting as SiteSettingModel;
use App\Http\Controllers\ImageHandlerController;

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
        
        $imageHandler = new ImageHandlerController();
        $image = base64_encode(file_get_contents($this->favicon->pat‌th()));

        $file_name = $imageHandler->base64Upload($image, 'site');

        if ($siteSetting) {
            $siteSetting->title = $this->title;
            $siteSetting->favicon = $file_name;
            $siteSetting->save();
        } else {
            $newSetting = new SiteSettingModel();
            $newSetting->title = $this->title;
            $newSetting->favicon = $file_name;
            $newSetting->save();
        }
    }
}
