@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>
                <div class="card-body">
                    {!! Form::open(['method'=>'POST', 'route' => 'login']) !!}
                        @csrf
                        {!! Form::control('email', 'email', $errors, [
                            'label' => __('E-Mail Address'),
                            'placeholder' => 'john@doe.org',
                        ], [
                            'autocomplete' => 'email',
                            'autofocus' => 'autofocus',
                            'required' => 'required'
                        ]) !!}
                        {!! Form::control('password', 'password', $errors, [
                            'label' => __('Password'),
                            'placeholder' => '******',
                        ], [
                            'autocomplete' => 'current-password',
                            'required' => 'required'
                        ]) !!}
                        {!! Form::control('checkbox', 'remember', $errors, [
                              'label' => null,
                          ], [
                              'indication' => __('Remember Me')
                          ]) !!}
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                {!! Form::button( __('Login'), ['type' => 'submit']) !!}
                                @if (Route::has('password.request'))
                                    {!! Form::link(__('Forgot Your Password?'), ['href' => route('password.request')]) !!}
                                @endif
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
