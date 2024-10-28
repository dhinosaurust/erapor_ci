<div class="modal fade shadow" id="modalAttemptLogin" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content p-3">
      <div class="modal-header border-bottom-0">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <i class="bi bi-exclamation-circle text-danger display-1 mb-3"></i>
        <p class="display-6 fw-semibold mt-4">Oops...</p>
        <p class="mt-2"><?php echo session()->getFlashdata('error'); ?></p>
      </div>
      <div class="modal-footer border-top-0">
        <button type="button" class="btn btn-danger w-100 text-capitalize shadow" data-bs-dismiss="modal">coba lagi</button>
      </div>
    </div>
  </div>
</div>
