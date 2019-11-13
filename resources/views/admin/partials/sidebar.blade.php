<div class="list-group">
    <a href="{{ route('admin.admin.dashboard') }}" class="list-group-item list-group-item-action {{ request()->is('admin/dashboard*') ? 'active' : '' }}">{{ __('Dashboard') }}</a>
{{--    <a href="{{ route('admin.category.datatable') }}" class="list-group-item list-group-item-action {{ request()->is('admin/category*') ? 'active' : '' }}">{{ __('Категории') }}</a>--}}
{{--    <a href="{{ route('admin.product.datatable') }}" class="list-group-item list-group-item-action {{ request()->is('admin/product*') ? 'active' : '' }}">{{ __('Товары') }}</a>--}}
    <a href="{{ route('admin.production.index', ['type' => 'productions']) }}" class="list-group-item list-group-item-action {{ request()->query('type') == 'productions' ? 'active' : '' }}">Цеха</a>
    <a href="{{ route('admin.production.index', ['type' => 'service']) }}" class="list-group-item list-group-item-action {{ request()->query('type') == 'service' ? 'active' : '' }}">Услуги</a>
    <a href="{{ route('admin.production.index', ['type' => 'product']) }}" class="list-group-item list-group-item-action {{ request()->query('type') == 'product' ? 'active' : '' }}">Товары</a>
    <a href="{{ route('admin.blog.index') }}" class="list-group-item list-group-item-action" {{ request()->is('admin/blog*') ? 'active' : '' }}>Блог</a>
    <a href="#!" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
    <a href="#" onclick="event.preventDefault();$('.logout-form').submit();" class="list-group-item list-group-item-action text-danger">{{ __('Выход') }}</a>
</div>
<form action="{{ route('logout') }}" method="POST" class="d-none logout-form">
    @csrf
</form>
