<template>
  <!-- Modal -->
  <div
    class="modal fade"
    id="modelId"
    tabindex="-1"
    role="dialog"
    ref="vuemodal"
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
              v-model="name"
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
              v-model="description"
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
          <button type="button" class="btn btn-primary" @click="addnewtask">
            Save
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  methods: {
    addnewtask() {
      axios
        .post("http://localhost/laravel/public/tasks", {
          name: this.name,
          description: this.description,
        })
        .then((data) => {
          this.$emit("refreshtask", data);

          this.success = "task added successfully";
          this.error = [];
        })
        .catch((error) => {
          this.success = "";
          this.error = error.response.data;
          console.log(error.response.data);
        });
      this.name = "";
      this.description = "";
    },
    clearmodal() {
      // alert("error");
      this.success = "";
      this.error = [];
    },
  },
  data() {
    return {
      description: "",
      name: "",
      error: [],
      success: "",
    };
  },
};
</script>

<style>
</style>