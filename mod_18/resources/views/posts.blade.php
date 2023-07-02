@extends('master')
@section('content')
    <div class="py-5">
        <div class="container px-5 pb-5">
            <div class="row gx-5 justify-content-between align-items-center">

                <div class="row">
                    <div class="col-12">
                        <h2>Latest Posts</h2>
                    </div>
                </div>

                <div class="row">

                    @foreach ($posts as $post)
                        <div class="col-md-6">
                            <div class="row m-3 bg-info p-4">
                                <div class="col-12">
                                    <div class="post">
                                        <h3>{{ $post->title }}</h3>
                                        <div class="d-flex justify-between">
                                            <div class="col-4">
                                                <img class="img-fluid" src="{{ $post->post_thumb }}" alt="">
                                            </div>
                                            <div class="col-8">
                                                <p>{{ $post->excerpt }}</p>
                                                <span class="badge bg-primary">{{ $post->category->name }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>
    </div>
@endsection
