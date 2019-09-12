<div class="tab-pane {{ request('sharp') ? 'active' : '' }}" id="announce-create" role="tabpanel" aria-labelledby="announce-create-tab">
    <h1>Подача обьявления</h1>

    <ul class="nav">
        <li class="nav-item">
            <a href="#production-create" id="production-create-tab" data-toggle="tab" role="tab" aria-controls="production-create" aria-selected="false" class="nav-link btn btn-texmart-orange rounded-0 mr-3">Швейное производство</a>
        </li>
        <li class="nav-item">
            <a href="#service-create" id="service-create-tab" data-toggle="tab" role="tab" aria-controls="service-create" aria-selected="false" class="nav-link btn btn-texmart-orange rounded-0 mr-3">Услуги</a>
        </li>
        <li class="nav-item">
            <a href="#product-create" id="product-create-tab" data-toggle="tab" role="tab" aria-controls="product-create" aria-selected="false" class="nav-link btn btn-texmart-orange rounded-0 mr-3">Товары</a>
        </li>
    </ul>

    <div class="tab-content py-5">
        @include('user-production.form-tabs.production-create')
        @include('user-production.form-tabs.product-create')
        @include('user-production.form-tabs.service-create')
    </div>
</div>
