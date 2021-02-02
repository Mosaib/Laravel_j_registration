<x-guest-layout>
        <x-jet-authentication-card>
            <x-slot name="logo">
                <x-jet-authentication-card-logo />
            </x-slot>

            <x-jet-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <x-jet-label for="name" value="{{ __('Prefix') }}" />
                <div class="form-group">
                    <select  name="p_name" class="form-control" required autofocus autocomplete="prefix">
                    <option selected disabled="">Choose...</option>
                    <option value="Rev.">Rev.</option>
                    <option value="Fr.">Fr.</option>
                    <option value="Br.">Br.</option>
                    <option value="Sr.">Sr.</option>
                    <option value="Mr.">Mr.</option>
                    <option value="Mrs.">Mrs.</option>
                    <option value="Miss.">Miss.</option>
                    </select>
                </div>

                <div class="mt-4">
                    <x-jet-label for="f_name" value="{{ __('First Name') }}" />
                    <x-jet-input id="f_name" class="block mt-1 w-full" type="text" name="f_name" :value="old('name')" required />
                </div>

                <div class="mt-4">
                    <x-jet-label for="m_name" value="{{ __('First Name') }}" />
                    <x-jet-input id="m_name" class="block mt-1 w-full" type="text" name="m_name" :value="old('name')" required />
                </div>

                <div class="mt-4">
                    <x-jet-label for="l_name" value="{{ __('First Name') }}" />
                    <x-jet-input id="l_name" class="block mt-1 w-full" type="text" name="l_name" :value="old('name')" required />
                </div>

                <div class="mt-4">
                    <x-jet-label for="suffix" value="{{ __('Suffix') }}" />
                    <x-jet-input id="suffix" class="block mt-1 w-full" type="text" name="suffix" :value="old('name')" required />
                </div>

                <div class="mt-4">
                    <x-jet-label for="contact_number" value="{{ __('Contact Number') }}" />
                    <x-jet-input id="contact_number" class="block mt-1 w-full" type="text" name="contact_number" :value="old('name')" required />
                </div>

                <div class="mt-4">
                    <x-jet-label for="contact_alt" value="{{ __('Contact Number Alternate') }}" />
                    <x-jet-input id="contact_alt" class="block mt-1 w-full" type="text" name="contact_alt" :value="old('name')" required />
                </div>

                <div class="mt-4">
                    <x-jet-label for="present_address" value="{{ __('Present Address') }}" />
                    <x-jet-input id="present_address" class="block mt-1 w-full" type="text" name="present_address" :value="old('name')" required />
                </div>

                <div class="mt-4">
                    <x-jet-label for="residential_address" value="{{ __('Residential Address') }}" />
                    <x-jet-input id="residential_address" class="block mt-1 w-full" type="text" name="residential_address" :value="old('name')" required />
                </div>

                <x-jet-label for="name" value="{{ __('Gender') }}" />
                <div class="form-group">
                    <select  name="gender" class="form-control" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Others">Others</option>
                    </select>
                </div>

                <x-jet-label for="name" value="{{ __('Blood Group') }}" />
                <div class="form-group">
                    <select  name="blood_group" class="form-control" required>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    </select>
                </div>

                <div class="mt-4">
                    <x-jet-label for="date_of_birth" value="{{ __('Date of Birth') }}" />
                    <x-jet-input id="date_of_birth" class="block mt-1 w-full" type="date" name="date_of_birth" :value="old('name')" required />
                </div>

                <div class="mt-4">
                    <x-jet-label for="place_of_birth" value="{{ __('Place of Birth') }}" />
                    <x-jet-input id="place_of_birth" class="block mt-1 w-full" type="text" name="place_of_birth" :value="old('name')" required />
                </div>

                <div class="mt-4">
                    <x-jet-label for="date_of_ordination" value="{{ __('Date of Ordination') }}" />
                    <x-jet-input id="date_of_ordination" class="block mt-1 h-full w-full" type="date" name="date_of_ordination" :value="old('name')" required />
                </div>

                <div class="mt-4">
                    <x-jet-label for="date_of_death" value="{{ __('Date of Death') }}" />
                    <x-jet-input id="date_of_death" class="block mt-1 w-full" type="date" name="date_of_death" :value="old('name')" required />
                </div>

                <div class="mt-4">
                    <x-jet-label for="commision" value="{{ __('Commision') }}" />
                    <x-jet-input id="commision" class="block mt-1 w-full" type="text" name="commision" :value="old('name')" required />
                </div>

                <div class="mt-4">
                    <x-jet-label for="designation" value="{{ __('Designation') }}" />
                    <x-jet-input id="designation" class="block mt-1 w-full" type="text" name="designation" :value="old('name')" required />
                </div>

                <div class="mt-4">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>

                

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-jet-label for="terms">
                            <div class="flex items-center">
                                <x-jet-checkbox name="terms" id="terms"/>

                                <div class="ml-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-jet-label>
                    </div>
                @endif

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-jet-button class="ml-4">
                        {{ __('Register') }}
                    </x-jet-button>
                </div>
            </form>
        </x-jet-authentication-card>
</x-guest-layout>
