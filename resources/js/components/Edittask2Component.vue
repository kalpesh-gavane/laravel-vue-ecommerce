<template>
  <div
    class="modal fade"
    id="editModal"
    role="dialog"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
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
          <p class="alert alert-success" v-if="success.length > 0">
            {{ success }}
          </p>
          <input
            type="text"
            class="form-control"
            placeholder="Add Name"
            name="name"
            id="name"
            v-model="rec.name"
          />
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">
            Close
          </button>
          <button type="button" class="btn btn-primary" @click="updatetask">
            Save changes
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["rec"],
  data() {
    return {
      success: "",
      record: "",
    };
  },
  methods: {
    updatetask() {
      axios
        .post("http://localhost/laravel/public/tasks/" + this.rec.id, {
          name: this.rec.name,
          _method: "PUT",
        })
        .then((data) => {
          this.$emit("refreshtask", data);
          this.success = "task added successfully";
        })
        .catch((error) => console.log(error));

      this.record = "";
    },
  },
};
</script>

<style>
</style>