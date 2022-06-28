@extends('auth.layouts.app')
@section('content')
    <div class="full-page register-page section-image" data-color="blue"
        data-image="{{ asset('storage') }}/assets/img/bg5.jpg">
        <div class="content">
            <div class="container">
                <div class="card card-register card-plain text-center">
                    <div class="card-header ">
                        <div class="row  justify-content-center">
                            <div class="col-md-8">
                                <div class="header-text">
                                    <h2 class="card-title">Light Bootstrap Dashboard PRO</h2>
                                    <h4 class="card-subtitle">Register for free and experience the dashboard today
                                    </h4>
                                    <hr />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-md-5 ml-auto">
                                <div class="media">
                                    <div class="media-left">
                                        <div class="icon">
                                            <i class="nc-icon nc-circle-09"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h4>Free Account</h4>
                                        <p>Here you can write a feature description for your dashboard, let the
                                            users know what is the value that you give them.</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <div class="icon">
                                            <i class="nc-icon nc-preferences-circle-rotate"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h4>Awesome Performances</h4>
                                        <p>Here you can write a feature description for your dashboard, let the
                                            users know what is the value that you give them.</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <div class="icon">
                                            <i class="nc-icon nc-planet"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h4>Global Support</h4>
                                        <p>Here you can write a feature description for your dashboard, let the
                                            users know what is the value that you give them.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mr-auto">
                                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card card-plain">
                                        <div class="content">
                                            <div class="form-group">
                                                <input type="text" placeholder="Your First Name" name="fname"
                                                    value="{{ old('fname') }}" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" placeholder="Your Last Name" name="lname"
                                                    value="{{ old('lname') }}" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="email" placeholder="Enter email" name="email"
                                                    value="{{ old('email') }}" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="file" placeholder="Profile Image" name="profile_image"
                                                    class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" placeholder="Password" name="password"
                                                    class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" placeholder="Password Confirmation"
                                                    name="password_confirmation" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="footer text-center">
                                            <button type="submit" class="btn btn-fill btn-neutral btn-wd">Create
                                                Account</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                    required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
