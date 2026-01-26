import AuthLayout from "@/Layouts/AuthLayout";
import { Head, Link, useForm } from "@inertiajs/react";
import InputField from "@/Components/InputField";
import Button from "@/Components/Button";

function Register() {
    const { data, setData, post, processing, errors } = useForm({
        name: "",
        email: "",
        password: "",
        password_confirmation: "",
    });

    const submit = (e) => {
        e.preventDefault();
        post(route("register"));
    };

    return (
        <>
            <Head title="Register" />

            <form onSubmit={submit} className="space-y-3">
                {/* FULL NAME */}
                <InputField
                    label="Full Name"
                    name="name"
                    type="text"
                    value={data.name}
                    onChange={(e) => setData("name", e.target.value)}
                    error={errors.name}
                    required
                />

                {/* EMAIL */}
                <InputField
                    label="Email Address"
                    name="email"
                    type="email"
                    value={data.email}
                    onChange={(e) => setData("email", e.target.value)}
                    error={errors.email}
                    required
                />

                {/* PASSWORD */}
               <InputField
                    label="Password"
                    name="password"
                    type="password"
                    value={data.password}
                    onChange={(e) => setData("password", e.target.value)}
                    error={errors.password}
                    required
               />

                {/* CONFIRM PASSWORD */}
                <InputField
                    label="Confirm Password"
                    name="password_confirmation"
                    type="password"
                    value={data.password_confirmation}
                    onChange={(e) => setData("password_confirmation", e.target.value)}
                    error={errors.password_confirmation}
                    required
               />

                {/* SUBMIT */}
                <Button disabled={processing} className="w-full">Create Account</Button>

                {/* LOGIN LINK */}
                <p className="text-center text-sm text-gray-600">
                    Already have an account?{" "}
                    <Link
                        href={route("login")}
                        className="text-green-700 font-medium hover:underline"
                    >
                        Sign in
                    </Link>
                </p>
            </form>
        </>
    );
}

Register.layout = (page) => (
    <AuthLayout title="Create an account">{page}</AuthLayout>
);

export default Register;
