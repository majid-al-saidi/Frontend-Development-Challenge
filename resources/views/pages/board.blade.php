@extends('layouts.frontend')
@section('content')


<center>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player class="pb-5" src="https://assets3.lottiefiles.com/packages/lf20_DTf87D.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>

<div class="w-1/3">
    <a href="{{ route('home') }}"
        class="w-32 focus:outline-none py-2 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border">Home</a>
</div>
</center>
<div class="overflow-x-auto border-x border-t">
    <table class="table-auto w-full">
       <thead class="border-b">
          <tr class="bg-gray-100">
             <th class="text-left p-4 font-medium">
                Name
             </th>
             <th class="text-center p-4 font-medium">
                Score
             </th>
          </tr>
       </thead>
       <tbody>
        @forelse ($board as $user)
          <tr class="border-b hover:bg-gray-50">
             <td class="p-4 text-left">
                {{ $user->name }} 
             </td>
             <td class="p-4 text-center">
                {{ $user->score }}
             </td>
          </tr>
          @empty
          @endforelse
          
       </tbody>
    </table>
 </div>

@endsection