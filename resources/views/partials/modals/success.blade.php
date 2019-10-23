<!-- Button trigger modal-->
<button type="button" id="buttonModalClick" class="btn btn-primary">success</button>

<!--Modal: modalConfirmDelete-->
<div class="modal fade" id="modalSuccess" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
        <!--Content-->
        <div class="modal-content text-center">
            <!--Header-->
            <div class="modal-header d-flex justify-content-center">
                <p class="heading">Are you sure?</p>
            </div>

            <!--Body-->
            <div class="modal-body">

                <i class="fas fa-times fa-4x animated rotateIn"></i>

            </div>

            <!--Footer-->
            <div class="modal-footer flex-center">
                <a href="" class="btn  btn-outline-danger">Yes</a>
                <a type="button" class="btn  btn-danger waves-effect" data-dismiss="modal">No</a>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: modalConfirmDelete-->

@push('scripts')
    <script>
            let button = $('#buttonModalClick');
            button.onclick(function () {
                setTimeout(function () {
                    $('#modalSuccess').modal('show');
                },1000);
            });
    </script>

@endpush
