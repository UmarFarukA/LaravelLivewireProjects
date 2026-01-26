import AuthLayout from "@/Layouts/AuthLayout";
import { Head, useForm } from "@inertiajs/react";
import InputField from "@/Components/InputField";
import Button from "@/Components/Button";

function ForgotPassword({ status }) {
    const { data, setData, post, processing, errors } = useForm({
        email: "",
    });

    const submit = (e) => {
        e.preventDefault();
        post(route("password.email"));
    };

    return (
        <>
            <Head title="Forgot Password" />

            <div className="mb-4 text-sm text-gray-600">
                Enter your email address and we’ll send you a link to reset your
                password.
            </div>

            {status && (
                <div className="mb-4 text-sm text-green-600 font-medium">
                    {status}
                </div>
            )}

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

                {/* SUBMIT */}
                <Button disabled={processing} className="w-full">
                    Email Password Reset Link
                </Button>
            </form>
        </>
    );
}

ForgotPassword.layout = (page) => (
    <AuthLayout title="Forgot Password">{page}</AuthLayout>
);

export default ForgotPassword;
