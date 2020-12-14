<?php

namespace App\Observers;

use App\Models\Section;
use Illuminate\Support\Facades\Cache;

class SectionObserver
{
    public function created(Section $section)
    {
        Cache::put(sprintf('section.%s', $section->id), $section);
    }

    public function updated(Section $section)
    {
        Cache::put(sprintf('section.%s', $section->id), $section);
    }

    public function retrieved(Section $section)
    {
        Cache::add(sprintf('section.%s', $section->id), $section);
    }

    public function deleted(Section $section)
    {
        Cache::forget(sprintf('section.%s', $section->id));
    }

    public function restored(Section $section)
    {
        Cache::put(sprintf('section.%s', $section->id), $section);
    }
}
