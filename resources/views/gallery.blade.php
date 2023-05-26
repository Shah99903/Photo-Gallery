@extends('layout.app')
@section('section')

<div class="container">
    sdsds
    @php $row_count = 0; @endphp
    @foreach($images as $key => $dtl)
    @php $row_count = $row_count +1; @endphp
    @if($row_count == 1 || (($row_count -1) % 3) == 0)
    <div class="row">
        @endif
        <a href="https://unsplash.it/1200/768.jpg?image=251" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
            <img src="{{asset('images') . '/'.$dtl->image_path}}" class="img-fluid rounded" />
        </a>
        @if(($row_count % 3) ==0 )
    </div>
    @endif
    @endforeach

</div>
@endsection