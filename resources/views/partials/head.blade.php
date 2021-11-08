<nav class="bg-primary">
    <ul class="d-flex justify-content-center">
        @foreach ($menus as $menu)
            <li class="p-4 {{request()->routeIs($menu['route']) ? 'active' : ''}}">
                <a class="text-white" href="{{ route($menu['route']) }}">{{ $menu['name'] }}</a>
            </li>
        @endforeach
    </ul>
</nav>