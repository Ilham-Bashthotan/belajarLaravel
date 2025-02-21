<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <article class="py-8 max-w-screen-md">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
        <div class="text-base text-gray-600">
            <a href="#">{{ $post['author'] }}</a> | 2021-09-01
        </div>
        <p class="my-4 font-light">
            {{ $post['content'], 150 }}
        </p>
        <a href="/posts" class="font-medium text-blue-500">&laquo; Back to posts</a>
    </article>
</x-layout>
