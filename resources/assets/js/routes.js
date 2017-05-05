import VueRouter from 'vue-router';
let routes=[
    {
        path:'/',
        component:require('./components/Home')
    },
    {
        path:'/solicitude',
        component:require('./components/Solicitude')
    },
    {
        path:'/inbox',
        component:require('./components/Inbox')
    }
];

export default new VueRouter({
        routes
});
