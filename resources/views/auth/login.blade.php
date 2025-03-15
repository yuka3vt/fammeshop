@extends('layouts.index') @section('content')
<div class="flex main-content items-center justify-center py-8">
    <img
        src="{{ asset('img/logo-16.png') }}"
        alt="MyShop Logo"
        class="logo-auth max-w-xs h-auto">
    <h4>Sign in to your account</h4>
    <div class="card mt-15 bg-base-100 shadow-sm">
        <div class="card-body mt-5">
            <form
                id="login-form"
                action="{{ route('login-post') }}"
                method="POST"
                class="form-login">
                @csrf
                <div class="mb-4">
                    <div class="mb-1 block text-sm font-medium text-gray-700">Email</div>
                    <label class="text input w-full">
                        <i class="fa fa-user-o"></i>
                        <input
                            class="rounded-lg"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            required="required"
                            placeholder="mail@site.com"/>
                    </label>
                    @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <div class="mb-1 block text-sm font-medium text-gray-700">Password</div>
                    <label class="password input w-full relative">
                        <i class="fa fa-lock"></i>
                        <input
                            type="password"
                            required="required"
                            name="password"
                            placeholder="********"
                            id="password"/>
                        <button
                            type="button"
                            onclick="togglePassword()"
                            class="btn-password absolute inset-y-0 right-4 flex items-center text-gray-500 cursor-pointer">
                            <i id="eyeIcon" class="fa fa-eye"></i>
                        </button>
                    </label>
                </div>
                <div class="form-footer">
                    <div class="flex justify-between items-center">
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" name="remember" class="checkbox checkbox-secondary">
                            <span class="text-sm text-gray-600">Remember me</span>
                        </label>
                        <a href="#" class="text-sm text-blue-500 hover:underline">Forgot Password?</a>
                    </div>
                    <button type="submit" class="btn btn-secondary mt-4 w-full">Login</button>
                </div>

            </form>
            <div class="mb-6 flex items-center mr-8 ml-8 mt-6">
                <hr class="flex-grow border-gray-300">
                <span class="mx-3 text-gray-400">Or Continue With</span>
                <hr class="flex-grow border-gray-300">
            </div>
            <div class="flex gap-2 w-full">
                <a
                    href="{{route('google-login')}}"
                    class="btn btn-sosial flex-1 bg-red-500 hover:bg-red-600 text-white">
                    <i class="fa fa-google"></i>
                    Google Sign-in
                </a>
            </div>
            <p class="mb-8 text-center text-sm text-gray-600 mt-4">
                Don't have an account?
                <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Register</a>
            </p>
        </div>
    </div>
</div>
@endsection