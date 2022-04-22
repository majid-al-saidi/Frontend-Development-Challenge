@extends('layouts.frontend')
@section('content')
    <!-- component -->
    <div>

        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


        <style>
            [x-cloak] {
                display: none;
            }

            [type="checkbox"] {
                box-sizing: border-box;
                padding: 0;
            }

            .form-checkbox,
            .form-radio {
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                -webkit-print-color-adjust: exact;
                color-adjust: exact;
                display: inline-block;
                vertical-align: middle;
                background-origin: border-box;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                flex-shrink: 0;
                color: currentColor;
                background-color: #fff;
                border-color: #e2e8f0;
                border-width: 1px;
                height: 1.4em;
                width: 1.4em;
            }

            .form-checkbox {
                border-radius: 0.25rem;
            }

            .form-radio {
                border-radius: 50%;
            }

            .form-checkbox:checked {
                background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M5.707 7.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L7 8.586 5.707 7.293z'/%3e%3c/svg%3e");
                border-color: transparent;
                background-color: currentColor;
                background-size: 100% 100%;
                background-position: center;
                background-repeat: no-repeat;
            }

            .form-radio:checked {
                background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3ccircle cx='8' cy='8' r='3'/%3e%3c/svg%3e");
                border-color: transparent;
                background-color: currentColor;
                background-size: 100% 100%;
                background-position: center;
                background-repeat: no-repeat;
            }

        </style>

        <div x-data="app()" x-cloak>
            <div class="max-w-3xl mx-auto px-4 py-10">



                <div x-show.transition="step != 'complete'">
                    <!-- Top Navigation -->
                    <div class="border-b-2 py-4">
                        <div class="uppercase tracking-wide text-xs font-bold text-gray-500 mb-1 leading-tight"
                            x-text="`Question: ${step} of 12`"></div>
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                            <div class="flex-1">
                                <div class="text-lg font-bold text-gray-700 leading-tight">{{ $name }}</div>
                            </div>

                            <div class="flex items-center md:w-64">
                                <div class="w-full bg-white rounded-full mr-2">
                                    <div class="rounded-full bg-green-500 text-xs leading-none h-2 text-center text-white"
                                        :style="'width: '+ parseInt(step / 12 * 100) +'%'"></div>
                                </div>
                                <div class="text-xs w-10 text-gray-600" x-text="parseInt(step / 12 * 100) +'%'"></div>
                            </div>
                        </div>
                    </div>
                    <!-- /Top Navigation -->

                    <!-- Step Content -->
                    <div class="py-10">
                        <form action="{{ route('result') }}" method="POST" id="form" name="form">
                            @csrf
                            <div x-show.transition.in="step === 1">
                                <x-q1 />
                            </div>
                            <div x-show.transition.in="step === 2">
                                <x-q2 />
                            </div>
                            <div x-show.transition.in="step === 3">
                                <x-q3 />
                            </div>
                            <div x-show.transition.in="step === 4">
                                <x-q4 />
                            </div>
                            <div x-show.transition.in="step === 5">
                                <x-q5 />
                            </div>
                            <div x-show.transition.in="step === 6">
                                <x-q6 />
                            </div>
                            <div x-show.transition.in="step === 7">
                                <x-q7 />
                            </div>
                            <div x-show.transition.in="step === 8">
                                <x-q8 />
                            </div>
                            <div x-show.transition.in="step === 9">
                                <x-q9 />
                            </div>
                            <div x-show.transition.in="step === 10">
                                <x-q10 />
                            </div>
                            <div x-show.transition.in="step === 11">
                                <x-q11 />
                            </div>
                            <div x-show.transition.in="step === 12">
                                <x-q12 />
                              
                                <input type="number" value="{{$pid}}" name="pid" hidden>
                            </div>

                            
                    </div>
                    <!-- / Step Content -->
                </div>
            </div>



            <!-- Bottom Navigation -->
            <div class="fixed bottom-0 left-0 right-0 py-5 bg-white shadow-md" x-show="step != 'complete'">
                <center x-show="step === 12" id="alert" hidden>
                    <div class="w-1/2 flex bg-red-100 rounded-lg p-4 mb-4 text-sm text-red-700" role="alert">
                        <svg class=" w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <div>
                            <span class="font-medium">Failed!</span> Kindly check that you answred all qestions!
                        </div>
                    </div>
                </center>
                <div class="max-w-3xl mx-auto px-4">
                    <div class="flex justify-between">
                        <div class="w-1/3">
                            <button x-show="step > 1" @click="step--" type="button"
                                class="w-32 focus:outline-none py-2 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border">Previous</button>
                        </div>

                        {{-- Timer --}}
                        <div class="w-1/3 ">
                            <center>
                                <div
                                    class="flex justify-center items-center content-center bg-gradient-to-br from-blue-300 to-blue-600 shadow-md hover:shadow-lg h-20 w-20 rounded-full fill-current text-white">
                                    <div><span id="timer"></span></div>
                                </div>
                            </center>
                        </div>

                        <div class="w-1/3 text-right">
                            <button x-show="step < 11" @click="step++" type="button"
                                class="w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium">Next</button>

                            <button x-show="step === 11" @click="step++" onclick="hideAlert()" type="button"
                                class="w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium">Next</button>

                            {{-- <!-- Submit button -->  @click="step = 'complete'" --}}
                            <div x-show="true">
                                <button type="submit" id="submit" x-show="step === 12" onclick="validate(event)"
                                    class="w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-green-500 hover:bg-blue-600 font-medium">Complete</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function app() {
                return {
                    step: 1,
                }
            }

            function validate(event) {
                var checked_q1 = document.querySelector('input[name = "q1"]:checked');
                var checked_q2 = document.querySelector('input[name = "q2"]:checked');
                var checked_q3 = document.querySelector('input[name = "q3"]:checked');
                var checked_q4 = document.querySelector('input[name = "q4"]:checked');
                var checked_q5 = document.querySelector('input[name = "q5"]:checked');
                var checked_q6 = document.querySelector('input[name = "q6"]:checked');
                var checked_q7 = document.querySelector('input[name = "q7"]:checked');
                var checked_q8 = document.querySelector('input[name = "q8"]:checked');
                var checked_q9 = document.querySelector('input[name = "q9"]:checked');
                var checked_q10 = document.querySelector('input[name = "q10"]:checked');
                var checked_q11 = document.querySelector('input[name = "q11"]:checked');
                var checked_q12 = document.querySelector('input[name = "q12"]:checked');
                if (checked_q1 == null || checked_q2 == null || checked_q3 == null || checked_q4 == null || checked_q5 ==
                    null ||
                    checked_q6 == null || checked_q7 == null || checked_q8 == null || checked_q9 == null || checked_q10 ==
                    null ||
                    checked_q11 == null || checked_q12 == null) { //Test if qestions was checked
                    var x = document.getElementById("submit");
                    x.style.display = "none";
                    var x = document.getElementById("alert");
                    x.style.display = "block";
                    event.preventDefault();
                }
            }

            //show alert:
            function hideAlert() {
                var x = document.getElementById("alert");
                x.style.display = "none";
                var y = document.getElementById("submit");
                if (y.style.display == "none") {
                    y.style.display == "block";
                }
            }

            // https://codepen.io/ishanbakshi/pen/pgzNMv
            document.getElementById('timer').innerHTML = 05 + ":" + 00;
            startTimer();


            function startTimer() {
                var presentTime = document.getElementById('timer').innerHTML;
                var timeArray = presentTime.split(/[:]+/);
                var m = timeArray[0];
                var s = checkSecond((timeArray[1] - 1));
                if (s == 59) {
                    m = m - 1
                }
                if (m < 0) {
                    return
                }

                document.getElementById('timer').innerHTML =
                    m + ":" + s;
                console.log(m)
                setTimeout(startTimer, 1000);

                if (m == 0) {
                    var element = document.getElementById('timer');
                    element.style.color = "#FF0000";
                }

                if (m == 0 && s == 0) { //when time is end
                    //check the values that he didnt answers.
                    HTMLFormElement.prototype.submit.call(form);
                }

            }

            function checkSecond(sec) {
                if (sec < 10 && sec >= 0) {
                    sec = "0" + sec
                }; // add zero in front of numbers < 10
                if (sec < 0) {
                    sec = "59"

                };
                return sec;
            }
        </script>
    @endsection
