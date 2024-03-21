@extends('layout.main')
@section('content')
<!-- cards -->
<div class="w-full px-6 py-6 mx-auto">
    <!-- row 1 -->
    <div class="flex flex-wrap -mx-3">
        <div class="w-full px-3 mb-6">
            <h1>Biodata</h1>
            
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                        Name:
                    </label>
                    <p class="text-gray-700">Bella Rossa Yuniarti</p>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        Email:
                    </label>
                    <p class="text-gray-700">bellarossayuniarti@gmail.com</p>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="age">
                        Age:
                    </label>
                    <p class="text-gray-700">19</p>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="address">
                        Address:
                    </label>
                    <p class="text-gray-700">Jl. Usaha Baru, Kubu Raya</p>
                </div>
            </div>
        </div>
    </div>

    <footer class="pt-4">
        <div class="w-full px-6 mx-auto">
            <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
                <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
                    <div class="text-sm leading-normal text-center text-slate-500 lg:text-left">
                        ©
                        <script>
                        document.write(new Date().getFullYear() + ",");
                        </script>
                        made with <i class="fa fa-heart"></i> by
                        <a href="https://www.creative-tim.com" class="font-semibold text-slate-700" target="_blank">Creative Tim</a>
                        for a better web.
                    </div>
                </div>
                <div class="w-full max-w-full px-3 mt-0 shrink-0 lg:w-1/2 lg:flex-none">
                    <ul class="flex flex-wrap justify-center pl-0 mb-0 list-none lg:justify-end">
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">Creative Tim</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/presentation" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://creative-tim.com/blog" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/license" class="block px-4 pt-0 pb-1 pr-0 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">License</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- end cards -->
@endsection
