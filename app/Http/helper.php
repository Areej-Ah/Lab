<?php

if (!function_exists('setting')) {
	function setting() {
		return \App\Models\Setting::orderBy('id', 'desc')->first();
	}
}



if (!function_exists('load_dep')) {
	function load_dep($select = null, $dep_hide = null) {

		$categories = \App\Models\Category::selectRaw('name_'.session('lang').' as text')
			->selectRaw('id as id')
			->selectRaw('parent as parent')
			->get(['text', 'parent', 'id']);
		$dep_arr = [];
		foreach ($categories as $category) {
			$list_arr             = [];
			$list_arr['icon']     = '';
			$list_arr['li_attr']  = '';
			$list_arr['a_attr']   = '';
			$list_arr['children'] = [];

			if ($select !== null && $select == $category->id) {

				$list_arr['state'] = [
					'opened'   => true,
					'selected' => true,
					'disabled' => false,
				];
			}

			if ($dep_hide !== null && $dep_hide == $category->id) {

				$list_arr['state'] = [
					'opened'   => false,
					'selected' => false,
					'disabled' => true,
					'hidden'   => true,
				];
			}

			$list_arr['id']     = $category->id;
			$list_arr['parent'] = $category->parent > 0?$category->parent:'#';
			$list_arr['text']   = $category->text;
			array_push($dep_arr, $list_arr);
		}

		return json_encode($dep_arr, JSON_UNESCAPED_UNICODE);
	}
}


if (!function_exists('up')) {
	function up() {
		return new \App\Http\Controllers\UploadController;
	}
}


if (!function_exists('aurl'))
{
    function aurl ($url=null)
    {
        return url('admin/'.$url);
    }
}


if (!function_exists('active_menu'))
{
    function active_menu ($link)
    {
       if (preg_match('/'.$link.'/i',Request::segment(2)))
       {
           return ['menu-open','display:block'];

       }
       else
       {
           return ['',''];

       }
    }

}


if (!function_exists('admin'))
{
    function admin ()
    {
        return auth()->guard('admin');
    }

}


if (!function_exists('lang'))
{
    function lang()
    {
       $mainLang= 'ar';

       if (session()->has('lang')) {
        return session('lang');
       }else {
        return session()->put('lang', $mainLang);
       }
    }

}

if (!function_exists('direction'))
{

    function direction()
    {
       if (session()->has('lang')) {

            if (session('lang')== 'ar') {
                return 'rtl';
            }else {
                return 'ltr';
            }
       }else {
            if (setting()->main_lang == 'ar') {
                return 'rtl';
            } else {
                return 'ltr';
            }

       }
   }

}


if (!function_exists('datatable_lang'))
{
    function datatable_lang ()
    {
     return [
            'sProcessing'     => trans('admin.sProcessing'),
            'sLengthMenu'     => trans('admin.sLengthMenu'),
            'sZeroRecords'    => trans('admin.sZeroRecords'),
            'sEmptyTable'     => trans('admin.sEmptyTable'),
            'sInfo'           => trans('admin.sInfo'),
            'sInfoEmpty'      => trans('admin.sInfoEmpty'),
            'sInfoFiltered'   => trans('admin.sInfoFiltered'),
            'sInfoPostFix'    => trans('admin.sInfoPostFix'),
            'sSearch'         => trans('admin.sSearch'),
            'sUrl'            => '',
            'sInfoThousands'  => trans('admin.sInfoThousands'),
            'sLoadingRecords' => trans('admin.sLoadingRecords'),
            'oPaginate' => [
            'sFirst'      => trans('admin.sFirst'),
            'sLast'       => trans('admin.sLast'),
            'sNext'       => trans('admin.sNext'),
            'sPrevious'   => trans('admin.sPrevious'),
            ],
            'oAria' =>[
            'sSortAscending'  => trans('admin.sSortAscending'),
            'sSortDescending' => trans('admin.sSortDescending'),
            ],
        ];
    }

}


/////////    Validate Helper Functions  ///////


if (!function_exists('validate_image'))
{
    function validate_image($ext = null)
    {

        if ($ext === null) {
            return 'image|mimes:jpg,jpeg,png,gif,bmp';
        }else {
            return 'image|mimes:'.$ext;
        }

    }

}


/////////    Validate Helper Functions  ///////


