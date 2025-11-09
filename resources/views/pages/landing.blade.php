<x-guest-layout>
    <div class="flex flex-col min-h-screen">
        <div class="flex-grow">
            @include('pages.landing.partials._top-bar')
            @include('pages.landing.partials._header')

            <main>
                @include('pages.landing.partials._hero')
                @include('pages.landing.partials._features')
                @include('pages.landing.partials._cta')
                @include('pages.landing.partials._partners')
            </main>
        </div>

        @include('pages.landing.partials._footer')
    </div>
</x-guest-layout>
