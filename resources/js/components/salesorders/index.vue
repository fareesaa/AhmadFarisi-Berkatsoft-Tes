<template>
    <div class="container">
        <h2 class="text-center">SalesOrders List</h2>
        <div class="row">
            <div class="col-md-12">
                <router-link :to="{ name: 'SalesOrderCreate' }" class="btn btn-success btn-sm float-right mb-2">+ Add SalesOrder</router-link>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Product</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Customer</th>
                        <th>Email Add</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(salesOrder, key) of salesOrders" :key="key">
                            <td>{{ key+1 }}</td>

                            <td>{{ salesOrder.nameproduct }}</td>
                            <td>{{ salesOrder.description }}</td>
                            <td>{{ salesOrder.price }}</td>
                            <td>{{ salesOrder.name }}</td>
                            <td>{{ salesOrder.email }}</td>
                            <td>
                                <router-link class="btn btn-success btn-sm" :to="{ name: 'SalesOrderEdit', params: { salesOrderId: salesOrder.id }}">Edit</router-link>
                                <button class="btn btn-danger btn-sm" @click="deleteSalesOrder(salesOrder.id)">Delete</button>
                            </td>
                            <td>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                salesOrders: {}
            }
        },
        created() {
            this.getSalesOrders();
        },
        methods: {
            getSalesOrders() {
              this.axios.get('http://127.0.0.1:8000/api/salesorders').then(response => {
                this.salesOrders = response.data;
            }).catch(error=>{
                console.log(error)
            })
            },
            deleteSalesOrder(salesOrderId) {
                this.axios
                    .delete(`http://127.0.0.1:8000/api/salesOrders/${salesOrderId}`)
                    .then(response => {
                        let i = this.salesOrders.map(data => data.id).indexOf(salesOrderId);
                        this.salesOrders.splice(i, 1)
                    });
            }
        }
    }
</script>