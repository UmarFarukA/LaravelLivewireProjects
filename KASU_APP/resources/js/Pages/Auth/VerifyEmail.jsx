import AuthLayout from '@/Layouts/AuthLayout'
import { Head, Link, useForm, usePage } from '@inertiajs/react'
import Button from '../../Components/Button'

function VerifyEmail() {
    const { flash } = usePage().props

    const { post, processing } = useForm()

    const resendVerification = (e) => {
        e.preventDefault()
        post(route('verification.send'))
    }

    return (
        <>
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
                <Button type='submit' className='primary' disabled={processing}>
                    Resend Verification Email
                </Button>
            </form>

            <div className="mt-6 text-center text-sm text-gray-600">
                <form method="POST" action={route('logout')}>
                    <button type="submit" className="text-red-600 hover:underline">
                        Logout
                    </button>
                </form>
            </div>
        </>
    )
}


VerifyEmail.layout = (page) => <AuthLayout title="Email Verification Required" children={page} />

export default VerifyEmail
