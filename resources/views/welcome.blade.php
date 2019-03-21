@extends('layouts.app')

@section('content')

    <!-- hero -->
    <div class="w-full py-24 px-6 bg-grey-lighter relative z-10">

        <div class="container max-w-xl mx-auto text-left flex items-center flex-wrap">

            <div class="w-full md:w-2/3">
                <h1 class="text-2xl md:text-4xl text-grey-darkest mb-3">Lorem ipsum dolor sit amet</h1>
                <p class="text-md md:text-lg text-grey-dark leading-normal">
                    Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                </p>

                <a href="/register" class="mt-6 inline-block bg-white text-black no-underline px-4 py-3 shadow-lg">Contact us</a>
            </div>

            <div class="hidden md:block w-1/3">
                <img src="http://placehold.it/640x480" class="w-full h-auto shadow-lg" />
            </div>
        </div>

    </div>
    <!-- /hero -->


    <!-- testimonial -->
    <div class="w-full px-6 py-12 bg-grey-dark text-grey-lighter">
        <div class="container max-w-lg mx-auto text-center">
            <p class="leading-normal mb-6">Thanks guys, keep up the good work! You won't regret it. After using Free Templates my business skyrocketed! I'd be lost without Free Templates.</p>
            <p class="font-bold">Rubie J.</p>
        </div>
    </div>
    <!-- /testimonail -->

    <!-- content -->
    <div class="w-full px-6 py-12 bg-white">

        <div class="container max-w-xl mx-auto flex flex-wrap">

            <div class="w-full md:w-1/2 flex flex-wrap">
                <div class="w-full md:w-1/2 p-2">
                    <img src="http://placehold.it/640x480" class="w-full h-auto" />
                </div>
                <div class="w-full md:w-1/2 p-2">
                    <img src="http://placehold.it/640x480" class="w-full h-auto" />
                </div>
                <div class="w-full md:w-1/2 p-2">
                    <img src="http://placehold.it/640x480" class="w-full h-auto" />
                </div>
                <div class="w-full md:w-1/2 p-2">
                    <img src="http://placehold.it/640x480" class="w-full h-auto" />
                </div>
            </div>

            <div class="w-full md:w-1/2 p-2 md:px-6">
                <h3 class="text-xl md:text-2xl text-grey-darkest mb-6">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </h3>

                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut.</p>
                <p class="mb-8">Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a href="#" class="inline-block bg-black text-white text-sm px-4 py-3 no-underline">Browse our products</a>
            </div>

        </div>
    </div>
    <!-- /content -->
@endsection
