<div class="list-group">
    <a href="{{ route('profile.dashboard') }}" class="list-group-item list-group-item-action step1 {{ request()->is('profile/dashboard*') ? 'active' : '' }}" >{{ __('Лента') }}</a>
    @if(auth()->user()->role_id == 4 || auth()->user()->role_id == 1)
        <a href="{{ route('profile.announce.index') }}" class="list-group-item list-group-item-action step1 {{ request()->is('profile/announce*') ? 'active' : '' }}" >{{ __('Разместить заказ') }}</a>
    @endif

    {{--    <a href="{{ route('admin.category.datatable') }}" class="list-group-item list-group-item-action {{ request()->is('admin/category*') ? 'active' : '' }}">{{ __('Категории') }}</a>--}}
    {{--    <a href="{{ route('admin.product.datatable') }}" class="list-group-item list-group-item-action {{ request()->is('admin/product*') ? 'active' : '' }}">{{ __('Товары') }}</a>--}}
    @if(auth()->user()->role_id == 5 || auth()->user()->role_id == 1)
        <a href="#addrequest" id="accordion" data-toggle="collapse" class="list-group-item list-group-item-action step4"  aria-expanded="false">Подать объявления
            <i class="fas fa-angle-down rotate-icon" style="position: absolute;top: .8rem;right: 0;margin-right: 1.25rem;"></i>
        </a>
        <div class="collapse step5 {{ request()->query('type') == 'service' || request()->query('type') == 'productions' || request()->query('type') == 'product' ? "show" : "" }}" id="addrequest">

            <a href="{{ route('profile.production.create', ['type' => 'productions']) }}" class="list-group-item list-group-item-action step6  {{ request()->query('type') == 'productions' ? 'active' : 'grey lighten-2' }}" style="padding-left: 15%;">Цеха</a>
            <a href="{{ route('profile.production.create', ['type' => 'service']) }}" class="list-group-item list-group-item-action step7 {{ request()->query('type') == 'service' ? 'active' : 'grey lighten-2' }}" style="padding-left: 15%">Услуги</a>
            <a href="{{ route('profile.production.create', ['type' => 'product']) }}" class="list-group-item list-group-item-action step8 {{ request()->query('type') == 'product' ? 'active' : 'grey lighten-2' }}" style="padding-left: 15%">Товары</a>
        </div>
    @endif

    <a href="{{ route('profile.production.index') }}" class="list-group-item list-group-item-action {{ request()->is('profile/production') ? 'active' : '' }}">{{ __('Мои объявления') }}</a>
    <a href="{{ route('profile.user.favorites') }}" class="list-group-item list-group-item-action {{ request()->is('profile/user/favorites') ? 'active' : '' }}">{{ __('Мои избранные') }}</a>
    <a href="{{ route('profile.settings') }}" class="list-group-item list-group-item-action step9 {{ request()->is('profile/settings*') ? 'active' : '' }}">{{ __('Настройки аккаунта') }}</a>
    <a href="#" onclick="event.preventDefault();$('.logout-form').submit();" class="list-group-item list-group-item-action text-danger step10">{{ __('Выход') }}</a>
</div>
<form action="{{ route('logout') }}" method="POST" class="d-none logout-form">
    @csrf
</form>
@push('scripts')
    <script>
        $('.collapse').on('show.bs.collapse', function () {
            $('.fa-angle-down').addClass('fa-rotate-180');
        });
        $('.collapse').on('hide.bs.collapse', function () {
            $('.fa-angle-down').removeClass('fa-rotate-180');
        });
    </script>
@endpush
