@extends('app')

@section('title','home')
@section('description', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde aut necessitatibus earum eos sint voluptates esse. Dolore alias perspiciatis, beatae est eius quasi aspernatur, praesentium sequi, commodi numquam unde consequatur!
')

@section('content')
@foreach ($threads as $thread )
<div class="rounded shadow mb-4 p-4 max-w-4xl hover:bg-gray-200">
    <h2 class="text-2xl mb-4">{{ $thread-> title }}</h2>


    <div class="text-xs text-gray-600 flex items-center justify-between">
        <div class="flex gap-4">
            <a href="#" class="flex items-center uppercase">
                <svg class="w-4 h-4 mr-1" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 0 0-1.883 2.542l.857 6a2.25 2.25 0 0 0 2.227 1.932H19.05a2.25 2.25 0 0 0 2.227-1.932l.857-6a2.25 2.25 0 0 0-1.883-2.542m-16.5 0V6A2.25 2.25 0 0 1 6 3.75h3.879a1.5 1.5 0 0 1 1.06.44l2.122 2.12a1.5 1.5 0 0 0 1.06.44H18A2.25 2.25 0 0 1 20.25 9v.776"></path>
                </svg>
                {{ $thread->category->name }}
            </a>

            <span class="flex gap-2">
                @foreach ($thread->tags as $tag)
                <a href="#" class="flex items-center capitalize">
                    <svg class="w-4 h-4 mr-1" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">class
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z"></path>
                    </svg>
                    {{ $tag->name }}
                </a>
                @endforeach
            </span>
        </div>


        <div>
            <span class="flex items-center">

                <svg class="w-4 h-4 mr-1" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"></path>
                </svg>



                {{$thread->user->name}}
            </span>
        </div>
    </div>
</div>
@endforeach

@endsection