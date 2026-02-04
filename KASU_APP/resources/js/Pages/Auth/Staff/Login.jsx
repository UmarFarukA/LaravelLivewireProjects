import AuthLayout from "@/Layouts/AuthLayout";
import { Head, Link, useForm } from "@inertiajs/react";
import { route } from "../../../../../vendor/tightenco/ziggy";
import InputField from "@/Components/InputField";
import Button from "@/Components/Button";

function Login() {
    const { data, setData, post, processing, errors } = useForm({
        email: "",
        password: "",
        remember: false,
    });

    const submit = (e) => {
        e.preventDefault();
        post(route("authenticate"));
    };

    return (
        <>
            <Head title="Staff Login" />

            <form onSubmit={submit} className="space-y-5">
                {/* EMAIL */}
                <InputField
                    label="Username"
                    name="email"
                    type="email"
                    value={data.email}
                    onChange={(e) => setData("email", e.target.value)}
                    error={errors.email}
                    required
                    placeholder='Email or Staff number'
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
                    placeholder="************"
                />

                {/* REMEMBER ME */}
                <div className="flex justify-between items-center">
                    <div className="flex items-center">
                        <input
                            id="remember"
                            type="checkbox"
                            checked={data.remember}
                            onChange={(e) =>
                                setData("remember", e.target.checked)
                            }
                            className="rounded border-gray-300 text-green-700 focus:ring-green-600"
                        />
                        <label
                            htmlFor="remember"
                            className="ml-2 text-sm text-gray-600"
                        >
                            Remember me
                        </label>
                    </div>
                    <Link
                        //href={route('password.request')}
                        className="text-sm text-green-700 hover:underline"
                    >
                        Forgot password?
                    </Link>
                </div>

                {/* SUBMIT */}
                <Button type='submit' disabled={processing} className="w-full">Sign in</Button>

            </form>
        </>
    );
}

Login.layout = (page) => (
    <AuthLayout title="Sign in to your account">{page}</AuthLayout>
);

export default Login;
