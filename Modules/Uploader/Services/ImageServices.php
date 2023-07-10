<?php

namespace Modules\Uploader\Services;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Plank\Mediable\Facades\ImageManipulator;
use Plank\Mediable\Facades\MediaUploader;

class ImageServices
{
    public function __construct()
    {
    }

    public function initiate($module,$model,$type,$id)
    {
        $type = Str::ucfirst($type);
        $model = $this->getModel($module,$model);
        $model = $model::find($id);
        return $model->getMedia($type)->first() ? $model->getMedia($type)->first()->findVariant('thumb')->getUrl() : null;
    }

    public function detach($module,$model,$type,$id)
    {
        $type = Str::ucfirst($type);
        $model = $this->getModel($module, $model);
        $model = $model::find($id);

        $media = $model->getMedia($type)->first();
        $media->findVariant('thumb')->delete();
        $media->findVariant('normal')->delete();
        $media->delete();
        $model->detachMedia($media);

        return $media;
    }
    public function upload($module, $model, $type, $id,$r)
    {
        $type = Str::ucfirst($type);
        $model = $this->getModel($module, $model);
        $model = $model::find($id);

        if ($model && $model->getMedia($type)->first()) {
            $error = [
                'errors' => [
                    [
                        'تنها یک فایل می توانید آپلود کنید.'
                    ]
                ]
            ];
            return response()->json($error, 500);
        }

        $validation = Validator::make($r->all(), [
            'file' => 'file|max:1024|min:5|mimes:jpg,bmp,png,jpeg'
        ]);

        if ($validation->fails()) {
            return response()->json(['errors' => $validation->errors()], 401);
        }


        $media = MediaUploader::fromSource($r->file('file'))
            ->toDestination('uploads','/images/' . date('Y') . '/' . date('m'))
            ->onDuplicateIncrement()
            ->upload();

        //Add Other Sizes
        ImageManipulator::createImageVariant($media, 'thumb');
        ImageManipulator::createImageVariant($media, 'normal');
        $model->attachMedia($media, [$type]);
        return $media;
    }

    public function getModel($module, $model)
    {
        $module = Str::ucfirst($module);
        $model = Str::ucfirst($model);

        switch ($module) {
            case 'App':
                $model = 'App\\Models\\' . $model;
                break;
            default:
                $model = 'Modules\\' . $module . '\\Entities\\' . $model;
        };

        return $model;
    }
}
