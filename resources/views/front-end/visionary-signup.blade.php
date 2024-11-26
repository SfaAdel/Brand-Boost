@extends('layout')

@section('title', 'Visionary Signup')

@section('content')
<div class="bg-green acworth px-5 bg-pink">
    <div class="py-5 text-center md:text-justify">
        <h1 class="text-5xl font-bold hepta uppercase">Hello, Business Owner</h1>
        <p class="text-md rubikv text-gray-800">Please fill out the form below to get started.</p>
    </div>

    <div>
        <form action="">
            <div class="flex justify-between gap-5 flex-wrap">
                <div class="flex-1">
                    <div class="flex flex-col my-2">
                        <label for="name" class="font-bold text-md rubikv leading-relaxed">Name</label>
                        <input type="text" name="name" id="name" class="p-2 border-black border-2 outline-none">
                    </div>

                    <div class="flex flex-col my-2">
                        <label for="arabic-name" class="font-bold text-md rubikv leading-relaxed">Name in
                            Arabic</label>
                        <input type="text" name="arabic-name" id="arabic-name"
                            class="p-2 border-black border-2 outline-none">
                    </div>

                    <div class="flex flex-col my-2">
                        <label for="email" class="font-bold text-md rubikv leading-relaxed">Email</label>
                        <input type="email" name="email" id="email" class="p-2 border-black border-2 outline-none">
                    </div>

                    <div class="flex flex-col my-2">
                        <label for="password" class="font-bold text-md rubikv leading-relaxed">Password</label>
                        <input type="password" name="password" id="password"
                            class="p-2 border-black border-2 outline-none">
                    </div>
                </div>
                <div class="flex-1">
                    <div class="flex flex-col my-2">
                        <label for="company-name" class="font-bold text-md rubikv leading-relaxed">Company Name</label>
                        <input type="text" name="company-name" id="company-name"
                            class="p-2 border-black border-2 outline-none">
                    </div>

                    <div class="flex flex-col my-2">
                        <label for="phone-number" class="font-bold text-md rubikv leading-relaxed">Phone
                            number</label>
                        <input type="text" name="phone-number" id="phone-number"
                            class="p-2 border-black border-2 outline-none">
                    </div>

                    <div class="flex flex-col my-2">
                        <label for="gender" class="font-bold text-md rubikv leading-relaxed">Gender</label>
                        <input type="text" name="gender" id="gender" class="p-2 border-black border-2 outline-none">
                    </div>

                    <div class="flex flex-col my-2">
                        <label for="role" class="font-bold text-md rubikv leading-relaxed">Role</label>
                        <input type="text" name="role" id="role" class="p-2 border-black border-2 outline-none">
                    </div>
                </div>
            </div>

            <div class="flex flex-col my-2">
                <label for="Company-field" class="font-bold text-md rubikv leading-relaxed">Company Work Field</label>
                <select name="Company-field" id="Company-field" class="p-2 border-black border-2 outline-none">
                    <option value="job-title-default">Choose yours</option>
                    <option value="Developer">Development</option>
                    <option value="Desginer">Desgining</option>
                    <option value="Content-Creator">Content Creation</option>
                </select>
            </div>

            <div class="w-full flex justify-center items-center py-5">
                <button type="submit"
                    class="text-3xl uppercase hepta w-1/2 mx-auto bg-fuchsia-700 text-white font-semibold py-2 px-4 border-2 border-black"
                    style="box-shadow: -5px 10px 0 black;">Sign
                    Up</button>
            </div>

            <div class="uppercase flex gap-5 items-center w-full justify-center">
                <p class="text-xl rubikv">Do you have an account already?</p>
                <a href="/login" class="text-xl hepta bg-fuchsia-700 text-white py-1 px-2 border-2 border-black">Login
                    here</a>
            </div>
        </form>
    </div>
</div>
@endsection