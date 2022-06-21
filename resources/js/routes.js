import ProductIndex from './components/products/index.vue';
import ProductCreate from './components/products/create.vue';
import ProductEdit from './components/products/edit.vue';

import CustomerIndex from './components/customers/index.vue';
import CustomerCreate from './components/customers/create.vue';
import CustomerEdit from './components/customers/edit.vue';

import SalesOrderIndex from './components/salesorders/index.vue';
import SalesOrderCreate from './components/salesorders/create.vue';
import SalesOrderEdit from './components/salesorders/edit.vue';

export const routes = [
    {
        path: '/products',
        component: ProductIndex,
        name: "ProductIndex"
    },
    {
        path: '/products/create',
        component: ProductCreate,
        name: "ProductCreate"
    },
    {
        path: '/products/edit/:productId',
        component: ProductEdit,
        name: "ProductEdit"
    },

//customer

    {
        path: '/customers',
        component: CustomerIndex,
        name: "CustomerIndex"
    },
    {
        path: '/customers/create',
        component: CustomerCreate,
        name: "CustomerCreate"
    },
    {
        path: '/customers/edit/:customerId',
        component: CustomerEdit,
        name: "CustomerEdit"
    },

//salesorder    

    {
        path: '/salesorders',
        component: SalesOrderIndex,
        name: "SalesOrderIndex"
    },
    {
        path: '/products/create',
        component: SalesOrderCreate,
        name: "SalesOrderCreate"
    },
    {
        path: '/salesorders/edit/:salesorderId',
        component: SalesOrderEdit,
        name: "SalesOrderEdit"
    }
];