<x-layout>
    @foreach ($posts as $post)
        <x-slot:title>{{ $title }}</x-slot>
        <article class="py-8 max-w-screen-md border-b border-gray-300">
            <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
                <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
            </a>
            <div class="text-base text-gray-600">
                <a href="#">{{ $post['author'] }}</a> | 2021-09-01
            </div>
            <p class="my-4 font-light">
                {{ Str::limit($post['content'], 150) }}
            </p>
            <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500">Read more &raquo;</a>
        </article>
    @endforeach

</x-layout>
