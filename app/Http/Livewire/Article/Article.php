<?php

namespace App\Http\Livewire\Article;

use App\Models\Comment;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Article as ModelsArticle;

class Article extends Component
{
    public ModelsArticle $article;
    public $commentText;

    public function render()
    {
        $comments = Comment::query()->where('article_id', $this->article->id)->get();
        return view('livewire.article.article', compact('comments'));
    }

    public function comment()
    {
        $this->validate([
            'commentText' => 'string',
        ]);
        $comment = new Comment;
        $comment->text = $this->commentText;
        $comment->user_id = Auth::id();
        $comment->article_id = $this->article->id;
        $comment->is_active = 1;
        $comment->parent_id = 0;
        $comment->save();
        $this->reset('commentText');
        $this->emit('sweet-alert', 'success', 'نظر با موفقیت ثبت شد');
        return redirect()->back();
    }

    public function destroy(Comment $comment) {
        $comment->delete();
        $this->emit('sweet-alert', 'success', 'نظر با موفقیت حذف شد');
        return back();
    }
}
