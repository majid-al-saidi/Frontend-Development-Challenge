@extends('layouts.frontend')
@section('content')
<div class="flex flex-wrap overflow-hidden">

    <div class="w-4/4 overflow-hidden md:w-3/4 ">
        {{-- title --}}
        <div>
            <span class="text-gray-600 text-lg font-semibold">Test Your Skills</span>
            <h2 class="mt-4 text-2xl text-gray-900 font-bold md:text-4xl">A quiz was made from
                you <br class="lg:block" hidden> to you.</h2>
        </div>
    </div>

    <div class="w-4/4 overflow-hidden md:w-1/4">
        {{-- lottie file --}}
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_uavyvaxw.json"
            background="transparent" speed="0.5" style="width: 150px; height: 150px;" loop
            autoplay>
        </lottie-player>
    </div>

</div>


<div
    class="mt-16 grid border divide-x divide-y rounded-xl overflow-hidden md:overflow-visible lg:overflow-visible xl:overflow-visible sm:grid-cols-2 lg:divide-y-0 lg:grid-cols-2 xl:grid-cols-2">

    <div class="relative group bg-white rounded-l-xl transition hover:z-[1] hover:shadow-2xl">
        <div class="relative p-8 space-y-8">
            <img src="{{ asset('images/quiz.png') }}" class="w-10" width="512"
                height="512" alt="burger illustration">

            <div class="space-y-2">
                <h5
                    class="text-xl text-gray-800 font-medium transition group-hover:text-blue-600">
                    Attemp The Quiz</h5>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="flex">
                        <span
                            class="text-sm   rounded-l px-4 py-2 bg-gray-300 whitespace-no-wrap">Label:</span>
                        <input dir="auto" name="name" class=" rounded-r px-4 py-2 w-full"
                            type="text" placeholder="Write your name here..."  required />
                    </div>
                    <button type="submit"
                        class="flex justify-between items-center group-hover:text-blue-600">
                        <span class="text-md pr-5">Quiz</span>
                        <span
                            class="space-x-4 -translate-x-4 opacity-0 text-2xl transition duration-300 group-hover:opacity-100 group-hover:translate-x-0">&RightArrow;</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div class="relative group bg-white rounded-r-xl transition hover:z-[1] hover:shadow-2xl">
        <div class="relative p-8 space-y-8">
            <img src="{{ asset('images/scoreboard.png') }}" class="w-10" width="512"
                height="512" alt="burger illustration">

            <div class="space-y-2">
                <h5
                    class="text-xl text-gray-800 font-medium transition group-hover:text-blue-600">
                    Check The Scoreboard</h5>
                <p class="text-sm text-gray-600">Who is the one that gets the highest score in
                    our challenge?</p>
            </div>
            <a href="{{ route('board') }}" class="flex justify-between items-center group-hover:text-blue-600">
                <span class="text-md">Scoreboard</span>
                <span
                    class="-translate-x-4 opacity-0 text-2xl transition duration-300 group-hover:opacity-100 group-hover:translate-x-0">&RightArrow;</span>
            </a>
        </div>
    </div>

</div>
@endsection