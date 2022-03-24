import Vue from "vue";
import VueMeta from "vue-meta";
import VueRouter from "vue-router";

Vue.use(VueRouter);
Vue.use(VueMeta);
let urlLang = window.location.pathname.replace(/^\/([^/]+).*/i, "$1");
const routes = [
    {
        path: "/",
        name: "Home",
        component: () => import("@/views/Home.vue"),
    },

    {
        path: "/about",
        name: "About",
        // route level code-splitting
        // this generates a separate chunk (about.[hash].js) for this route
        // which is lazy-loaded when the route is visited.
        component: () =>
            import(/* webpackChunkName: "about" */ "@/views/AboutPage.vue"),
    },
    {
        path: "/services",
        name: "Services",
        component: () => import("@/views/ServicesPage.vue"),
    },
    {
        path: "/services/:url",
        name: "SingleService",
        component: () => import("@/views/SingleService.vue"),
    },
    {
        path: "/solutions",
        name: "Solutions",
        component: () => import("@/views/SolutionsPage.vue"),
    },
    {
        path: "/portfolio",
        name: "Portfolio",
        component: () => import("@/views/PortfolioPage.vue"),
    },
    {
        path: "/blogs",
        name: "Blogs",
        component: () => import("@/views/BlogsPage.vue"),
    },
    {
        path: "/blogs/:url",
        name: "SingleBlog",
        component: () => import("@/views/SingleBlog.vue"),
    },
    {
        path: "/plans",
        name: "Plans",
        component: () => import("@/views/PlansPage.vue"),
    },
    {
        path: "/contact",
        name: "Contact Us",
        component: () => import("@/views/ContactPage.vue"),
    },
    {
        path: "/apply",
        name: "Apply",
        component: () => import("@/views/ApplyPage.vue"),
    },
    {
        path: "/build-project",
        name: "BuildProject",
        component: () => import("@/views/BuildProject.vue"),
    },
    {
        path: "/careers",
        name: "Careers",
        component: () => import("@/views/CareersPage.vue"),
    },
    {
        path: "/careers/:url",
        name: "SingleCareer",
        component: () => import("@/views/SingleCareer.vue"),
    },
    {
        path: "/offers",
        name: "Offers",
        component: () => import("@/views/OffersPage.vue"),
    },
    {
        path: "*",
        name: "404",
        component: () => import("@/views/NotFoundPage.vue"),
    },
];

const router = new VueRouter({
    mode: "history",
    base: urlLang,
    routes,
});
export default router;
