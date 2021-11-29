import DashTasksComponent from "@/components/dashboard/task/DashTasksComponent";
// import DashTaskShowComponent from "@/components/dashboard/task/DashTaskShowComponent";
// import DashTaskEditComponent from "@/components/dashboard/task/DashTaskEditComponent";
// import DashTaskCreateComponent from "@/components/dashboard/task/DashTaskCreateComponent";


const dashTaskRoutes = [
  {
    path: "tasks",
    component: DashTasksComponent,
    name: "dashTasks",
    meta: { requiresAuth: true },
    // children: [
    //   {
    //     path: ":id",
    //     component: DashTaskShowComponent,
    //     name: "dashTaskShow",
    //     props: route => ({
    //       ...route.params,
    //     }),
    //     meta: { requiresAuth: true }
    //   },
    //   {
    //     path: ":id/edit",
    //     component: DashTaskEditComponent,
    //     name: "dashTaskEdit",
    //     props: route => ({
    //       ...route.params,
    //     }),
    //     meta: { requiresAuth: true }
    //   },
    //   {
    //     path: "create",
    //     component: DashTaskCreateComponent,
    //     name: "dashTaskCreate",
    //     meta: { requiresAuth: true }
    //   },
    // ]
  }
]

export default dashTaskRoutes