@extends('layouts.index')
@section('content')
<div class="flex main-content items-center justify-center py-8">
    <img src="{{ asset('img/logo-16.png') }}" alt="MyShop Logo" class="logo-auth max-w-xs h-auto">
    <h4>Create your account</h4>
    <div class="card mt-15 bg-base-100 shadow-sm">
        <div class="card-body mt-5">
            <form id="register-form" action="{{ route('register-post') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <div class="mb-1 block text-sm font-medium text-gray-700">Username</div>
                    <label class="text input w-full">
                        <i class="fa fa-user-o"></i>
                        <input
                            class="rounded-lg"
                            type="text"
                            name="username"
                            required="required"
                            placeholder="Username"/>
                    </label>
                    <span class="text-red-500 text-sm error-message" id="error-username"></span>
                </div>
                <div class="flex gap-2 w-full mb-4">
                    <div class="flex-1">
                        <div class="mb-1 block text-sm font-medium text-gray-700">Contact</div>
                        <label class="text input w-full">
                            <i class="fa fa-phone"></i>
                            <input
                                class="rounded-lg"
                                type="tel"
                                name="contact"
                                required="required"
                                placeholder="08*********"/>
                        </label>
                        <span class="text-red-500 text-sm error-message" id="error-contact"></span>
                    </div>
                    <div class="flex-1">
                        <div class="mb-1 block text-sm font-medium text-gray-700">Email</div>
                        <label class="text input w-full">
                            <i class="fa fa-envelope"></i>
                            <input
                                class="rounded-lg"
                                type="email"
                                name="email"
                                required="required"
                                placeholder="mail@site.com"/>
                        </label>
                        <span class="text-red-500 text-sm error-message" id="error-email"></span>
                    </div>
                </div>
                <div class="flex gap-2 w-full mb-4">
                    <div class="flex-1">
                        <div class="mb-1 block text-sm font-medium text-gray-700">Password</div>
                        <label class="password input w-full">
                            <i class="fa fa-lock"></i>
                            <input
                                type="password"
                                id="password"
                                name="password"
                                required="required"
                                placeholder="Password"/>
                            <button
                                type="button"
                                onclick="togglePassword('password', 'eyeIcon')"
                                class="btn-password absolute inset-y-0 right-4 flex items-center text-gray-500 cursor-pointer">
                                <i id="eyeIcon" class="fa fa-eye"></i>
                            </button>
                        </label>
                        <span class="text-red-500 text-sm error-message" id="error-password"></span>
                    </div>
                    <div class="flex-1">
                        <div class="mb-1 block text-sm font-medium text-gray-700">Confirm Password</div>
                        <label class="password input w-full">
                            <i class="fa fa-lock"></i>
                            <input
                                type="password"
                                id="confirm-password"
                                name="password_confirmation"
                                required="required"
                                placeholder="Confirm Password"/>
                            <button
                                type="button"
                                onclick="togglePassword('confirm-password', 'eyeIconConfirm')"
                                class="btn-password absolute inset-y-0 right-4 flex items-center text-gray-500 cursor-pointer">
                                <i id="eyeIconConfirm" class="fa fa-eye"></i>
                            </button>
                        </label>
                        <span
                            class="text-red-500 text-sm error-message"
                            id="error-password_confirmation"></span>
                    </div>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-secondary mt-4 w-full">Register</button>
                </div>
            </form>
            <div class="mb-6 flex items-center mr-8 ml-8 mt-6">
                <hr class="flex-grow border-gray-300">
                <span class="mx-3 text-gray-400">Or Continue With</span>
                <hr class="flex-grow border-gray-300">
            </div>
            <div class="flex gap-2 w-full">
                <a href="{{route('google-login')}}" class="btn btn-sosial flex-1 bg-red-500 hover:bg-red-600 text-white">
                    <i class="fa fa-google"></i>
                    Google Sign-in
                </a>
            </div>
            <p class="mb-8 text-center text-sm text-gray-600 mt-4">
                Already have an account? 
                <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Login</a>
            </p>
        </div>
    </div>
</div>

@endsection
@section('js')
<script src="{{ asset('js/register.js') }}"></script>
@endsection