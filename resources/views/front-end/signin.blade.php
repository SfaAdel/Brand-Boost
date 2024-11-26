@extends('layout')

@section('title', 'Signin')

@section('content')
<div class="hepta flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <img class="mx-auto h-10 w-auto" src="{{ asset('front-end/logo/PNG/Artboard 15.png') }}" alt="Brand Boost Logo">
        <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Welcome Back</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="">
            <div>
                <label for="email" class="rubikv block text-sm/6 font-medium text-gray-900">Email address</label>
                <div class="mt-2">
                    <input id="email" name="email" type="email" autocomplete="email" required
                        class="border-black border-2 block w-full py-1.5 text-gray-900 placeholder:text-gray-400 sm:text-sm/6">
                </div>
            </div>

            <div>
                <div class="flex items-center justify-between">
                    <label for="password" class="rubikv block text-sm/6 font-medium text-gray-900">Password</label>
                </div>
                <div class="mt-2">
                    <input id="password" name="password" type="password" autocomplete="current-password" required
                        class="border-black border-2 block w-full py-1.5 text-gray-900 placeholder:text-gray-400 sm:text-sm/6">
                </div>
            </div>

            <div>
                <button type="submit"
                    class="border-black border-2 uppercase flex w-full justify-center bg-blue px-3 py-1.5 text-sm/6 font-semibold text-white hover:bg-indigo-500">Sign
                    in</button>
            </div>
        </form>

        <p class="mt-10 text-center text-sm/6 text-gray-500">
            Not a member?
            <a href="/talent-signup"
                class="border-black border-2 uppercase flex w-full justify-center bg-green px-3 py-1.5 text-sm/6 font-semibold text-black hover:bg-emerald-700 transition">I
                have a talent</a>
            <a href="/visionary-signup"
                class="border-black mt-2 border-2 uppercase flex w-full justify-center bg-pink px-3 py-1.5 text-sm/6 font-semibold text-black hover:bg-fuchsia-700 transition">I
                have a vision</a>
        </p>
    </div>
</div>
@endsection