<template>
    <div class="container">
        <h2 class="text-center">Create customer</h2>
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
                        <label>Email</label>
                        <input type="email" rows="5" class="form-control" v-model="customer.email">
                    </div>
                   
                    <button type="button" class="btn btn-success" @click="createCustomer()">Create</button>
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
        methods: {
            createCustomer() {
                this.axios.post('http://127.0.0.1:8000/api/customers', this.customer)
                    .then(response => {
                        this.$router.push({ name: 'CustomerIndex' })
                    })
                    .catch(error=>{
                      console.log(error)
                    })
            }
        }
    }
</script>