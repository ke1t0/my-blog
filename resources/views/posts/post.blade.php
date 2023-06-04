<x-layout>
    <x-slot name="title">
        {{$post->subject}} | My blog
    </x-slot>

    <h1>{{$post->subject}}</h1>
    <p>日付: {{$today}}</p>

    <div>
        {{$post->content}}
    </div>
</x-layout>
