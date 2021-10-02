<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Videos;
use App\Models\Likes;
use Validator;
use Illuminate\Support\Facades\Route;

class VideoController extends Controller
{
    /**
     * Create new video.
     *
     */
    public function create(Request $request){

        $validator = Validator::make($request->all(),
            [
                'name' => ['required', 'string'],
                'file' => ['required', 'string']
            ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        if($user = auth()->user()){
            return  Videos::create([
                'name' => $request->name,
                'file' => $request->file,
                'created_by' => $user->id
            ]) ;
        }
    }

    /**
     * Create like for video.
     *
     */
    public function like(Route $request){
        $videoId = isset(Route::current()->parameters()['id']) ? Route::current()->parameters()['id'] : '';
        $validator = Validator::make([
                'video_id' => $videoId
            ],
            [
                'video_id' => ['required', 'string'],
            ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        if($user = auth()->user()){
            if($video = Videos::find($videoId)->get()){
                return  Likes::create([
                    'video_id' => $videoId,
                    'created_by' => $user->id
                ]) ;
            }else{
                return 'Video not found';
            }

        }
    }

    /**
     * Create video with user likes.
     *
     */
    public function getLikes(Request $request){
        if($user = auth()->user()){
            return Likes::select()->where('created_by',$user->id)->get();
        }
    }
}
