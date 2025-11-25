@props(['title', 'description'])

<div class="rounded-lg border border-gray-200 bg-white shadow-theme-xs dark:border-gray-800 dark:bg-gray-800">
    <div class="grid grid-cols-1 xl:grid-cols-[280px_1fr]">
        <!-- Settings Navigation -->
        <div class="border-b border-gray-200 xl:border-b-0 xl:border-r dark:border-gray-800">
            <nav class="flex xl:flex-col p-1" x-data="{ active: '{{ request()->routeIs('settings.profile.*') ? 'profile' : (request()->routeIs('settings.password.*') ? 'password' : 'appearance') }}' }">
                <a href="{{ route('settings.profile.edit') }}"
                   :class="active === 'profile' ? 'bg-gray-100 text-gray-900 dark:bg-gray-700 dark:text-white' : 'text-gray-700 hover:bg-gray-50 dark:text-gray-400 dark:hover:bg-gray-700/50'"
                   class="flex items-center gap-3 rounded-md px-4 py-3 text-sm font-medium transition-colors">
                    Profile
                </a>
                <a href="{{ route('settings.password.edit') }}"
                   :class="active === 'password' ? 'bg-gray-100 text-gray-900 dark:bg-gray-700 dark:text-white' : 'text-gray-700 hover:bg-gray-50 dark:text-gray-400 dark:hover:bg-gray-700/50'"
                   class="flex items-center gap-3 rounded-md px-4 py-3 text-sm font-medium transition-colors">
                    Password
                </a>
            </nav>
        </div>

        <!-- Settings Content -->
        <div class="p-6 xl:p-8">
            <div class="mb-6">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white">{{ $title }}</h2>
                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">{{ $description }}</p>
            </div>

            {{ $slot }}
        </div>
    </div>
</div>
