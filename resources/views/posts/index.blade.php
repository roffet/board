@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <!-- <div class="col-md-8">
            <div class="row justify-content-center"> -->
            <!-- この中でさらに12等分と考えて colの数値を決める -->
            @foreach($posts as $post)
                <div class="col-md-6 col-lg-4">
                    <div class="card m-3 border-brown bg-brown4 text-brown3">
                        <div class="card-header">
                            <h5><b>
                                {{ $post->title }}&nbsp;

                                <i class="fas fa-heart"></i>{{$post->likes_count}}&nbsp;
                                <i class="fas fa-comments"></i>{{ $post->comments->count() }}
                            </b></h5>
                        </div>

                        <div class="card-header">
                            <h5>
                                @foreach($post->tags as $tag)
                                <a href="{{ route('TagSearch', ['id' => $tag->id]) }}" class="badge badge-brown text-brown4">{{ $tag->name }}</a>
                                @endforeach
                            </h5>
                        </div>
                        <img src="{{ $post->getFirstMedia('postImages')->getUrl('card') }}" class="card-img-top">

                        <div class="card-footer bg-brown text-right">
                            <!-- card-linkはあると下線を消してくれるので残す -->
                            <a class="card-link text-brown4" href="{{ route('posts.show', ['post' => $post]) }}">
                                続きを読む
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
            <!-- </div> -->

            <div class="d-flex justify-content-center mb-5">
                {{ $posts->links() }}
            </div>
        <!-- </div> -->

        <!-- <aside class="col-md-4 text-brown3">
            <div class="p-3 mb-3">
                <h4 class="font-italic">About</h4>
                <p class="mb-0">
                    カフェ情報投稿掲示板です。<br>
                    Laravelの勉強に作りました。<br>
                    <br>
                    <ul>
                        <li>タグ機能</li>
                        <li>いいね機能</li>
                        <li>画像投稿</li>
                    </ul>
                </p>
            </div>
        </aside> -->

    </div>
</div>
@endsection
