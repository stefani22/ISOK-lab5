<?php

namespace App\Observers;

use App\Models\Category;
use Illuminate\Support\Facades\Log;

class CategoryObserver
{
    public function creating(Category $category): void
    {
        // Ако името не е поставено, додади default
        if (! $category->name) {
            $category->name = 'Default Category';
        }
        //Log::info("Creating category: {$category->name}");
    }

    /**
     * Handle the Category "created" event.
     */
    public function created(Category $category): void
    {
        Log::info("Category created: {$category->name}");
    }

    /**
     * Handle the Category "updated" event.
     */
    public function updated(Category $category): void
    {
        Log::info("Category updated: {$category->name}");
    }

    /**
     * Handle the Category "deleted" event.
     */
    public function deleted(Category $category): void
    {
        Log::info("Category deleted: {$category->name}");
    }

    /**
     * Handle the Category "restored" event.
     */
    public function restored(Category $category): void
    {
        //
    }

    /**
     * Handle the Category "force deleted" event.
     */
    public function forceDeleted(Category $category): void
    {
        //
    }
}
