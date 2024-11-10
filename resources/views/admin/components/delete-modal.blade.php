<div id="{{ $modalId }}" class="modal animated fadeInUp custo-fadeInUp" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('forms.delete') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <p class="modal-text">
                    {{ __('forms.sure_of_delete') }}
                    <strong>{{ $itemName }}</strong> {{ __('forms.?') }}
                </p>
            </div>
            <div class="modal-footer md-button">
                <button class="btn" data-dismiss="modal">{{ __('forms.cancel') }}</button>
                <form action="{{ $formAction }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">{{ __('forms.confirm_delete') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
