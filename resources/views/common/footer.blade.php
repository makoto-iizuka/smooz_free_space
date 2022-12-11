@section('footer')
<footer class="bg-white dark:bg-gray-900">
    <div class="container px-3 py-4 mx-auto">
        <div class="flex flex-col items-center sm:flex-row sm:justify-between">
            <p class="text-sm text-gray-400">
                {{ __('© Copyright 2022. All Rights Reserved.') }}
            </p>
            <div class="flex mt-3 -mx-2 sm:mt-0">
                <a href="teams"
                   class="
                            mx-2
                            text-sm
                            text-gray-400
                            transition-colors
                            duration-300
                            hover:text-gray-500
                            dark:hover:text-gray-300
                            " 
                   aria-label="Reddit">
                    {{ __('利用規約') }}
                </a>
                <a href="privacy"
                   class="
                            mx-2
                            text-sm
                            text-gray-400
                            transition-colors
                            duration-300
                            hover:text-gray-500
                            dark:hover:text-gray-300
                            " 
                   aria-label="Reddit">
                    {{ __('プライバシーポリシー') }}
                </a>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeVdT4D8S6ZuVVDoQqz_YyHacqxarB7jaUkPTa22VJC_wbIsg/viewform" 
                   class="
                            mx-2
                            text-sm
                            text-gray-400
                            transition-colors
                            duration-300
                            hover:text-gray-500
                            dark:hover:text-gray-300
                            " 
                   aria-label="Reddit">
                    {{ __('お問い合わせ') }}
                </a>
            </div>
        </div>
    </div>
</footer>
@endsection