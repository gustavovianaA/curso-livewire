<div>
    Show Tweets
    <p>{{ $message }}</p>

    <form method="POST" wire:submit.prevent="create">
        <input type="text" name="message" id="message" wire:model="message">
        <button type="submit">Criar Tweet</button>
    </form>
    <hr>
    @foreach ($tweets as $tweet)
        {{ $tweet->user->name }} - {{ $tweet->content }}
        <br>
    @endforeach
</div>
