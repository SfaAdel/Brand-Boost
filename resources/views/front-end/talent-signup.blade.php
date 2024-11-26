@extends('layout')

@section('title', 'Talent Signup')

@section('content')
<div class="bg-green acworth px-5 bg-green">
    <div class="py-5 text-center md:text-justify">
        <h1 class="text-5xl font-bold hepta uppercase">Hello, Talent</h1>
        <p class="text-md rubikv text-gray-800">Please fill out the form below to get started.</p>
    </div>

    <div>
        <form action="">
            <div class="flex justify-between gap-5 flex-wrap">
                <div class="flex-1">
                    <div class="flex flex-col my-2">
                        <label for="name" class="text-gray-600 text-md rubikv leading-relaxed">Name</label>
                        <input type="text" name="name" id="name" class="p-2 border-black border-2 outline-none">
                    </div>

                    <div class="flex flex-col my-2">
                        <label for="arabic-name" class="text-gray-600 text-md rubikv leading-relaxed">Name in
                            Arabic</label>
                        <input type="text" name="arabic-name" id="arabic-name"
                            class="p-2 border-black border-2 outline-none">
                    </div>

                    <div class="flex flex-col my-2">
                        <label for="email" class="text-gray-600 text-md rubikv leading-relaxed">Email</label>
                        <input type="email" name="email" id="email" class="p-2 border-black border-2 outline-none">
                    </div>

                    <div class="flex flex-col my-2">
                        <label for="password" class="text-gray-600 text-md rubikv leading-relaxed">Password</label>
                        <input type="password" name="password" id="password"
                            class="p-2 border-black border-2 outline-none">
                    </div>
                </div>
                <div class="flex-1">
                    <div class="flex flex-col my-2">
                        <label for="cash-number" class="text-gray-600 text-md rubikv leading-relaxed">Bank account
                            number /
                            Wallet
                            cash number</label>
                        <input type="text" name="cash-number" id="cash-number"
                            class="p-2 border-black border-2 outline-none">
                    </div>

                    <div class="flex flex-col my-2">
                        <label for="phone-number" class="text-gray-600 text-md rubikv leading-relaxed">Phone
                            number</label>
                        <input type="text" name="phone-number" id="phone-number"
                            class="p-2 border-black border-2 outline-none">
                    </div>

                    <div class="flex flex-col my-2">
                        <label for="gender" class="text-gray-600 text-md rubikv leading-relaxed">Gender</label>
                        <input type="text" name="gender" id="gender" class="p-2 border-black border-2 outline-none">
                    </div>

                    <div class="flex flex-col my-2">
                        <label for="job-title" class="text-gray-600 text-md rubikv leading-relaxed">Job Title</label>
                        <select name="job-title" id="job-title" class="p-2 border-black border-2 outline-none">
                            <option value="job-title-default">Choose yours</option>
                            <option value="Developer">Developer</option>
                            <option value="Desginer">Desginer</option>
                            <option value="Content-Creator">Content Creator</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="flex flex-col my-2">
                <label for="name" class="text-gray-600 text-md rubikv leading-relaxed">Brief Describtion about
                    yourself</label>
                <textarea rows="3" cols="50" resize="none" name="bio" id="bio"
                    class="p-2 border-black border-2 outline-none"></textarea>
            </div>

            <div class="w-full flex justify-center items-center py-5">
                <button type="submit"
                    class="text-3xl uppercase hepta w-1/2 mx-auto bg-emerald-400 font-semibold py-2 px-4 border-2 border-black"
                    style="box-shadow: -5px 10px 0 black;">Sign
                    Up</button>
            </div>
        </form>
    </div>
</div>
@endsection