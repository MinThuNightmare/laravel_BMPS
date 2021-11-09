@extends('posts.introcode')
@section('intocode')

<div class="container-fluid ">
    <div class="container pt-5">
        <div class="row">
            <div class="col-12">
                <div class="post_link d-flex justify-content-end mb-3">
                    <a class="btn btn-sm btn-outline-info" href="{{url('posts/create')}}">Create Post</a>
                </div>
                <table class="table table-bordered table-hover ">
                    <thead class="text-center">
                        <tr>
                            <th>id</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Content</th>
                            <th>Edit / Delete</th>
                        </tr>
                    </thead>
                    <tbody >
                        @foreach ($datas as $data )
                            <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->title}}</td>
                                <td>{{$data->img}}</td>
                                <td>{{$data->content}}</td>
                                <td>
                                    <div class="d-flex">
                                        <a class="text-decoration-none me-2" href="{{url('posts/'.$data->id.'/edit')}}">
                                            <button class="btn btn-sm btn-outline-info">Edit</button>
                                        </a>
                                        <form action="{{url('posts/'.$data->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-outline-danger">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
