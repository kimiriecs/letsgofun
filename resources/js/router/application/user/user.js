import AppUsersComponent from "@/components/application/user/AppUsersComponent";
import AppUserShowComponent from "@/components/application/user/AppUserShowComponent";

const appUserRoutes = [
  {
    path: "users",
    component: AppUsersComponent,
    name: "users",
    meta: { requiresAuth: true },
    //   children: [
    //   {
    //     path: ":id",
    //     component: AppUserShowComponent,
    //     name: "appUserShow",
    //     props: route => ({
    //       ...route.params,
    //     }),
    //     meta: { requiresAuth: true }
    //   }
    // ]
  }
]

export default appUserRoutes