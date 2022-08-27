<?php

namespace App\Http\Livewire\Index;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{
    public $newArticles;
    public $bestArticles;
    public $categories;

    public function mount()
    {
        // Auth::loginUsingId(23);
        $this->newArticles = Article::query()->orderBy('created_at', 'desc')->take(4)->get();
        $this->bestArticles = Article::query()->where('is_best', 1)->take(4)->get();
        $this->categories = Category::all();
    }
    public function render()
    {
        return view('livewire.index.index');
    }
}
