<x-guest-layout>
    <main class="container p-6 mx-auto shadow">
        <section class="p-2">

            {{-- Header --}}
            <header class="text-center">
                <h1 class="text-2xl font-bold text-red-400">
                    Many To Many Relationship
                </h1>
            </header>

            {{-- Content --}}
            <div class="space-y-2">
                @foreach ($groups as $group)
                <h2 class="p-1 text-xl text-white bg-green-600">{{ $group->name }}</h2>

                @foreach ($group->users as $user)
                <div class="p-2 shadow">
                    <h2 class="text-xl">{{ $user->name }}</h2>

                    <div class="text-xs {{ $user->community->active ? "text-green-500" : "text-yellow-500" }}">
                        {{ $user->community->active ? "Active" : "Not Active" }}
                    </div>
                    <span class="text-xs">
                        Joined Date: {{ $user->community->created_at->format('d/m/y') }}
                    </span>
                </div>
                @endforeach
                @endforeach
            </div>

        </section>
    </main>
</x-guest-layout>
