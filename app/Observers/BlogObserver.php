<?php

namespace App\Observers;

use Illuminate\Support\Facades\Storage;
use App\Blog;
use Intervention\Image\ImageManagerStatic;

class BlogObserver
{
    public function creating(Blog $blog)
    {
        if ($logo = request('logo')) {
            $fileName = 'blogs/'.uniqid('Blog_logo_').'.jpg';
            $image = ImageManagerStatic::make($logo);

            $image->stream('jpg', 40);

            Storage::disk('local')->put('public/'.$fileName, $image);
            $blog->logo = $fileName;
        }
    }

    /**
     * Handle the Blog "created" event.
     *
     * @param  \App\Blog  $blog
     * @return void
     */
    public function created(Blog $blog)
    {

    }

    public function saved(Blog $blog)
    {
//        $blog->user_id = auth()->user()->id;
    }

    /**
     * Handle the Blog "updated" event.
     *
     * @param  \App\Blog  $blog
     * @return void
     */
    public function updated(Blog $blog)
    {

    }

    /**
     * Handle the Blog "deleted" event.
     *
     * @param  \App\Blog  $blog
     * @return void
     */
    public function deleted(Blog $blog)
    {
        //
    }

    /**
     * Handle the Blog "restored" event.
     *
     * @param  \App\Blog  $blog
     * @return void
     */
    public function restored(Blog $blog)
    {
        //
    }

    /**
     * Handle the Blog "force deleted" event.
     *
     * @param  \App\Blog  $blog
     * @return void
     */
    public function forceDeleted(Blog $blog)
    {
        //
    }
}
