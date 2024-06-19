<?php

namespace App\Observers;

use App\Models\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Events\ShouldHandleEventsAfterCommit;

class ImageObserver implements ShouldHandleEventsAfterCommit
{
    /**
     * Handle the Image "deleted" event.
     */
    public function deleted(Image $image): void
    {
        Storage::delete($image->url);
    }
}
