@extends('layout.main')
@section('content')
<!-- cards -->
<div class="w-full px-6 py-6 mx-auto">
    <!-- row 1 -->
    <div class="flex flex-wrap -mx-3">
    <h1>Products</h1>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-semibold mb-4">Echo Buds</h1>
        <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-4">
                <img src="https://m.media-amazon.com/images/I/515TyGkOTBL._AC_SY450_.jpg" alt="Product Image" class="rounded-lg" width="400">
            </div>
            <div class="w-full md:w-1/2 lg:w-2/3 px-4 mb-4">
                <p class="text-gray-600 mb-4">New - These smart earbuds launch Amazon into the wearable category with a true on-the-go solution for Alexa users. Amazon’s biggest weakness in continued Alexa adoption is its lack of a smartphone platform. Echo Buds offer a way for Alexa to be always listening for user needs even when not at home. They also come with noise-canceling technology provided by Bose and high-quality sound.</p>
                <p class="text-gray-600 mb-4">Price: $129.99</p>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add to Cart</button>
            </div>
        </div>
    </div>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-semibold mb-4">Echo Studio</h1>
        <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-4">
                <img src="https://m.media-amazon.com/images/I/61+voFa3ZfL._AC_SY450_.jpg" alt="Product Image" class="rounded-lg" width="400">
            </div>
            <div class="w-full md:w-1/2 lg:w-2/3 px-4 mb-4">
                <p class="text-gray-600 mb-4">New - Bloomberg reported over the summer that Amazon was working on a premium smart speaker to better compete with Apple HomePod and Google Home Max. Of course, this also puts the new Amazon device on a collision course with Alexa partners Sonos and Bose. The premium smart speaker segment has quickly become crowded and it reflected a gap in Amazon’s smart speaker product line. Last year, the Echo Sub (as in subwoofer) was introduced as a stop-gap. That is designed to pair with standard Echo smart speakers. Echo Studio has both bigger bass and better high-end fidelity with a three-dimensional audio experience driven by Dolby Atmos technology. </p>
                <p class="text-gray-600 mb-4">Price: $199.99</p>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add to Cart</button>
            </div>
        </div>
    </div>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-semibold mb-4">Echo Loop</h1>
        <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-4">
                <img src="https://m.media-amazon.com/images/I/51S7o9BzyBL._AC_SY450_.jpg" alt="Product Image" class="rounded-lg" width="400">
            </div>
            <div class="w-full md:w-1/2 lg:w-2/3 px-4 mb-4">
                <p class="text-gray-600 mb-4">New- Amazon's third entry into the wearables category is a ring. However, this ring has Amazon Alexa access and seems like a smart speaker on your finger. With said, the form factor requires a small speaker and microphone so it’s not clear how this replaces other devices other than for quick tasks and smart home controls. More likely this is designed as an input device for your Alexa-based smartphone app. That is a way to get around the fact that Amazon doesn’t have a native mobile OS-based assistant. Echo Loop is also invitation only. The introductory period list price of $129.99 will rise to $179.99 when the product becomes generally available.</p>
                <p class="text-gray-600 mb-4">Price: $129.99</p>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add to Cart</button>
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
