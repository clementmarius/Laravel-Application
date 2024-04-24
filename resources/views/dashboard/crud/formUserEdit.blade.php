{{--@dd($user->hasRole('customer'))--}}
<form action="{{ route('user.update', ['id' => $user->id]) }}" method="post">
{{--    @method('PUT')--}}
    @csrf
    <div class="grid grid-cols-6 gap-6">
        <div class="col-span-6 sm:col-span-3">
            <x-input-label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                           for="email" :value="__('Email')"/>
            <x-text-input id="email" name="email" type="email"
                          class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                          :value="old('email', $user->email)" required autocomplete="username"/>
            <x-input-error class="mt-2" :messages="$errors->get('email')"/>
           </div>
    </div>
    <br>
    <div class="grid grid-cols-6 gap-6">
        <div class="col-span-6 sm:col-span-3">
            <x-input-label for="update_password_current_password" :value="__('Password')"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"/>
            <x-text-input id="update_password_current_password" name="current_password" type="password"
                          class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"/>
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2"/>
           </div>
    </div>
    <br>
    <div class="grid grid-cols-6 gap-6">
        <div class="col-span-6 sm:col-span-3">

            <x-input-label for="role" :value="__('Role')"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"/>

            <select name="role" id="role"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                @foreach ($roles as $role)
                    <option value="{{ $role }}" {{ old('role', $user->roles->first()->name ?? '') == $role ? 'selected' : '' }}>
                        {{ $role }}
                    </option>
                @endforeach
            </select>

            {{--                <x-input-error :messages="$errors->updatePassword->get('role')" class="mt-2"/>--}}

        </div>
    </div>

    <br>
    <div class="grid grid-cols-6 gap-6">
        <div class="col-span-6 sm:col-span-3">
            <x-input-label :value="__('Verified')" name="verified" id="verified" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"/>
            <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        </div>
    </div>
    <br>

    <button>Submit</button>

</form>
