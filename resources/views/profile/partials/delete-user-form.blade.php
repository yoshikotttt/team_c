<section class="space-y-6 flex flex-col items-center justify-center mb-28">
   
        <h2 class="text-center text-xl font-semibold text-gray-900">ログアウト</h2>


        {{-- <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p> --}}
  
  

    
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        
        {{-- <x-dropdown-link :href="route('logout')"
        onclick="event.preventDefault();
        this.closest('form').submit();">
        {{ __('Log Out') }}
        </x-dropdown-link>
        </form> --}}
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"  class="bg-red-300 hover:bg-red-200 text-white font-bold py-2 px-4 rounded mt-6">ログアウト</button>
        </form>
        
        {{-- <button onclick="location.href='logout'" type="button" class="btn btn-active btn-info btn-sm mx-2">
            ログアウト
        </button> --}}
 
    
</section>
