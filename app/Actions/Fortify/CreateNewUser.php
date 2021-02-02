<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {

        /*$pass = array(($input['password']));
        $password = implode($pass); */


        Validator::make($input, [
            /*'p_name' => ['required', 'string', 'max:8'],
            'f_name' => ['required', 'string', 'max:32'],
            'm_name' => ['required', 'string', 'max:32'],
            'l_name' => ['required', 'string', 'max:32'],
            'suffix' => ['required', 'string', 'max:16'],

            'contact_number' => ['required', 'string', 'max:16'],
            'contact_alt' => ['required', 'string', 'max:16'],

            'present_address' => ['required', 'string', 'max:255'],
            'residential_address' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:16'],
            'blood_group' => ['required', 'string', 'max:4'],
            'date_of_birth' => ['required', 'date'],
            'place_of_birth' => ['required', 'string', 'max:255'],
            'date_of_death' => ['required', 'date'],
            'date_of_ordination' => ['required', 'date'],
            'designation' => ['required', 'string', 'max:96'],
            'commision' => ['required', 'string', 'max:96'],*/

            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        return User::create([
            'p_name' => $input['p_name'],
            'f_name' => $input['f_name'],
            'm_name' => $input['m_name'],
            'l_name' => $input['l_name'],
            'suffix' => $input['suffix'],

            'contact_number' => $input['contact_number'],
            'contact_alt' => $input['contact_alt'],

            'present_address' => $input['present_address'],
            'residential_address' => $input['residential_address'],

            'gender' => $input['gender'],
            'blood_group' => $input['blood_group'],

            'date_of_birth' => $input['date_of_birth'],
            'place_of_birth' => $input['place_of_birth'],

            'date_of_death' => $input['date_of_death'],
            'date_of_ordination' => $input['date_of_ordination'],

            'designation' => $input['designation'],
            'commision' => $input['commision'],

            'email' => $input['email'],
            'text_password' => $input['password'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
