import AuthLayout from '@/Layouts/AuthLayout'
import { Head, Link, useForm, usePage } from '@inertiajs/react'

export default function VerifyEmail() {
    const { flash } = usePage().props

    const { post, processing } = useForm()

    const resendVerification = (e) => {
        e.preventDefault()
        post(route('verification.send'))
    }

    return (
        <AuthLayout title="Email Verification Required">
            <Head title="Verify Your Email" />

            <div className="mb-6 text-gray-700 text-sm">
                Thanks for signing up! Before getting started, please verify your email
                address by clicking the link we just emailed to you.
                If you didn’t receive the email, we will gladly send you another.
            </div>

            {flash?.status === 'verification-link-sent' && (
                <div className="mb-4 text-green-600 font-medium">
                    A new verification link has been sent to your email address.
                </div>
            )}

            <form onSubmit={resendVerification} className="space-y-4">
                <button
                    type="submit"
                    disabled={processing}
                    className="w-full bg-green-700 text-white py-2 rounded-md font-semibold hover:bg-green-800 disabled:opacity-50"
                >
                    Resend Verification Email
                </button>
            </form>

            <div className="mt-6 text-center text-sm text-gray-600">
                <form method="POST" action={route('logout')}>
                    <button type="submit" className="text-red-600 hover:underline">
                        Logout
                    </button>
                </form>
            </div>
        </AuthLayout>
    )
}
