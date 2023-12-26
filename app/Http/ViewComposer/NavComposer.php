<?php

namespace App\Http\Viewcomposer;

use  App\Models\User;
use Illuminate\View\View;

use Auth;

use App\Models\Information;
use App\Models\Category;
use App\Models\SystemSetting;
use App\Models\PageBanner;




use Illuminate\Support\Facades\Cache;

class   NavComposer
{


	public function compose(View $view)
	{
		$global_categories = Category::parents()->orderBy('id', 'asc')->get();
		$footer_info = Information::where('blog', false)->parents()->get();
		$system_settings = SystemSetting::first();

		$news_letter_image = PageBanner::where('page_name', 'newsletter')->first();
		$view->with([
			'footer_info' => $footer_info,
			'global_categories' => $global_categories,
			'system_settings' => $system_settings,
		]);
	}
}
