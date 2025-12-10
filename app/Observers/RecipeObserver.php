<?php

namespace App\Observers;

use App\Models\Recipe;
use Illuminate\Support\Facades\Log;

class RecipeObserver
{
    public function creating(Recipe $recipe): void
    {
        // Ако title не е поставен, додади default
        if (! $recipe->title) {
            $recipe->title = 'Default Recipe Title';
        }
        //Log::info("Creating recipe: {$recipe->title}");
    }

    // По insert
    public function created(Recipe $recipe): void
    {
        Log::info("Recipe created: {$recipe->title}");
    }

    public function updated(Recipe $recipe): void
    {
        Log::info("Recipe updated: {$recipe->title}");
    }

    public function deleted(Recipe $recipe): void
    {
        Log::info("Recipe deleted: {$recipe->title}");
    }

    /**
     * Handle the Recipe "restored" event.
     */
    public function restored(Recipe $recipe): void
    {
        //
    }

    /**
     * Handle the Recipe "force deleted" event.
     */
    public function forceDeleted(Recipe $recipe): void
    {
        //
    }
}
