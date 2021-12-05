<template>
  <!-- Modal -->
  <div
    class="modal fade"
    id="viewmodal"
    tabindex="-1"
    aria-labelledby="modelTitleId"
    aria-hidden="true"
  >
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button
            type="button"
            class="close"
            data-dismiss="modal"
            aria-label="Close"
          >
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="">Name</label>
            <input
              type="text"
              class="form-control"
              v-model="rec.name"
              disabled
            />
          </div>

          <div class="form-group">
            <label for="">Description</label>
            <textarea
              class="form-control"
              name="description"
              id="description"
              rows="3"
              v-model="rec.description"
            ></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["rec"],
};
</script>

<style>
</style>