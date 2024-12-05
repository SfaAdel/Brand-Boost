@extends('businessarea')

@section('title', 'Orders')

@section('business-area-content')
<div class="border-black border-2 bg-slate-50 h-full">
    <div class="p-6 px-0 pt-0 pb-2">
        <table class="w-full min-w-[640px] table-auto">
            <thead>
                <tr>
                    <th class="border-b border-blue-50 py-3 px-5 text-left">
                        <p class="block antialiased text-[11px] font-bold uppercase">#
                        </p>
                    </th>
                    <th class="border-b border-blue-50 py-3 px-5 text-left">
                        <p class="block antialiased text-[11px] font-bold uppercase">
                            description</p>
                    </th>
                    <th class="border-b border-blue-50 py-3 px-5 text-left">
                        <p class="block antialiased text-[11px] font-bold uppercase">deadline
                        </p>
                    </th>
                    <th class="border-b border-blue-50 py-3 px-5 text-left">
                        <p class="block antialiased text-[11px] font-bold uppercase">status
                        </p>
                    </th>
                    <th class="border-b border-blue-50 py-3 px-5 text-left">
                        <p class="block antialiased text-[11px] font-bold uppercase">actions</p>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="py-3 px-5 ">
                        <div class="flex items-center gap-4">
                            <!-- <img src="" alt=""
                                class="inline-block relative object-cover object-center w-9 h-9 rounded-md"> -->
                            <div>
                                <p class="block antialiased text-sm leading-normal font-semibold">
                                    1</p>
                            </div>
                        </div>
                    </td>
                    <td class="py-3 px-5 ">
                        <p class="block antialiased text-xs font-normal" id="dashboardOrderDescription">Lorem ipsum
                            dolor, sit amet consectetur
                            adipisicing elit. Eaque ullam culpa ut suscipit deleniti ratione quos beatae quia quisquam!
                            Fugiat expedita quae fugit hic, molestiae nemo odio animi velit quisquam.</p>
                    </td>
                    <td class="py-3 px-5 ">
                        <p class="block antialiased text-xs font-semibold">14/09/20</p>
                    </td>
                    <td class="py-3 px-5 ">
                        <div
                            class="relative grid items-center uppercase whitespace-nowrap select-none bg-gradient-to-tr from-emerald-600 to-emerald-400 text-white py-0.5 px-2 text-[11px] font-medium w-fit">
                            <span class="">active</span>
                        </div>
                    </td>
                    <td class="py-3 px-5 "><a href="#"
                            class="block antialiased text-xs font-semibold capitalize">span</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection