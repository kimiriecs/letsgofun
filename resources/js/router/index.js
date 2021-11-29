import Vue from "vue";
import VueRouter from "vue-router";
import store from "@/store";

import authRoutes from "@/router/auth/auth";
import appRoutes from "@/router/application/application";
import dashboardRoutes from "@/router/dashboard/dashboard";

Vue.use(VueRouter);

//* Components
import AppRootComponent from "@/components/application/AppRootComponent";
import DashboardRootComponent from "@/components/dashboard/DashRootComponent";
import WelcomeComponent from "@/components/root/welcome/WelcomeComponent";

const router = new VueRouter({
  mode: "history",
  routes: [
    {
      path: "/",
      exact: true,
      component: WelcomeComponent,
      name: "welcome",
      children: [ ...authRoutes ],
      beforeEnter: (to, from, next) => {
        if (to.path === '/' && store.state.auth.auth === true) {
          next('/app');
        } else {
          next();
        }
      }
    },
    {
      path: "/app",
      exact: true,
      component: AppRootComponent,
      meta: { requiresAuth: true },
      children: [ ...appRoutes ]
    },
    {
      path: "/dashboard",
      exact: true,
      component: DashboardRootComponent,
      meta: { requiresAuth: true },
      children: [ ...dashboardRoutes ]
    },
    {
      path: "*"
      // component: NotFoundComponent
    }
  ]
});

router.beforeEach((to, from, next) => {
  if (to.matched.some(record => record.meta.requiresAuth)) {
    if (!store.state.auth.auth) {
      next("/login");
    } else {
      next();
    }
  } else {
    next();
  }
});

export default router;
