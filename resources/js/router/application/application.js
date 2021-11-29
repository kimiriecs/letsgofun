import appUserRoutes from "@/router/application/user/user";
import appOrderRoutes from "@/router/application/order/order";
import appTaskRoutes from "@/router/application/task/task";


import AppHomePageComponent from "@/components/application/home/AppHomePageComponent";


const appRoutes = [
  {
    path: "",
    component: AppHomePageComponent,
    name: "app",
    meta: { requiresAuth: true },
    children: []
  },
  ...appUserRoutes,
  ...appOrderRoutes,
  ...appTaskRoutes
]

export default appRoutes