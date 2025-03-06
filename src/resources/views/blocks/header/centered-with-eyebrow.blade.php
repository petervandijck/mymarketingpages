@props([
    'eyebrow' => 'Get the help you need',
    'title' => 'Support center',
    'description' => 'Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat.',
])

<div class="bg-white px-6 py-24 sm:py-32 lg:px-8">
    <div class="mx-auto max-w-2xl text-center">
        <p class="text-base/7 font-semibold text-indigo-600">{{ $eyebrow }}</p>
        <h2 class="mt-2 text-5xl font-semibold tracking-tight text-gray-900 sm:text-7xl">{{ $title }}</h2>
        <p class="mt-8 text-lg font-medium text-pretty text-gray-500 sm:text-xl/8">{{ $description }}</p>
        {{ $slot ?? '' }}
    </div>
</div>