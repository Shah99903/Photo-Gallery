@extends('layout.app')
@section('section')

<style>
    div.gallery {
        margin: 5px;
        border: 1px solid #ccc;
        float: left;
        width: 180px;
    }

    div.gallery:hover {
        border: 1px solid #777;
    }

    div.gallery img {
        width: 100%;
        height: auto;
    }

    div.desc {
        padding: 15px;
        text-align: center;
    }
</style>






<button type='button' class='btn btn-info'><a href="{{route('upload')}}">Upload image</a></button>
<button type='button' class='btn btn-info' style="float: right;"><a href="{{route('gallery')}}">View in gallery</a></button>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Image name</th>
            <th scope="col">Image</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($images as $key => $dtl)
        <tr>
            <th scope="row">{{$key + 1}}</th>
            <td>{{$dtl->name}}</td>
            <td> <img src="{{asset('images') . '/'.$dtl->image_path}}" alt="alternatetext" width="100"></td>
            <td>
                <button type="button" onclick="confirm_delete('{{$dtl->id}}')" class="btn btn-info">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<script>
    function confirm_delete(id) {
        var result = confirm("Want to delete?");
        if (result) {
            //Logic to delete the item
            // console.log("{{url('delete/')}}" + "/" + id);
            location.href = "{{url('delete/')}}" + "/" + id;
        }
    }
</script>
@endsection