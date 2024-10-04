<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class=" flex justify-evenly items-center w-full gap-2">
        <div class="mt-4 w-full">
            <x-input-label for="gender" :value="__('Gender')" />
            <select id="gender" name="gender" class="block mt-1 w-full  border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                <option value="" disabled selected>{{ __('Select your gender') }}</option>
                <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>{{ __('Male') }}</option>
                <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>{{ __('Female') }}</option>
                <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>{{ __('Other') }}</option>
            </select>
            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
        </div>

        <div class="mt-4 w-full">
            <x-input-label for="religion" :value="__('Religion')" />
            <select id="religion" name="religion" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                <option value="" disabled selected>{{ __('Select your religion') }}</option>
                <option value="hindu" {{ old('religion') == 'hindu' ? 'selected' : '' }}>{{ __('Hindu') }}</option>
                <option value="muslim" {{ old('religion') == 'muslim' ? 'selected' : '' }}>{{ __('Muslim') }}</option>
                <option value="other" {{ old('religion') == 'other' ? 'selected' : '' }}>{{ __('Other') }}</option>
            </select>
            <x-input-error :messages="$errors->get('religion')" class="mt-2" />
        </div>
    </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"  />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex justify-evenly items-center w-full gap-2">
        <div class="mt-4 w-full">
            <x-input-label for="mobile" :value="__('Mobile')" />
            <x-text-input id="mobile" class="block mt-1 w-full" type="text" name="mobile" :value="old('mobile')" required  />
            <x-input-error :messages="$errors->get('mobile')" class="mt-2" />
        </div>


        <div class="mt-4 w-full">
            <x-input-label for="marital_status" :value="__('Marital Status')" />
            <select id="marital_status" name="marital_status" class="block   mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                <option value="" disabled selected>{{ __('Select') }}</option>
                <option value="hindu" {{ old('marital_status') == 'never married' ? 'selected' : '' }}>{{ __('Never Married') }}</option>
                <option value="muslim" {{ old('marital_status') == 'married' ? 'selected' : '' }}>{{ __('Married') }}</option>
                <option value="divorced" {{ old('marital_status') == 'divorced' ? 'selected' : '' }}>{{ __('Divorced') }}</option>
                <option value="awful divorce" {{ old('marital_status') == 'awful_divorce' ? 'selected' : '' }}>{{ __('Awful Divorce') }}</option>
                <option value="separated" {{ old('marital_status') == 'separated' ? 'selected' : '' }}>{{ __('Separated') }}</option>
                <option value="widowed" {{ old('marital_status') == 'widowed' ? 'selected' : '' }}>{{ __('Widowed') }}</option>
                <option value="annulled" {{ old('marital_status') == 'annulled' ? 'selected' : '' }}>{{ __('annulled') }}</option>
            </select>
            <x-input-error :messages="$errors->get('religion')" class="mt-2" />
        </div>
    </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
