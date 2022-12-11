@section('header')
<header class="text-gray-600 body-font bg-white dark:bg-gray-900">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a href="{{ route('top') }}" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <span class="ml-3 text-xl text-gray-400">{{ __('Smoozフリースペース') }}</span>
        </a>
        <!-- 認証によって、ボタン表示の切り替え -->
        @auth
        <!-- ユーザー新規登録・ログイン済みならマイページ、ログアウト表示 -->
        <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
            <a href="{{ route('lists') }}"
               class="mr-5 text-gray-400 hover:text-gray-500 dark:hover:text-gray-300">
                {{ __('路線一覧') }}
            </a>
            <a href="{{ route('favorite') }}"
               class="mr-5 text-gray-400 hover:text-gray-500 dark:hover:text-gray-300">
                {{ __('お気に入り') }}
            </a>
        </nav>
        
        <button class="
                        inline-flex
                        text-white
                        items-center
                        bg-emerald-500
                        border-0
                        py-1
                        px-3
                        mx-2
                        focus:outline-none
                        hover:bg-emerald-400
                        rounded
                        text-base
                        mt-4
                        md:mt-0
                        ">
            <a href="{{ route('index') }}">
                {{ __('マイページ') }}
            </a>
        </button>
        
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="
                            inline-flex
                            text-white
                            items-center
                            bg-red-500
                            border-0
                            py-1
                            px-3
                            mx-2
                            focus:outline-none
                            hover:bg-red-400
                            rounded
                            text-base
                            mt-4
                            md:mt-0
                            ">
                {{ __('ログアウト') }}
            </button>
        </form>
        @else
        <!-- ユーザー新規登録・ログインしていない場合、新規登録・ログインボタン表示 -->
        <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
            <a href="{{ route('lists') }}"
               class="mr-5 text-gray-400 hover:text-gray-500 dark:hover:text-gray-300">
                {{ __('路線一覧') }}
            </a>
        </nav>
        
        <button class="
                        inline-flex
                        text-white
                        items-center
                        bg-emerald-500
                        border-0
                        py-1
                        px-3
                        mx-2
                        focus:outline-none
                        hover:bg-emerald-400
                        rounded
                        text-base
                        mt-4
                        md:mt-0
                        ">
            <a href="{{ route('register') }}">
                {{ __('新規登録') }}
            </a>
        </button>
        
        <button class="
                        inline-flex
                        text-white
                        items-center
                        bg-emerald-500
                        border-0
                        py-1
                        px-3
                        mx-2
                        focus:outline-none
                        hover:bg-emerald-400
                        rounded
                        text-base
                        mt-4
                        md:mt-0
                        ">
            <a href="{{ route('login') }}">
                {{ __('ログイン') }}
            </a>
        </button>
        @endauth
    </div>
</header>
@endsection