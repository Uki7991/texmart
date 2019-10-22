<!-- Central Modal Small -->
<div class="modal fade" id="tenSecondsModal" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="myModalLabel"
     aria-hidden="true">

    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog modal-dialog-centered" role="document">


        <div class="modal-content">
            <div class="container">
                <div class="row">
                    <div class="col-auto">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <div class="row justify-content-around my-4">
                    <div class="col-auto">
                        <a href="#" class="btn btn-success">Заказчик</a>
                    </div>
                    <div class="col-auto">
                        <a href="#" class="btn btn-success">Производитель</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Central Modal Small -->

@push('scripts')
    <script>
        setTimeout(function () {
            $('#tenSecondsModal').modal('show');
        }, 1000)
    </script>
@endpush
