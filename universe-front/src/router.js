import Vue from "vue";
import Router from "vue-router";

Vue.use(Router);

export default new Router({
    mode: "history",
    routes: [
        {
            path: "/",
            alias: "/galaxies",
            name: "galaxies",
            component: () => import("./components/Galaxies")
        },

        {
            path: "/galaxy/create",
            name: "galaxy-create",
            component: () => import("./components/AddGalaxy")
        },
        {
            path: "/galaxy/:id",
            name: "galaxy",
            component: () => import("./components/Galaxy")
        },
        {
            path: "/planet/create",
            name: "planet-create",
            component: () => import("./components/AddPlanet")
        }

    ]
});
