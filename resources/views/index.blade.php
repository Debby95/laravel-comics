@extends('home.php')

@section('page_content')
    <div class="container pt-5 pb-5">
        <div class="row row-cols-6">        
                @foreach ($comics as $comic)
                
                    <div class="col text-white">
                        <img class="img-fluid" src="{{ $comics['thumb'] }}" alt="">
                        <div>{{ $comics['title']}}</div>
                    </div>
                @endforeach
        </div>
    </div>
@endsection