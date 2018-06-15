@foreach($posts as $post)
    <ul>
        <li>
            {{$post->title}}
        </li>
        <li>
            {{$post->body}}
        </li>
    </ul>




@endforeach


{{ $posts->links() }}