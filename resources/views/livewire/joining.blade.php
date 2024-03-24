<div>
    Joined:

    @foreach($users as $user)
        <div>
            <p>{{ $user['name'] }}</p>
        </div>
    @endforeach
</div>
