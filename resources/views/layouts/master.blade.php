@include('layouts.header')

@include('layouts.sidebar')
<div class="content-wrapper">
    @section('content-header')
        @show
    <div class="content">
@section('content')
        @show
    </div>
</div>

@include('layouts.footer')