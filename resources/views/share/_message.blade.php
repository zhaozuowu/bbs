@foreach(['info','success','danger','warning'] as $info)
    @if(session()->has($info))
        <div class="flash-message">
            <p class="alert alert-{{$info}}">
                {{session()->get($info)}}
            </p>
        </div>
    @endif

@endforeach
