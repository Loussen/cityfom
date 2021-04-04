@if(session('message'))
    @if(isset($error_type) && !empty($error_type))
        @php $error_type = 'warning' @endphp
    @else
        @php $error_type = 'success' @endphp
    @endif
    <div class="alert alert-{{$error_type}}" role="alert">
        {{session('message')}}
    </div>
@endif
