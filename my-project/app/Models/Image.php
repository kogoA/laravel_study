<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
use App\Models\Owner;
use Illuminate\Support\Facades\Auth;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'owner_id',
        'filename'
    ];

    public function __construct()
    {
        $this->middleware('auth:owners');

        $this->middleware(function($request, $next) {
            $id = $request->route()->parameter('image');
            if(!is_null($id)) {
                $imagesOwnerId = Image::findOrFail($id)->owner->id;
                $imageId  = (int)$imagesOwnerId;
                if($imageId !== Auth::id()) {
                    abort(404);
                } 
            }

            return $next($request);
        });
    }

    public function index()
    {
        $images = Image::where('owner_id', Auth::id())->orderBy('updated_at', 'desc')->paginate(20);

        return view('owner.images.index' ,compact('images'));

    }

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }

}
