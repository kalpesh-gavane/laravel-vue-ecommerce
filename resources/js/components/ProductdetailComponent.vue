<template>
  <div class="modal fade" id="product_detail_modal" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button
            type="button"
            class="close"
            data-dismiss="modal"
            aria-label="Close"
          >
            <span class="ti-close" aria-hidden="true"></span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row no-gutters">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
              <div class="quickview-content">
                <h2>
                  <!-- <input type="text" readonly v-model="" /> -->
                  {{ data.product_name }}
                </h2>
                <div class="quickview-ratting-review">
                  <div class="quickview-stock">
                    <span><i class="fa fa-check-circle-o"></i> in stock</span>
                  </div>
                </div>
                <h3>
                  {{ data.mrp }}
                  <!-- <input type="text" readonly v-model="data.mrp" /> -->
                </h3>
                <div class="quickview-peragraph">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Mollitia iste laborum ad impedit pariatur esse optio tempora
                    sint ullam autem deleniti nam in quos qui nemo ipsum
                    numquam.
                  </p>
                </div>
                <div class="size">
                  <div class="row">
                    <div class="col-lg-6 col-12">
                      <h5 class="title">Size</h5>
                      <select>
                        <option v-for="variant in data.variants">
                          {{ variant.size }}
                        </option>
                      </select>
                    </div>
                    <div class="col-lg-6 col-12">
                      <h5 class="title">Color</h5>
                      <select>
                        <option v-for="variant in data.variants">
                          {{ variant.color }}
                        </option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="quantity">
                  <!-- Input Order -->
                  <div class="input-group">
                    <div class="button minus">
                      <button
                        type="button"
                        class="btn btn-primary btn-number"
                        disabled="disabled"
                        data-type="minus"
                        data-field="quant[1]"
                      >
                        <i class="ti-minus"></i>
                      </button>
                    </div>
                    <input
                      type="number"
                      name="quant[1]"
                      class="input-number"
                      data-min="1"
                      data-max="1000"
                      value="1"
                    />
                    <div class="button plus">
                      <button
                        type="button"
                        class="btn btn-primary btn-number"
                        data-type="plus"
                        data-field="quant[1]"
                      >
                        <i class="ti-plus"></i>
                      </button>
                    </div>
                  </div>
                  <!--/ End Input Order -->
                </div>
                <div class="add-to-cart">
                  <a
                    href="#"
                    @click="addproduct(data.product_id, data.product_cat_id)"
                    class="btn"
                    >Add to cart</a
                  >
                  <a href="#" class="btn min"><i class="ti-heart"></i></a>
                  <a href="#" class="btn min"><i class="fa fa-compress"></i></a>
                </div>
                <div class="default-social">
                  <h4 class="share-now">Share:</h4>
                  <ul>
                    <li>
                      <a class="facebook" href="#"
                        ><i class="fa fa-facebook"></i
                      ></a>
                    </li>
                    <li>
                      <a class="twitter" href="#"
                        ><i class="fa fa-twitter"></i
                      ></a>
                    </li>
                    <li>
                      <a class="youtube" href="#"
                        ><i class="fa fa-pinterest-p"></i
                      ></a>
                    </li>
                    <li>
                      <a class="dribbble" href="#"
                        ><i class="fa fa-google-plus"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["data"],
  methods: {
    addproduct(product_id, product_cat_id) {
      axios
        .get(
          "http://localhost/laravel/public/cart/add/" +
            product_id +
            "/" +
            product_cat_id
        )
        .then((response) => {
          //this.products = response.data;
          // console.log(response);
        });
    },
  },
  data() {
    return {
      error: [],
      success: "",
      price: "",
      componentKey: 0,
    };
  },
};
</script>

<style>
</style>