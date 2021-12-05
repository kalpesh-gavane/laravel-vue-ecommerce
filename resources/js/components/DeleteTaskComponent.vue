<template>
  <!-- Modal -->
  <div
    class="modal fade"
    id="deletemodal"
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
          Are You Sure You want To Delete This data ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">
            No
          </button>
          <button
            type="button"
            @click="deleterecord()"
            class="btn btn-secondary"
            data-dismiss="modal"
          >
            Yes Delete
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["rec"],

  methods: {
    deleterecord() {
      //  alert(id);
      axios
        .delete("http://localhost/laravel/public/tasks/" + this.rec.id)
        .then((response) => {
          console.log(response);
          this.$emit("refreshtask", response);
        });
    },
  },
  data() {
    return {};
  },
};
</script>

<style>
</style>