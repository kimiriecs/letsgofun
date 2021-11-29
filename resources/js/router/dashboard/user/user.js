import DashUsersComponent from "@/components/dashboard/user/DashUsersComponent";
// import DashUserShowComponent from "@/components/dashboard/user/DashUserShowComponent";
// import DashUserEditComponent from "@/components/dashboard/user/DashUserEditComponent";
// import DashUserCreateComponent from "@/components/dashboard/user/DashUserCreateComponent";

const dashUserRoutes = [
  {
    path: "users",
    component: DashUsersComponent,
    name: "dashUsers",
    meta: { requiresAuth: true },
    // children: [
    //   {
    //     path: ":id",
    //     component: DashUserShowComponent,
    //     name: "dashUserShow",
    //     props: route => ({
    //       ...route.params,
    //     }),
    //     meta: { requiresAuth: true }
    //   },
    //   {
    //     path: ":id/edit",
    //     component: DashUserEditComponent,
    //     name: "dashUserEdit",
    //     props: route => ({
    //       ...route.params,
    //     }),
    //     meta: { requiresAuth: true }
    //   },
    //   {
    //     path: "create",
    //     component: DashUserCreateComponent,
    //     name: "dashUserCreate",
    //     meta: { requiresAuth: true }
    //   },
    // ]
  }
]

export default dashUserRoutes