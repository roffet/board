@extends('layouts.app')

@section('content')

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="border rounded col-md-offset-3 col-md-6 p-5 m-3 border-brown bg-brown4 text-brown3">
            <h2 class="mb-4">
                <b>投稿の編集</b>
            </h2>

            <form method="POST" action="{{ route('posts.update', ['post' => $post]) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <fieldset class="mb-4">
                    <div class="form-group">
                        <label for="title">
                            タイトル
                        </label>
                        <input
                            id="title"
                            name="title"
                            class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}"
                            value="{{ old('title') ?: $post->title }}"
                            type="text"
                        >
                        @if ($errors->has('title'))
                            <div class="invalid-feedback">
                                {{ $errors->first('title') }}
                            </div>
                        @endif
                    </div>

                    <!-- 動作確認はまだ -->
                    <div class="form-group">
                        <label class="checkbox-inline" for="tag">
                            タグ
                        </label>
                        <!--  $post->tagsだと選択肢が全て出ないので今はこれ データベースから取ってきて判断する laracastsのものをさらに調整した -->
                        @foreach ($tags as $tag)
                            <input
                                type="checkbox"
                                name="tags[]"
                                value="{{ $tag->id }}"
                                @if($post->tags->contains($tag->id)) checked=checked @endif
                            >
                            {{$tag->name}}
                        @endforeach
                    </div>

                    <div class="form-group">
                        <label for="body">
                            本文
                        </label>

                        <textarea
                            id="body"
                            name="body"
                            class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}"
                            rows="4"
                        >{{ old('body') ?: $post->body }}</textarea>
                        <!-- ?: $post->body 変更する前を表示するためのもの 上のタイトルでも同じこと -->
                        @if ($errors->has('body'))
                            <div class="invalid-feedback">
                                {{ $errors->first('body') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group mb-3">
                        <label>
                            カフェ画像
                        </label>

                        <input type="file" name="cafeimage" value="{{ $post->getFirstMedia('postImages')->getUrl('card') }}" class="form-control {{ $errors->has('cafeimage') ? 'is-invalid' : '' }}">
                        @if ($errors->has('cafeimage'))
                            <div class="invalid-feedback">
                                {{ $errors->first('cafeimage') }}
                            </div>
                        @endif
                    </div>

                    <div class="mt-5">
                        <a class="btn btn-secondary" href="{{ route('index') }}">
                            キャンセル
                        </a>

                        <button type="submit" class="btn btn-primary">
                            更新する
                        </button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
@endsection
