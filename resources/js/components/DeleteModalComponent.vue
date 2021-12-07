<template>

  <div class="modal fade" id="deletemodalpop" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
            Remove Item from Cart
          </h5>
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
          <input type="hidden" id="id" />
          <h5>Are You Sure Want To Remove This Product?</h5>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">
            Close
          </button>
          <input type="hidden" id="delete_item_id" />
          <button
            type="submit"
            id="yes_delete_item"
            value="Yes-Delete"
            data-dismiss="modal"
            aria-label="Close"
            class="btn btn-danger"
            @click="deleteitem"
          >
            Yes, Delete
          </button>
        </div>
      </div>
    </div>
  </div>

</template>

<script>
export default {
    methods:{
         deleteitem() {
      const delete_id = document.querySelector(
        "input[id=delete_item_id]"
      ).value;

      axios
        .get("http://localhost/laravel/public/delete/item/" + delete_id)
        .then((response) => {
          this.$root.$emit("newdata");

          this.$toaster.error("Item Removed From Cart.");
        });
    },
    }
};
</script>

<style>
</style>