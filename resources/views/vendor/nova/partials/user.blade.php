
<div class="h-9 flex items-center">

</div>


<dropdown-trigger class="h-9 flex items-center" slot-scope="{toggle}" :handle-click="toggle">

    @isset($user->email)
		<div class="credit">
			{{ __('Minutes') }}: {{ $user->credit }}
		</div>
		
    @endisset

    <span class="text-90">
        {{ $user->name ?? $user->email ?? __('Nova User') }}
    </span>
</dropdown-trigger>

<dropdown-menu slot="menu" width="200" direction="rtl">
    <ul class="list-reset">
        <li>
            <a href="{{ url('/btg/resources/users/' . $user->id . '/edit') }}" class="block no-underline text-90 hover:bg-30 p-3">
                {{ __('Profile') }}
            </a>
        </li>	
        <li>
            <a href="{{ route('nova.logout') }}" class="block no-underline text-90 hover:bg-30 p-3">
                {{ __('Logout') }}
            </a>
        </li>			
    </ul>
</dropdown-menu>
