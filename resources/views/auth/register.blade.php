@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>
                <div class="card-body">
                    {!! Form::open(['method'=>'POST', 'route' => 'register']) !!}
                        @csrf
                        {!! Form::control('text', 'name', $errors, [
                            'label' => __('Name'),
                            'placeholder' => 'John Doe',
                        ], [
                            'autocomplete' => 'name',
                            'autofocus' => 'autofocus',
                            'required' => 'required'
                        ]) !!}
                        {!! Form::control('email', 'email', $errors, [
                            'label' => __('E-Mail Address'),
                            'placeholder' => 'john@doe.org',
                        ], [
                            'autocomplete' => 'email',
                            'required' => 'required'
                        ]) !!}
                    {!! Form::control('password', 'password', $errors, [
                            'label' => __('Password'),
                            'placeholder' => '******',
                        ], [
                            'autocomplete' => 'new-password',
                            'required' => 'required'
                        ]) !!}
                        {!! Form::control('password', 'password_confirmation', $errors, [
                            'label' => __('Confirm Password'),
                            'placeholder' => '******',
                        ], [
                            'autocomplete' => 'new-password',
                            'required' => 'required'
                        ]) !!}
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                {!! Form::button( __('Register'), ['type' => 'submit']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
