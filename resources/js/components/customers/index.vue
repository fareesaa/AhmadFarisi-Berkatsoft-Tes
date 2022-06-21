<template>
    <div class="container">
        <h2 class="text-center">Customers List</h2>
        <div class="row">
            <div class="col-md-12">
                <router-link :to="{ name: 'CustomerCreate' }" class="btn btn-success btn-sm float-right mb-2">+ Add Customer</router-link>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(customer, key) of customers" :key="key">
                            <td>{{ key+1 }}</td>
                            <td>{{ customer.name }}</td>
                            <td>{{ customer.email }}</td>
                            <td>
                                <router-link class="btn btn-success  btn-sm" :to="{ name: 'CustomerEdit', params: { customerId: customer.id }}">Edit</router-link>
                                <button class="btn btn-danger btn-sm" @click="deleteCustomer(customer.id)">Delete</button>
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
                customers: {}
            }
        },
        created() {
            this.getCustomers();
        },
        methods: {
            getCustomers() {
              this.axios.get('http://127.0.0.1:8000/api/customers').then(response => {
                this.customers = response.data;
            }).catch(error=>{
                console.log(error)
            })
            },
            deleteCustomer(customerId) {
                this.axios
                    .delete(`http://127.0.0.1:8000/api/customers/${customerId}`)
                    .then(response => {
                        let i = this.customers.map(data => data.id).indexOf(customerId);
                        this.customers.splice(i, 1)
                    });
            }
        }
    }
</script>