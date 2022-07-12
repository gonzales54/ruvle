@if (count($users) > 0)
    <ul class="list-unstyled">
        @foreach ($users as $user)
            <li class="media mb-4">
                <img class="mr-2 rounded" src="{{ Gravatar::get($user->email, ['size' => 50]) }}" alt="">
                <div class="media-body">
                    <div>
                        {{ $user->name }}
                    </div>
                    <div>
                        <p>{!! link_to_route('users.show', 'プロフィール', ['user' => $user->id]) !!}</p>
                    </div>
                </div>
                @include('user_follow.follow_button')
            </li>
        @endforeach
    </ul>
    {{ $users->links() }}
@endif