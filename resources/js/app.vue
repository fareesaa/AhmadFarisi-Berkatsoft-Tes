<template>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <router-link :to="{ name: 'ProductIndex' }"  class="nav-item nav-link">Products</router-link>
                    <router-link :to="{ name: 'CustomerIndex' }"  class="nav-item nav-link">Customers</router-link>
                    <router-link :to="{ name: 'SalesOrderIndex' }"  class="nav-item nav-link">Sales Order</router-link>
                </div>
            </div>
        </nav>
        <router-view> </router-view>
    </div>
</template>

<script>
    export default {}
</script>