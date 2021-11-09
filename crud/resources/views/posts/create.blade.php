@extends('posts.introcode')
@section('intocode')

    <div class="container-fluid ">
        <div class="container mt-5">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <h3 class="text-info">Upload Post</h3>
                    <div class="post_link d-flex justify-content-end">
                        <a href="{{url('posts')}}" class="btn btn-sm btn-outline-success">View Posts</a>
                    </div>
                    <form action="{{url('posts')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="mt-3 text-black-50" for="title">Post Title</label>
                            <input class="form-control @error('title') is-invalid @enderror" type="text" id="title" name="title" placeholder="Post Title" value="{{old('content')}}">

                            <label class="mt-3 text-black-50" for="img">Post Imgae</label>
                            <input class="form-control @error('img') is-invalid @enderror" type="text" id="img" name="img" placeholder="Your Image" value="{{old('content')}}">

                            <label class="mt-3 text-black-50" for="content">Your Post</label>
                            <textarea class="form-control @error('content') is-invalid @enderror" placeholder="What is in Your Mind..." name="content" id="content" cols="30" rows="3">{{old('content')}}</textarea>

                            <button class="mt-3 btn btn-sm btn-outline-info">Upload</button>
                        </div>
                    </form>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
    </div>

@endsection
