<template>
    <div class="container">
        <h2 class="text-center">Update SalesOrder</h2>
        <div class="row">
            <div class="col-md-12">
                <router-link :to="{ name: 'SalesOrderIndex' }" class="btn btn-primary btn-sm float-right mb-2">Back</router-link>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form>
                     <div class="form-group">
                        <label>Product</label>
                        <input type="text" class="form-control" v-model="salesOrder.name">
                    </div>
                                        <div class="form-group">
                        <label>Description</label>
                        <textarea type="text" rows="5" class="form-control" v-model="salesOrder.description"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="number" class="form-control" v-model="salesOrder.price">
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="salesOrder.email">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" v-model="salesOrder.nameproduct">
                    </div>
                    <button type="button" class="btn btn-primary" @click="updateSalesOrder()"> Update </button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                salesOrder: {}
            }
        },
        mounted() {
            this.editSalesOrder(this.$route.params.salesOrderId);
        },
        methods: {
            editSalesOrder(salesOrderId) {
                this.axios.get(`http://127.0.0.1:8000/api/salesOrders/${salesOrderId}`)
                   .then((response) => {
                       this.salesOrder = response.data;
                   });
            },
            updateSalesOrder() {
                this.axios
                    .patch(`http://127.0.0.1:8000/api/salesOrders/${this.$route.params.salesOrderId}`, this.salesOrder)
                    .then((response) => {
                        this.$router.push({ name: 'SalesOrderIndex' });
                    });
            }
        }
    }
</script>