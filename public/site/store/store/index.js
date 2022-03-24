import Vue from "vue";
import Vuex from "vuex";
import axios from "axios";
import VueAxios from "vue-axios";
axios.defaults.baseURL = "https://newpcloud.com/perfect/public/api/";

Vue.use(Vuex, VueAxios, axios);

export default new Vuex.Store({
    state: {
        websiteName: "Perfect",
        HeaderData: [],
        FooterData: [],
        HomeData: [],
        AboutData: [],
        ServicesData: [],
        SolutionsData: [],
        PortfolioData: [],
        BlogsData: [],
        PlansData: [],
        ContactData: [],
        CareersData: [],
        OffersData: [],
        language:
            window.location.pathname.replace(/^\/([^/]+).*/i, "$1") || "en",
    },
    mutations: {
        SET_DATA_HEADER(state, HeaderData) {
            state.HeaderData = HeaderData;
        },
        SET_DATA_FOOTER(state, FooterData) {
            state.FooterData = FooterData;
        },
        SET_DATA_HOME(state, HomeData) {
            state.HomeData = HomeData;
        },
        SET_DATA_ABOUT(state, AboutData) {
            state.AboutData = AboutData;
        },
        SET_DATA_SERVICES(state, ServicesData) {
            state.ServicesData = ServicesData;
        },
        SET_DATA_SOLUTIONS(state, SolutionsData) {
            state.SolutionsData = SolutionsData;
        },
        SET_DATA_PORTFOLIO(state, PortfolioData) {
            state.PortfolioData = PortfolioData;
        },
        SET_DATA_BLOGS(state, BlogsData) {
            state.BlogsData = BlogsData;
        },
        SET_DATA_PLANS(state, PlansData) {
            state.PlansData = PlansData;
        },
        SET_DATA_CONTACT(state, ContactData) {
            state.ContactData = ContactData;
        },
        SET_DATA_CAREERS(state, CareersData) {
            state.CareersData = CareersData;
        },
        SET_DATA_OFFERS(state, OffersData) {
            state.OffersData = OffersData;
        },
    },
    actions: {
        getHeaderData({ commit }) {
            axios
                .get("header", {
                    headers: { language: this.state.language },
                })
                .then((HeaderDataApi) => {
                    let HeaderData = HeaderDataApi.data.data;
                    commit("SET_DATA_HEADER", HeaderData);
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        getFooterData({ commit }) {
            axios
                .get("footer", {
                    headers: { language: this.state.language },
                })
                .then((FooterDataApi) => {
                    let FooterData = FooterDataApi.data.data;
                    commit("SET_DATA_FOOTER", FooterData);
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        getHomeData({ commit }) {
            axios
                .get("home", {
                    headers: { language: this.state.language },
                })
                .then((HomeDataApi) => {
                    let HomeData = HomeDataApi.data.data;
                    commit("SET_DATA_HOME", HomeData);
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        getAboutData({ commit }) {
            axios
                .get("about", {
                    headers: { language: this.state.language },
                })
                .then((AboutDataApi) => {
                    let AboutData = AboutDataApi.data.data;
                    commit("SET_DATA_ABOUT", AboutData);
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        getServicesData({ commit }) {
            axios
                .get("services", {
                    headers: { language: this.state.language },
                })
                .then((ServicesDataApi) => {
                    let ServicesData = ServicesDataApi.data.data;
                    commit("SET_DATA_SERVICES", ServicesData);
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        getSolutionsData({ commit }) {
            axios
                .get("solutions", {
                    headers: { language: this.state.language },
                })
                .then((SolutionsDataApi) => {
                    let SolutionsData = SolutionsDataApi.data.data;
                    commit("SET_DATA_SOLUTIONS", SolutionsData);
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        getPortfolioData({ commit }) {
            axios
                .get("portfolio", {
                    headers: { language: this.state.language },
                })
                .then((PortfolioDataApi) => {
                    let PortfolioData = PortfolioDataApi.data.data;
                    commit("SET_DATA_PORTFOLIO", PortfolioData);
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        getBlogsData({ commit }) {
            axios
                .get("blogs", {
                    headers: { language: this.state.language },
                })
                .then((BlogsDataApi) => {
                    let BlogsData = BlogsDataApi.data.data;
                    commit("SET_DATA_BLOGS", BlogsData);
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        getPlansData({ commit }) {
            axios
                .get("plans", {
                    headers: { language: this.state.language },
                })
                .then((PlansDataApi) => {
                    let PlansData = PlansDataApi.data.data;
                    commit("SET_DATA_PLANS", PlansData);
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        getContactData({ commit }) {
            axios
                .get("contact-us", {
                    headers: { language: this.state.language },
                })
                .then((ContactDataApi) => {
                    let ContactData = ContactDataApi.data.data;
                    commit("SET_DATA_CONTACT", ContactData);
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        getCareersData({ commit }) {
            axios
                .get("careers", {
                    headers: { language: this.state.language },
                })
                .then((CareersDataApi) => {
                    let CareersData = CareersDataApi.data.data;
                    commit("SET_DATA_CAREERS", CareersData);
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        getOffersData({ commit }) {
            axios
                .get("offers", {
                    headers: { language: this.state.language },
                })
                .then((OffersDataApi) => {
                    let OffersData = OffersDataApi.data.data;
                    commit("SET_DATA_OFFERS", OffersData);
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
    modules: {},
});
