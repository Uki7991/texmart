<div class="owl-carousel owl-theme">
  @foreach($productions as $production)
    <div class="item">
      @include('productions.single', ['bootstrap3' => isset($bootstrap3) ? true : false])
    </div>
  @endforeach
</div>
