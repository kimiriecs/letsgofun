import DashOrdersComponent from "@/components/dashboard/order/DashOrdersComponent";
import DashOrderShowComponent from "@/components/dashboard/order/DashOrderShowComponent";
import DashOrderEditComponent from "@/components/dashboard/order/DashOrderEditComponent";
import DashOrderCreateComponent from "@/components/dashboard/order/DashOrderCreateComponent";

const dashOrderRoutes = [
  {
    path: "orders",
    component: DashOrdersComponent,
    name: "dashOrders",
    meta: { requiresAuth: true },
    children: [
      {
        path: ":id",
        component: DashOrderShowComponent,
        name: "dashOrderShow",
        props: route => ({
          ...route.params,
        }),
        meta: { requiresAuth: true }
      },
      {
        path: ":id/edit",
        component: DashOrderEditComponent,
        name: "dashOrderEdit",
        props: route => ({
          ...route.params,
        }),
        meta: { requiresAuth: true }
      },
      {
        path: "create",
        component: DashOrderCreateComponent,
        name: "dashOrderCreate",
        meta: { requiresAuth: true }
      },
    ]
  }
];

export default dashOrderRoutes;
