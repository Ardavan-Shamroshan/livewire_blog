<?php

namespace App\Http\Livewire\Search;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;

class Search extends Component
{
    public $articles;
    public $categories;
    public $category;
    public $search;

    public $rules = [
        'category' => 'nullable',
        'search' => 'nullable'
    ];

    public function updatedCategory()
    {
        return redirect()->route('blog.search', [
            'category' => $this->category
        ]);
    }
    public function updatedSearch()
    {
        return redirect()->route('blog.search', [
            'category' => $this->category ?? 0,
            'search' => $this->search
        ]);
    }

    public function mount($category, $search = null)
    {
        $this->category = Category::find($category);
        $this->categories = Category::all();

        // if category is not empty
        if (!empty($this->category) && empty($this->search))
            $this->articles = $this->category->articles;

        // if search is not empty
        else if (!empty($this->search) && empty($this->category))
            $this->articles = Article::query()
                ->where('h_title', 'like', '%' . $search . '%')
                ->orWhere('top_title', 'like', '%' . $search . '%')
                ->orWhere('text', 'like', '%' . $search . '%')
                ->get();

        // if search and category are not empty
        else if (!empty($this->search) && !empty($this->category)) {
            $this->articles = $this->category->articles()
                ->where('h_title', 'like', '%' . $search . '%')
                ->Where('top_title', 'like', '%' . $search . '%')
                ->Where('text', 'like', '%' . $search . '%')
                ->get();
        }

        // if both search and category are empty
        else
            $this->articles = Article::all();
    }

    public function render()
    {
        return view('livewire.search.search');
    }
}
