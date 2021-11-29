import RegisterComponent from "@/components/root/auth/RegisterComponent"
import LoginComponent from "@/components/root/auth/LoginComponent"

const authRoutes = [
  {
    path: "register",
    component: RegisterComponent,
    name: "register",
  },
  {
    path: "login",
    component: LoginComponent,
    name: "login",
  },
]

export default authRoutes