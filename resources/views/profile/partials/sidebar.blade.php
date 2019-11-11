<div class="list-group">
    <a href="{{ route('profile.dashboard') }}" class="list-group-item list-group-item-action {{ request()->is('profile/dashboard*') ? 'active' : '' }}" data-step="1" data-intro="Добро пожаловать в профиль, в раздел ленты " >{{ __('Лента') }}</a>
    {{--    <a href="{{ route('admin.category.datatable') }}" class="list-group-item list-group-item-action {{ request()->is('admin/category*') ? 'active' : '' }}">{{ __('Категории') }}</a>--}}
    {{--    <a href="{{ route('admin.product.datatable') }}" class="list-group-item list-group-item-action {{ request()->is('admin/product*') ? 'active' : '' }}">{{ __('Товары') }}</a>--}}
    <a href="#addrequest" data-toggle="collapse" class="list-group-item list-group-item-action" aria-expanded="false">Подать объявления</a>
    <div class="collapse" id="addrequest">
        <a href="{{ route('profile.production.index', ['type' => 'productions']) }}" class="list-group-item list-group-item-action {{ request()->query('type') == 'productions' ? 'active' : '' }}">Цеха</a>
        <a href="{{ route('profile.production.index', ['type' => 'service']) }}" class="list-group-item list-group-item-action {{ request()->query('type') == 'service' ? 'active' : '' }}">Услуги</a>
        <a href="{{ route('profile.production.index', ['type' => 'product']) }}" class="list-group-item list-group-item-action {{ request()->query('type') == 'product' ? 'active' : '' }}">Товары</a>
    </div>
    <a href="{{ route('profile.settings') }}" class="list-group-item list-group-item-action {{ request()->is('profile/settings*') ? 'active' : '' }}">{{ __('Настройки аккаунта') }}</a>
    <a href="#" onclick="event.preventDefault();$('.logout-form').submit();" class="list-group-item list-group-item-action text-danger">{{ __('Выход') }}</a>
</div>
<form action="{{ route('logout') }}" method="POST" class="d-none logout-form">
    @csrf
</form>
