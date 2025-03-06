@props([
    'title' => 'Boost your productivity. Start using our app today.',
    'description' => 'Incididunt sint fugiat pariatur cupidatat consectetur sit cillum anim id veniam aliqua proident excepteur commodo do ea.',
    'primaryButtonText' => 'Get started',
    'primaryButtonUrl' => '#',
    'secondaryButtonText' => 'Learn more',
    'secondaryButtonUrl' => '#',
    'showSecondaryButton' => true,
])

<div class="relative isolate overflow-hidden bg-gray-900">
    <div class="px-6 py-24 sm:px-6 sm:py-32 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-4xl font-semibold tracking-tight text-balance text-white sm:text-5xl">{{ $title }}</h2>
            <p class="mx-auto mt-6 max-w-xl text-lg/8 text-pretty text-gray-300">{{ $description }}</p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
                <a href="{{ $primaryButtonUrl }}" class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-xs hover:bg-gray-100 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">{{ $primaryButtonText }}</a>
                @if($showSecondaryButton)
                    <a href="{{ $secondaryButtonUrl }}" class="text-sm/6 font-semibold text-white">{{ $secondaryButtonText }} <span aria-hidden="true">→</span></a>
                @endif
            </div>
            {{ $slot ?? '' }}
        </div>
    </div>
    <svg viewBox="0 0 1024 1024" class="absolute top-1/2 left-1/2 -z-10 size-[64rem] -translate-x-1/2 [mask-image:radial-gradient(closest-side,white,transparent)]" aria-hidden="true">
        <circle cx="512" cy="512" r="512" fill="url(#8d958450-c69f-4251-94bc-4e091a323369)" fill-opacity="0.7" />
        <defs>
            <radialGradient id="8d958450-c69f-4251-94bc-4e091a323369">
                <stop stop-color="#7775D6" />
                <stop offset="1" stop-color="#E935C1" />
            </radialGradient>
        </defs>
    </svg>
</div>
