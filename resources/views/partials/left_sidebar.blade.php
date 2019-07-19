<div class="accordion" id="accordionExample">
    @foreach($categories as $category)
        <div class="card border-bottom border-top-0 border-left-0 border-right-0 bg-white">
            <div class="card-header  border-0 bg-white p-0" id="headingOne">
                <h2 class="mb-0">
                    <a href="#" data-toggle="collapse" data-target="#collapse{{ $category->id }}" aria-expanded="false" aria-controls="collapse{{ $category->id }}" class="nav-link bg-primary text-light d-flex align-items-center px-0 border-bottom">
                        <span class="col m-0 h5 font-weight-light">{{ $category->title }}</span>
                        <span class="col-auto">
                        <img src="{{ asset('icons/boss.png') }}" class="img-fluid pl-2 border-left" width="60" height="60" alt="">
                    </span>
                    </a>
                </h2>
            </div>

            @if(count($category->childs))
                <div id="collapse{{ $category->id }}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        @if(count($category->childs))
                            @include('partials.manageChilds', ['childs' => $category->childs, 'input' => true])
                        @endif
                    </div>
                </div>
            @endif
        </div>
    @endforeach
</div>
