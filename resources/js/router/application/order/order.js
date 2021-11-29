import AppOrdersComponent from "@/components/application/order/AppOrdersComponent";
import AppOrderShowComponent from "@/components/application/order/AppOrderShowComponent";
import AppOrderEditComponent from "@/components/application/order/AppOrderEditComponent";
import AppOrderCreateComponent from "@/components/application/order/AppOrderCreateComponent";

const appOrderRoutes = [
  {
    path: "orders",
    component: AppOrdersComponent,
    name: "appOrders",
    meta: { requiresAuth: true },
    children: [
      {
        path: ":id",
        component: AppOrderShowComponent,
        name: "appOrderShow",
        props: route => ({
          ...route.params,
        }),
        meta: { requiresAuth: true }
      },
      {
        path: ":id/edit",
        component: AppOrderEditComponent,
        name: "appOrderEdit",
        props: route => ({
          ...route.params,
        }),
        meta: { requiresAuth: true }
      },
      {
        path: "create",
        component: AppOrderCreateComponent,
        name: "appOrderCreate",
        meta: { requiresAuth: true }
      },
    ]
  }
];

export default appOrderRoutes;
