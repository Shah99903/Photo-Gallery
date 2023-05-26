@extends('layout.app')
@section('section')

<style>
    .centeralign {
        text-align: center;
    }

    .gallery {
        border: 1px solid black;
        margin-top: 100px;
        margin-bottom: 100px;
        margin-right: 100px;
        margin-left: 100px;
        background-color: lightblue;
    }
</style>


<div class="centeralign gallery">
    <h1>Image Gallery</h1>
    <div class="row">
        <div class="col-md-6">
            <form action="{{route('upload.create')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="text" class="form-control" name="image_name" /><br />
                <input type="file" class="form-control" name="fileToUpload" id="imgInp" /><br />
                <input type="submit" class="btn btn-info" value="Upload Image" name="submit" /><br />
            </form>
        </div>
        <div class="col-md-6">
            <img id="blah" src="#" alt="your image" width="400" />
        </div>
    </div>
</div>
<script>
    imgInp.onchange = (evt) => {
        const [file] = imgInp.files;
        if (file) {
            blah.src = URL.createObjectURL(file);
        }
    };
</script>
@endsection