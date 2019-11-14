<div class="list-group">
    <a href="{{ route('profile.dashboard') }}" class="list-group-item list-group-item-action step1 {{ request()->is('profile/dashboard*') ? 'active' : '' }}" >{{ __('Лента') }}</a>
    @if(auth()->user()->role_id == 4 || auth()->user()->role_id == 1)
        <a href="{{ route('profile.announce.index') }}" class="list-group-item list-group-item-action step1 {{ request()->is('profile/announce*') ? 'active' : '' }}" >{{ __('Заказы') }}</a>
    @endif

    {{--    <a href="{{ route('admin.category.datatable') }}" class="list-group-item list-group-item-action {{ request()->is('admin/category*') ? 'active' : '' }}">{{ __('Категории') }}</a>--}}
    {{--    <a href="{{ route('admin.product.datatable') }}" class="list-group-item list-group-item-action {{ request()->is('admin/product*') ? 'active' : '' }}">{{ __('Товары') }}</a>--}}
    @if(auth()->user()->role_id == 5 || auth()->user()->role_id == 1)
        <a href="#addrequest" id="accordion" data-toggle="collapse" class="list-group-item list-group-item-action step4"  aria-expanded="false">Подать объявления</a>
        <div class="collapse step5" id="addrequest">
            <a href="{{ route('profile.production.index', ['type' => 'productions']) }}" class="list-group-item list-group-item-action step6 {{ request()->query('type') == 'productions' ? 'active' : '' }}">Цеха</a>
            <a href="{{ route('profile.production.index', ['type' => 'service']) }}" class="list-group-item list-group-item-action step7 {{ request()->query('type') == 'service' ? 'active' : '' }}">Услуги</a>
            <a href="{{ route('profile.production.index', ['type' => 'product']) }}" class="list-group-item list-group-item-action step8 {{ request()->query('type') == 'product' ? 'active' : '' }}">Товары</a>
        </div>
    @endif
    <a href="{{ route('profile.settings') }}" class="list-group-item list-group-item-action step9 {{ request()->is('profile/settings*') ? 'active' : '' }}">{{ __('Настройки аккаунта') }}</a>
    <a href="#" onclick="event.preventDefault();$('.logout-form').submit();" class="list-group-item list-group-item-action text-danger step10">{{ __('Выход') }}</a>
</div>
<form action="{{ route('logout') }}" method="POST" class="d-none logout-form">
    @csrf
</form>
