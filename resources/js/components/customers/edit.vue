<template>
    <div class="container">
        <h2 class="text-center">Update Customer</h2>
        <div class="row">
            <div class="col-md-12">
                <router-link :to="{ name: 'CustomerIndex' }" class="btn btn-primary btn-sm float-right mb-2">Back</router-link>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="customer.name">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="email" rows="5" class="form-control" v-model="customer.email">
                    </div>
                    <!-- <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" v-model="customer.price">
                    </div> -->
                    <button type="button" class="btn btn-primary" @click="updateCustomer()"> Update </button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                customer: {}
            }
        },
        mounted() {
            this.editCustomer(this.$route.params.customerId);
        },
        methods: {
            editCustomer(customerId) {
                this.axios.get(`http://127.0.0.1:8000/api/customers/${customerId}`)
                   .then((response) => {
                       this.customer = response.data;
                   });
            },
            updateCustomer() {
                this.axios
                    .patch(`http://127.0.0.1:8000/api/customers/${this.$route.params.customerId}`, this.customer)
                    .then((response) => {
                        this.$router.push({ name: 'CustomerIndex' });
                    });
            }
        }
    }
</script>