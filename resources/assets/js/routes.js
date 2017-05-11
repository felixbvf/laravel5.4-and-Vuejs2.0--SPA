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
    },
    {
        path:'/create',
        component:require('./components/Form')
    }
];

export default new VueRouter({
        //mode: 'history',
        routes,
        linkActiveClass: 'active'
});
