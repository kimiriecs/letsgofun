import dashUserRoutes from "@/router/dashboard/user/user";
import dashOrderRoutes from "@/router/dashboard/order/order";
import dashTaskRoutes from "@/router/dashboard/task/task";


import DashHomePageComponent from "@/components/dashboard/home/DashHomePageComponent";


const dashRoutes = [
  {
    path: "",
    component: DashHomePageComponent,
    name: "dashboard",
  },
  ...dashUserRoutes,
  ...dashOrderRoutes,
  ...dashTaskRoutes
]

export default dashRoutes