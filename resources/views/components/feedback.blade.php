<div id="feedback" class="max-w-xl mx-auto py-8">
    <h1 class="text-xl xs:text-2xl lg:text-4xl tracking-tight font-bold text-gray-900 dark:text-white">
        {{ __('Feedback form') }}
    </h1>
    <p class="xs:text-lg lg:text-xl text-gray-600 dark:text-gray-400 mt-2 sm:mt-3">
        {{ __('Leave your contact information and we will contact you as soon as possible') }}
    </p>
    <form class="flex flex-col mt-6 sm:mt-8 lg:mt-10" action="{{ route('feedback') }}" x-data>
        @method('POST')
        @csrf

        <div>
            <x-input-label class="mb-1" for="phone">{{ __('Your phone') }}</x-input-label>
            <div class="relative">
                <span class="absolute left-2.5 top-[9px] dark:text-gray-300">+7 (9</span>
                <x-text-input class="w-full pl-12" type="tel" name="phone" id="phone" required="" @input="if ($el.value.length == 1 && $el.value[0] == 9) $el.value = '79'"
                    x-mask:dynamic="'99) 999-99-99'"
                    placeholder="##) ###-##-##" />
            </div>
        </div>
        <div class="mt-4 sm:mt-6">
            <x-input-label class="mb-1" for="fio">{{ __('Your name') }}</x-input-label>
            <x-text-input class="w-full" type="text" name="fio" id="fio" required="" />
        </div>

        <x-primary-button class="ml-auto mt-6 sm:mt-8">{{ __('Contact me') }}</x-primary-button>
    </form>
</div>
