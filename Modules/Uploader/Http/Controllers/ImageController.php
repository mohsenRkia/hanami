<?php

namespace Modules\Uploader\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\panel\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Modules\Article\Services\ArticleServices;
use Modules\Uploader\Services\ImageServices;

class ImageController extends Controller
{
    public function __construct(
        private ImageServices   $imageServices,
        private ArticleServices $articleServices
    )
    {
    }

    public function initiate($module, $model, $type,$id)
    {
        return $this->imageServices->initiate($module, $model, $type,$id);
    }

    public function detachImageFromMedia($module, $model, $type,$id)
    {
        return $this->imageServices->detach($module, $model, $type,$id);
    }

    public function uploadImage(Request $r, $module = 'App', $model, $type, $id)
    {
        $media = $this->imageServices->upload($r, $module, $model, $type, $id);
        return response()->json($media);
    }


    public function uploadImageEditor(Request $r, $id)
    {
        $article = Article::find($id);
        $validation = Validator::make($r->all(), [
            'image' => 'file|max:1024|min:5|mimes:jpg,bmp,png,jpeg'
        ]);

        if ($validation->fails()) {
            return response()->json(['errors' => $validation->errors()], 401);
        }


        $media = MediaUploader::fromSource($r->file('image'))
            ->toDirectory('images/articles/' . date('Y') . '/' . date('m'))
            ->onDuplicateIncrement()
            ->upload();

        $article->attachMedia($media, ['Article']);
        $url = $article->getMedia('Article')->last()->getUrl();
        return response()->json($url);
    }
}
