<template>
  <!-- Modal -->
  <div
    class="modal fade"
    id="editmodal"
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
            @click="clearmodal"
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

          <div class="form-group">
            <label for="">Name</label>
            <input
              type="text"
              class="form-control"
              name="name"
              id="name"
              aria-describedby="helpId"
              v-model="rec.name"
              placeholder="Add Name"
              required
            />
            <ul v-if="error.length > 0" class="list-unstyled">
              <li v-for="err of error" class="alert alert-danger">{{ err }}</li>
            </ul>
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
          <button
            type="button"
            class="btn btn-secondary"
            @click="clearmodal"
            data-dismiss="modal"
          >
            Close
          </button>
          <button type="button" class="btn btn-primary" @click="updatetask">
            Update
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
    updatetask() {
      axios
        .put("http://localhost/laravel/public/tasks/" + this.rec.id, {
          name: this.rec.name,
          description: this.rec.description,
        })
        .then((data) => {
          this.$emit("refreshtask", data);
          this.success = "Task Updated successfully";
          this.error = [];
        })
        .catch((error) => {
          this.success = "";
          this.error = error.response.data;
        });
    },
    clearmodal() {
      // alert("error");
      this.success = "";
      this.error = [];
    },
  },
  data() {
    return {
      error: [],
      success: "",
    };
  },
};
</script>

<style>
</style>