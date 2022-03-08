<div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 9999">
    <!-- Then put toasts within -->
    <div id="toast" class="toast fade {{ session()->has('message') ? 'show' : 'hide' }}" role="alert"
        aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <strong class="me-auto text-dark fw-bold rounded d-flex align-items-baseline gap-1"><i
                    class="fas fa-info-circle"></i>
                Info</strong>
            <button type="button" class="btn-close text-dark me-1" data-bs-dismiss="toast" aria-label="Close">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="toast-body">
            {{ session('message') }}
        </div>
    </div>
</div>
