@props([
    'title' => 'Meet our leadership',
    'description' => 'We\'re a dynamic group of individuals who are passionate about what we do and dedicated to delivering the best results for our clients.',
    'team' => [
        [
            'name' => 'Leslie Alexander',
            'position' => 'Co-Founder / CEO',
            'image' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80'
        ],
    ]
])

<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto grid max-w-7xl gap-20 px-6 lg:px-8 xl:grid-cols-3">
        <div class="max-w-xl">
            <h2 class="text-3xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-4xl">{{ $title }}</h2>
            <p class="mt-6 text-lg/8 text-gray-600">{{ $description }}</p>
        </div>
        <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
            @foreach($team as $member)
                <li>
                    <div class="flex items-center gap-x-6">
                        <img class="size-16 rounded-full" src="{{ $member['image'] }}" alt="">
                        <div>
                            <h3 class="text-base/7 font-semibold tracking-tight text-gray-900">{{ $member['name'] }}</h3>
                            <p class="text-sm/6 font-semibold text-indigo-600">{{ $member['position'] }}</p>
                        </div>
                    </div>
                </li>
            @endforeach
            {{ $slot ?? '' }}
        </ul>
    </div>
</div>