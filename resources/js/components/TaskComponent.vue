<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <h3>All Todo Tasks</h3>
            <button
              type="button"
              class="btn btn-primary btn-sm pull-right"
              data-toggle="modal"
              data-target="#modelId"
              style="float: right"
            >
              + Add
            </button>
            <input
              @keyup="searchtask"
              type="search"
              name="term"
              v-model="search"
              class="form-control"
              placeholder="Search Taks Here"
              id="term"
            />
          </div>

          <div class="card-body">
            <table class="tablecenterheadCSS table table-hover table-bordered">
              <tr>
                <th>Cricketer Id</th>
                <th>Cricketer Name</th>
                <th>Description</th>
                <th>Action</th>
              </tr>
              <tr v-for="person in peoples.data">
                <td>{{ person.id }}</td>
                <td>{{ person.name }}</td>
                <td>{{ person.description }}</td>
                <td>
                  <a
                    @click="edittask(person.id)"
                    href="#editmodal"
                    data-toggle="modal"
                    class="btn btn-info btn-sm"
                  >
                    Edit
                  </a>
                  <a
                    @click="edittask(person.id)"
                    href="#viewmodal"
                    data-toggle="modal"
                    class="btn btn-warning btn-sm"
                  >
                    view
                  </a>
                  <a
                    @click="edittask(person.id)"
                    href="#deletemodal"
                    data-toggle="modal"
                    class="btn btn-danger btn-sm"
                  >
                    Delete
                  </a>
                </td>
              </tr>
              <pagination
                :data="peoples"
                @pagination-change-page="getResults"
              ></pagination>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div id="modal">
      <addtask2 @refreshtask="recordadded"></addtask2>
      <edittask :rec="editrec" @refreshtask="recordadded"></edittask>
      <viewtask :rec="editrec"></viewtask>
      <deletetask :rec="editrec" @refreshtask="recordadded"></deletetask>
    </div>
  </div>
</template>

<script>
import Vue from "vue";
Vue.component("pagination", require("laravel-vue-pagination"));
Vue.component("addtask2", require("./AddTask2Component.vue").default);
Vue.component("edittask", require("./EditTaskComponent.vue").default);
Vue.component("viewtask", require("./ViewTaskComponent.vue").default);
Vue.component("deletetask", require("./DeleteTaskComponent.vue").default);

export default {
  created() {
    axios
      .get("http://localhost/laravel/public/tasks")
      .then((response) => (this.peoples = response.data))
      .catch((error) => console.log(error));
  },
  data() {
    return {
      peoples: {},
      editrec: {},
      search: "",
    };
  },

  methods: {
    getResults(page = 1) {
      axios
        .get("http://localhost/laravel/public/tasks?page=" + page)
        .then((response) => {
          this.peoples = response.data;
        });
    },
    recordadded(data) {
      this.peoples = data.data;
    },

    edittask(id) {
      //  alert(id);
      axios
        .get("http://localhost/laravel/public/tasks/" + id + "/edit")
        .then((response) => {
          console.log(response.data);
          this.editrec = response.data;
        });
    },
    clearmodal() {
      // alert("error");
      this.success = "";
      this.error = [];
    },
    searchtask() {
      if (this.search.length >= 3) {
        axios
          .get("http://localhost/laravel/public/tasks/search/" + this.search)
          .then((response) => {
            console.log(response.data);
            this.peoples = response.data;
          });
      } else {
        this.getResults();
      }
    },
  },
};
</script>

<style scoped>
.tablecenterheadCSS th {
  text-align: center;
}
</style>