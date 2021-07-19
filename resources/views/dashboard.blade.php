@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @role('customer')

                     Hello customer

                    @endrole

                    @role('merchant')

                     Hello merchant

                    @endrole

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-2 col-md-offset-3 text-right">
                <strong>Select Language: </strong>
            </div>
            <div class="col-md-4">
                <select class="form-control Langchange">
                    <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                    <option value="zhh" {{ session()->get('locale') == 'zhh' ? 'selected' : '' }}>Chinese</option>                    
                </select>
            </div>
            <h1 style="margin-top: 80px;">{{ __('message.welcome') }}</h1>
            @lang('messages.welcome')
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script type="text/javascript">  
            var url = "{{ route('home') }}";
                $(".Langchange").change(function(){

                    window.location.href = url + "?lang="+ $(this).val();
                });  
            </script>
@endsection
