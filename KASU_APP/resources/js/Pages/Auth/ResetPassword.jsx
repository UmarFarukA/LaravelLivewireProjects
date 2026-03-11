import AuthLayout from "@/Layouts/AuthLayout";
import { Head, useForm } from "@inertiajs/react";
import Button from "@/Components/Button";
import InputField from "@/Components/InputField";

function ResetPassword({ token, email }) {
    const { data, setData, post, processing, errors } = useForm({
        token,
        email: email || "",
        password: "",
        password_confirmation: "",
    });

    const submit = (e) => {
        e.preventDefault();
        post(route("password.update"));
    };

    return (
        <>
            <Head title="Reset Password" />

            <form onSubmit={submit} className="space-y-5">
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
                    label="New Password"
                    name="password"
                    type="password"
                    value={data.password}
                    onChange={(e) => setData("password", e.target.value)}
                    error={errors.password}
                    required
                />

                {/* CONFIRM PASSWORD */}
                <InputField
                    label="Confirm New Password"
                    name="password_confirmation"
                    type="password"
                    value={data.password_confirmation}
                    onChange={(e) =>
                        setData("password_confirmation", e.target.value)
                    }
                    error={errors.password_confirmation}
                    required
                />
                {/* SUBMIT */}
                <Button type="submit" disabled={processing} className="w-full">
                    Reset Password
                </Button>
            </form>
        </>
    );
}

ResetPassword.layout = (page) => (
    <AuthLayout title="Sign in to your account">{page}</AuthLayout>
);

export default ResetPassword;
