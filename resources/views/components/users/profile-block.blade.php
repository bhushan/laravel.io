@props(['user'])

<div class="flex flex-col rounded-md shadow mt-6">
    <div class="bg-gray-900 rounded-t-md h-28" style="background-image: url('{{ asset('images/profile-background.svg') }}')"></div>

    <div class="flex flex-col items-center justify-center bg-white rounded-b-md pb-8">
        <a href="{{ route('profile', $user->username()) }}">
            <x-avatar :user="$user" class="w-32 h-32 rounded-full -mt-16 mb-6" />
        </a>

        <a href="{{ route('profile', $user->username()) }}" class="text-xl font-medium mb-2 hover:underline">
            {{ $user->name() }}
        </a>

        <span class="text-gray-600 mb-4">
            Joined {{ $user->createdAt()->format('j M Y') }}
        </span>

        @if ($user->githubUsername())
            <a href="https://github.com/{{ $user->githubUsername() }}" class="flex items-center gap-x-2 mb-3 font-medium hover:underline">
                <x-icon-github class="w-6 h-6" />
                {{ '@' . $user->githubUsername() }}
            </a>
        @endif

        @if ($user->hasTwitterAccount())
            <a href="https://twitter.com/{{ $user->twitter() }}" class="flex items-center gap-x-2 text-twitter font-medium hover:underline">
                <x-icon-twitter class="w-6 h-6" />
                {{ '@' . $user->twitter() }}
            </a>
        @endif
    </div>

</div>