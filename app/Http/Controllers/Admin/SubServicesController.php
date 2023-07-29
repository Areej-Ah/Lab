<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\SubService;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use DB;
use Carbon\Carbon;
use App\DataTables\SubServiceDatatable;

class SubServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(SubServiceDatatable $subService)
    {
        return $subService->render('admin.sub_services.index',['title'=>trans('admin.sub_services')]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service:: all();
        return view('admin.sub_services.create',compact('services'),['title'=>trans('admin.create')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $data = $this->validate(request(),
        [
            'title_en' => 'required',
            'title_ar' => 'required',
            'service_id' => 'required',
            'description_ar' =>'required',
            'description_en' =>'required',
            'image'  => 'sometimes|nullable|'.validate_image(),
            'file' => 'required|mimes:doc,pdf,docx',
            'active'  => 'required',

        ],[],[

            'title_en' => trans('admin.name_en'),
            'title_ar' => trans('admin.name_ar'),
            'service_id' => trans('admin.service_id'),
            'description_ar' => trans('admin.description_ar'),
            'description_en' => trans('admin.description_en'),
            'image'    => trans('admin.image'),
            'file'    => trans('admin.file'),
            'active'    => trans('admin.active'),
        ]

        );



        if(request()->hasFile('image'))
		{
			$data['image']=up()->upload([

			    //	'new_name'    => '',
				'file'        => 'image',
				'path'        => 'public/sub_services',
                'upload_type' => 'single',
                'delete_file' => '',
			]);
		}

        if(request()->hasFile('file'))
		{
			$data['file']=up()->upload([

			    //	'new_name'    => '',
				'file'        => 'file',
				'path'        => 'public/sub_services',
                'upload_type' => 'single',
                'delete_file' => '',
			]);
		}

        SubService::create($data);
        session()->flash('success',trans('admin.record_added'));
        return redirect(aurl('sub_services'));


    }



    public function show($id)
    {


    }


    public function edit(SubService $subService)
    {
        $title=trans('admin.edit');
        return view('admin.sub_services.edit',compact('subService','title'));

    }


    public function update(SubService $subService, Request $request)
    {
        $data = $this->validate(request(),
        [
            'title_en' => 'required',
            'title_ar' => 'required',
            'service_id' => 'required',
            'description_ar' =>'required',
            'description_en' =>'required',
            'file' => 'required|mimes:doc,pdf,docx',
            'image'    => 'sometimes|nullable|'.validate_image(),

            'active' => 'required',

        ],[],[

            'title_en' => trans('admin.title_en'),
            'name_ar' => trans('admin.title_ar'),
            'service_id' => trans('admin.service_id'),
            'description_ar' => trans('admin.description_ar'),
            'description_en' => trans('admin.description_en'),
            'image'    => trans('admin.image'),
            'file'    => trans('admin.file'),
            'active'    => trans('admin.active'),
        ]

        );



        if(request()->hasFile('image'))
		{
			$data['image']=up()->upload([

			    //	'new_name'    => '',
				'file'        => 'image',
				'path'        => 'sub_services',
                'upload_type' => 'single',
                'delete_file' => SubService::find($subService->id)->image
			]);
		}

        if(request()->hasFile('file'))
		{
			$data['file']=up()->upload([

			    //	'new_name'    => '',
				'file'        => 'file',
				'path'        => 'sub_services',
                'upload_type' => 'single',
                'delete_file' => SubService::find($subService->id)->file
			]);
		}

        SubService::where('id',$subService->id)->update($data);
        session()->flash('success',trans('admin.record_edited'));
        return redirect(aurl('sub_services'));

    }



    public function destroy(SubService $subService)
    {
        Storage::delete($subService->image);
        Storage::delete($subService->file);
        $subService->delete();
        session()->flash('success',trans('admin.record_deleted'));
        return redirect(aurl('sub_services'));
    }



    public function multi_delete()
    {

        if(is_array(request('item')))
        {
            foreach (request('item') as  $id)
             {
                $subService=SubService::find($id);
                Storage::delete($subService->image);
                Storage::delete($subService->file);
                $service->delete();
             }
        }
        else
        {
            $subService=SubService::find(request('item'));
            Storage::delete($subService->image);
            Storage::delete($subService->file);
            $subService->delete();
        }


        session()->flash('success',trans('admin.record_deleted'));
        return redirect(aurl('sub_services'));
    }
}
