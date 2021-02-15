
    @extends('layouts.app')

@section('content')
       
            <!-- Styles -->
            <link href="{{ asset('css/rules.css') }}" rel="stylesheet">

            {{-- <div class="main-container"> --}}
        
        
                <router-view></router-view>

        
            {{-- </div> --}}







@endsection
