@extends('businessarea')

@section('title', 'Services')

@section('business-area-content')
<div class="border-black border-2 bg-slate-50 h-full">
    <div class="p-6 px-0 pt-0 pb-2">
        <table class="w-full min-w-[640px] table-auto">
            <thead>
                <tr>
                    <th class="border-b border-blue-50 py-3 px-5 text-left">
                        <p class="block antialiased text-[11px] font-bold uppercase">service
                        </p>
                    </th>
                    <th class="border-b border-blue-50 py-3 px-5 text-left">
                        <p class="block antialiased text-[11px] font-bold uppercase">price per unit
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
                            <img src="{{ asset('front-end/SocialMedia/brand boost sm (1).jpg') }}" alt=""
                                class="inline-block relative object-cover object-center w-9 h-9 rounded-full">
                            <div>
                                <p class="block antialiased text-sm leading-normal font-semibold"
                                    id="dashboardServiceName">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut error accusantium
                                    recusandae ducimus veritatis corrupti, earum iure qui, beatae veniam aperiam ad
                                    expedita et sint ullam dignissimos animi voluptates ex.</p>
                            </div>
                        </div>
                    </td>
                    <td class="py-3 px-5 ">
                        <p class="block antialiased text-xs font-semibold">$20</p>
                    </td>
                    <td class="py-3 px-5 ">
                        <a href="#" class="inline mx-1 antialiased text-xs font-semibold capitalize">Open</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection