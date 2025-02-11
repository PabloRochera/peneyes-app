<section class="space-y-6 bg-white p-6 rounded-xl shadow-lg border border-gray-200">
    <header>
        <h2 class="text-lg font-semibold text-gray-900">{{ __('Update Password') }}</h2>
        <p class="mt-1 text-sm text-gray-600">{{ __('Ensure your account is using a long, random password to stay secure.') }}</p>
    </header>
    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')
        <div>
            <x-input-label for="update_password_current_password" :value="__('Current Password')" />
            <x-text-input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full border border-gray-300 rounded-lg p-2 shadow-sm" autocomplete="current-password" />
        </div>
        <div>
            <x-input-label for="update_password_password" :value="__('New Password')" />
            <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full border border-gray-300 rounded-lg p-2 shadow-sm" autocomplete="new-password" />
        </div>
        <div>
            <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full border border-gray-300 rounded-lg p-2 shadow-sm" autocomplete="new-password" />
        </div>
        <div class="flex items-center gap-4">
            <x-primary-button class="bg-indigo-600 hover:bg-indigo-700 text-white py-2 px-4 rounded-lg transition">{{ __('Save') }}</x-primary-button>
        </div>
    </form>
</section>