<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">

        {{-- Role-Based Greeting or Content --}}
        @php
            $role = Auth::user()->role ?? 'user';
        @endphp

        <div class="text-xl font-semibold text-zinc-800 dark:text-zinc-100">
            @if ($role === 'admin')
                Welcome, Admin! 🎉 Here's your overview.
            @elseif ($role === 'employer')
                Hello Employer 👔 — Manage your job listings and applications.
            @else
                Welcome, User 👋 — Browse and explore your dashboard.
            @endif
        </div>

        {{-- Cards Section --}}
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
        </div>

        {{-- Main Content Area --}}
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />

            {{-- Example of role-specific section --}}
            <div class="relative z-10 p-6 text-sm text-zinc-700 dark:text-zinc-300">
                @if ($role === 'admin')
                    <p>Here you can manage users, view analytics, and control system settings.</p>
                @elseif ($role === 'employer')
                    <p>Post job listings, review applications, and contact potential hires.</p>
                @else
                    <p>Access your profile, check notifications, or explore opportunities.</p>
                @endif
            </div>
        </div>

    </div>
</x-layouts.app>

