<main class="main container">
    <div class="row my-4">
        <div id="articleRight" class="col-12 col-md-8 col-xl-9">
            <div class="p-2 bg-light rounded">
                <h1 class="text-center font_2 py-2">{{ $article->h_title }}</h1>
                <div class="image text-center">
                    <img src="{{ asset($article->image) }}" alt="توضیح تصویر">
                </div>
                <div class="p-2 text_container">
                    <p>
                        <?= html_entity_decode($article->text) ?>
                    </p>
                </div>
            </div>

        </div>

        <div id="articleLeft" class="col-12 col-md-4 col-xl-3 mt-3 mt-md-0">
            <div class="row bg-light px1 py-5 text-center justify-content-center d-flex rounded w-100 m-auto">
                <div class="image rounded-circle overflow-hidden h_10 w_10 text-center justify-content-center">
                    <img class="max_w_100 m-auto" src="/assets/images/logo.png" alt="توضیح تصویر">
                </div>

                <div class="col-12 mt-3 justify-content-center">
                    <small class="text-center d-block">نویسنده:</small>
                    <h6 class="text-center">{{ $article->writer_name }}</h6>

                    <small class="text-center d-block mt-3">تاریخ:</small>
                    <h6 class="text-center">{{ $article->created_at->diffForHumans() }}</h6>

                    <div class="col-12 justify-content-center text-center mt-3">
                        <span class="text-center">بازدید : {{ $article->view_count }} </span>
                    </div>

                    <div class="col-12 justify-content-center text-center mt-3">
                        <a href="#" class="btn rounded_5 btn-outline-dark">دیگر مقالات </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="row justify-content-center align-items-center alert-secondary p-3">

        <div class="row p-3 justify-content-center text-right alert-light d-block mb-4 col-12">
            @foreach (explode('-', $article->keywords) as $keyword)
            <a href="" class="bg-light text-dark rounded p-1">#{{ $keyword }}</a>
            @endforeach
        </div>

        @auth
        <div class="col-12 row justify-content-center form-group">
            <h5 class="col-12 text-center">متن نظر:</h5>
            @error('commentText')
            <small class="d-block text-danger w-100 text-center">{{ $message }}</small>
            @enderror
            <textarea rows="10" class="form-control rounded shadow col-12 col-md-8" wire:model="commentText"></textarea>
            <div class="text-center col-12">
                <button class="my-2 px-3 btn btn-sm bg-success p-1 rounded-pill" wire:click="comment">ثبت نظر</button>
            </div>
        </div>
        @endauth
        @guest
        <div class="col-12 row justify-content-center form-group">
            <a href="{{ route('auth.login') }}" class="bg-light text-primary rounded p-1">برای ثبت نظر وارد شوید</a>
        </div>
        @endguest

        <div class="col-12 col-md-11 bg-white p-3">
            @foreach($comments as $comment)
            <div class="row my-2 d-block p-2 rounded shadow-sm border_1 col-11 m-auto shadow">
                <div class="row justify-content-lg-between w-100 m-auto">
                    <h6 class="text-right text-success">عباس در تاریخ 99/12/20</h6>
                    @auth
                    @if(auth()->user()->id == $comment->user_id)
                    <span>
                        <i class="fas fa-trash text-danger cursor_pointer_text_shadow mx-2" wire:click="destroy({{ $comment }})"></i>
                        <i class="fas fa-edit text-success cursor_pointer_text_shadow mx-2"></i>
                    </span>
                    @endif
                    @endauth
                </div>
                <div class=" w-100 pb-3">
                    <p class="text-justify">{{ $comment->text }}</p>
                    <button class="btn btn-primary rounded_5 px-3 ">پاسخ</button>
                </div>

            </div>
            @endforeach
        </div>
    </div>

</main>
