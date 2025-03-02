
<x-guest-layout>
    @section('title', 'إعادة تعيين كلمة المرور')
    <div class="mb-4 text-sm text-gray-600">
        {{ __('هل نسيت كلمة المرور ؟
                 أدخل عنوان بريدك الإلكتروني أدناه لإعادة تعيين كلمة المرور الخاصة بك ') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="البريد الالكتروني" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('إعادة تعيين كلمة المرور') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
