<div class="h-screen bg-gray-900 text-white w-64 transition-all duration-300" :class="{ 'w-16': {{ $isOpen ? 'false' : 'true' }}}">
    <button>
        |||
    </button>
    @foreach ( $menu as $item )
        @if (auth()->check() && auth()->user()->role == 'ADMIN')
            @if ($item['role'] === '1')
                <a href="{{ route($item['route']) }}">
                    <button>{{$item['name']}}</button>
                </a>
            @else
                <a href="{{ route($item['route']) }}">
                    <button>{{$item['name']}}</button>
                </a>
            @endif
        @else
            @if ($item['role'] === '0')
                <a href="{{ route($item['route']) }}">
                    <button>{{$item['name']}}</button>
                </a>
            @endif
        @endif
    @endforeach
    <form action="{{ route('logout') }}" method="POST" style="margin-top: 10px">
        @csrf
        <input type="submit" name="input" value="Logout">
    </form>
</div>
