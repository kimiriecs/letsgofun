import AppTasksComponent from "@/components/application/task/AppTasksComponent";
// import AppTaskShowComponent from "@/components/application/task/AppTaskShowComponent";
// import AppTaskEditComponent from "@/components/application/task/AppTaskEditComponent";
// import AppTaskCreateComponent from "@/components/application/task/AppTaskCreateComponent";

const appTaskRoutes = [
  {
    path: "tasks",
    component: AppTasksComponent,
    name: "appTasks",
    meta: { requiresAuth: true },
    // children: [
    //   {
    //     path: ":id",
    //     component: AppTaskShowComponent,
    //     name: "appTaskShow",
    //     props: route => ({
    //       ...route.params,
    //     }),
    //     meta: { requiresAuth: true }
    //   },
    //   {
    //     path: ":id/edit",
    //     component: AppTaskEditComponent,
    //     name: "appTaskEdit",
    //     props: route => ({
    //       ...route.params,
    //     }),
    //     meta: { requiresAuth: true }
    //   },
    //   {
    //     path: "create",
    //     component: AppTaskCreateComponent,
    //     name: "appTaskCreate",
    //     meta: { requiresAuth: true }
    //   },
    // ]
  }
];

export default appTaskRoutes;
