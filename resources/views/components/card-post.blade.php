@props(['post'])

<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">
        @if ($post->image)
            <img class="w-full h-72 object-cover object-center" src="{{url($post->image->url)}}" alt="">
        @else

            <img class="w-full h-72 object-cover object-center" src="https://cdn.pixabay.com/photo/2022/06/14/00/22/mountain-7260827_960_720.jpg" alt="">
            
        @endif
        <div class="px-6 py-4">
            <h1 class="font-bold text-xl mb-2">
                <a href="{{route('posts.show' , $post)}}">{{$post->name}}</a>

            </h1>

            <div class="text-gray-700 text-base">
                {!!$post->extract!!}
            </div>

        </div>

        <div class="px-6 pt-4 pb-2">

            @foreach ($post->tags as $tag)

            <a href="{{route('posts.tag' , $tag)}}" class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm text-gray-700 mr-2">{{$tag->name}}</a>
                
            @endforeach
        </div>
        
    </article>
</div>
