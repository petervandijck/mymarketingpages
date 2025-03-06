@props([
    'title' => 'Boost your productivity. Start using our app today.',
    'primaryButtonText' => 'Get started',
    'primaryButtonUrl' => '#',
    'secondaryButtonText' => 'Learn more',
    'secondaryButtonUrl' => '#',
    'showSecondaryButton' => true,
])

<div class="bg-white">
    <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
        <h2 class="max-w-2xl text-4xl font-semibold tracking-tight text-balance text-gray-900 sm:text-5xl">{{ $title }}</h2>
        <div class="mt-10 flex items-center gap-x-6">
            <a href="{{ $primaryButtonUrl }}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">{{ $primaryButtonText }}</a>
            @if($showSecondaryButton)
                <a href="{{ $secondaryButtonUrl }}" class="text-sm/6 font-semibold text-gray-900">{{ $secondaryButtonText }} <span aria-hidden="true">→</span></a>
            @endif
        </div>
        {{ $slot ?? '' }}
    </div>
</div>
