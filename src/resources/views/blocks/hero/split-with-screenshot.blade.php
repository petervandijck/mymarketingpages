@props([
    'logoSrc' => 'https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600',
    'logoAlt' => 'Your Company',
    'tagLabel' => 'What\'s new',
    'tagText' => 'Just shipped v1.0',
    'title' => 'Deploy to the cloud with confidence',
    'description' => 'Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat.',
    'primaryButtonText' => 'Get started',
    'primaryButtonUrl' => '#',
    'secondaryButtonText' => 'Learn more',
    'secondaryButtonUrl' => '#',
    'screenshotSrc' => 'https://tailwindcss.com/plus-assets/img/component-images/project-app-screenshot.png',
    'screenshotAlt' => 'App screenshot',
])

<div class="relative isolate overflow-hidden bg-white">
    <svg class="absolute inset-0 -z-10 size-full stroke-gray-200 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]" aria-hidden="true">
        <defs>
            <pattern id="0787a7c5-978c-4f66-83c7-11c213f99cb7" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
                <path d="M.5 200V.5H200" fill="none" />
            </pattern>
        </defs>
        <rect width="100%" height="100%" stroke-width="0" fill="url(#0787a7c5-978c-4f66-83c7-11c213f99cb7)" />
    </svg>
    <div class="mx-auto max-w-7xl px-6 pt-10 pb-24 sm:pb-32 lg:flex lg:px-8 lg:py-40">
        <div class="mx-auto max-w-2xl lg:mx-0 lg:shrink-0 lg:pt-8">
            <img class="h-11" src="{{ $logoSrc }}" alt="{{ $logoAlt }}">
            <div class="mt-24 sm:mt-32 lg:mt-16">
                <a href="#" class="inline-flex space-x-6">
                    <span class="rounded-full bg-indigo-600/10 px-3 py-1 text-sm/6 font-semibold text-indigo-600 ring-1 ring-indigo-600/10 ring-inset">{{ $tagLabel }}</span>
                    <span class="inline-flex items-center space-x-2 text-sm/6 font-medium text-gray-600">
                        <span>{{ $tagText }}</span>
                        <svg class="size-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </a>
            </div>
            <h1 class="mt-10 text-5xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-7xl">{{ $title }}</h1>
            <p class="mt-8 text-lg font-medium text-pretty text-gray-500 sm:text-xl/8">{{ $description }}</p>
            <div class="mt-10 flex items-center gap-x-6">
                <a href="{{ $primaryButtonUrl }}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">{{ $primaryButtonText }}</a>
                <a href="{{ $secondaryButtonUrl }}" class="text-sm/6 font-semibold text-gray-900">{{ $secondaryButtonText }} <span aria-hidden="true">→</span></a>
            </div>
        </div>
        <div class="mx-auto mt-16 flex max-w-2xl sm:mt-24 lg:mt-0 lg:mr-0 lg:ml-10 lg:max-w-none lg:flex-none xl:ml-32">
            <div class="max-w-3xl flex-none sm:max-w-5xl lg:max-w-none">
                <div class="-m-2 rounded-xl bg-gray-900/5 p-2 ring-1 ring-gray-900/10 ring-inset lg:-m-4 lg:rounded-2xl lg:p-4">
                    <img src="{{ $screenshotSrc }}" alt="{{ $screenshotAlt }}" width="2432" height="1442" class="w-[76rem] rounded-md ring-1 shadow-2xl ring-gray-900/10">
                </div>
            </div>
        </div>
    </div>
</div>