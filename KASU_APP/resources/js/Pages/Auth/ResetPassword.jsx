import AuthLayout from '@/Layouts/AuthLayout'
import { Head, useForm } from '@inertiajs/react'

export default function ResetPassword({ token, email }) {
    const { data, setData, post, processing, errors } = useForm({
        token,
        email: email || '',
        password: '',
        password_confirmation: '',
    })

    const submit = (e) => {
        e.preventDefault()
        post(route('password.update'))
    }

    return (
        <AuthLayout title="Reset your password">
            <Head title="Reset Password" />

            <form onSubmit={submit} className="space-y-5">
                {/* EMAIL */}
                <div>
                    <label className="block text-sm font-medium text-gray-700">
                        Email address
                    </label>

                    <input
                        type="email"
                        value={data.email}
                        onChange={e => setData('email', e.target.value)}
                        className="mt-1 block w-full rounded-md border-gray-300 focus:border-green-600 focus:ring-green-600"
                    />

                    {errors.email && (
                        <p className="text-sm text-red-600 mt-1">
                            {errors.email}
                        </p>
                    )}
                </div>

                {/* PASSWORD */}
                <div>
                    <label className="block text-sm font-medium text-gray-700">
                        New Password
                    </label>

                    <input
                        type="password"
                        value={data.password}
                        onChange={e => setData('password', e.target.value)}
                        className="mt-1 block w-full rounded-md border-gray-300 focus:border-green-600 focus:ring-green-600"
                    />

                    {errors.password && (
                        <p className="text-sm text-red-600 mt-1">
                            {errors.password}
                        </p>
                    )}
                </div>

                {/* CONFIRM PASSWORD */}
                <div>
                    <label className="block text-sm font-medium text-gray-700">
                        Confirm New Password
                    </label>

                    <input
                        type="password"
                        value={data.password_confirmation}
                        onChange={e =>
                            setData('password_confirmation', e.target.value)
                        }
                        className="mt-1 block w-full rounded-md border-gray-300 focus:border-green-600 focus:ring-green-600"
                    />
                </div>

                {/* SUBMIT */}
                <button
                    type="submit"
                    disabled={processing}
                    className="w-full bg-green-700 text-white py-2 rounded-md font-semibold hover:bg-green-800 disabled:opacity-50"
                >
                    Reset Password
                </button>
            </form>
        </AuthLayout>
    )
}
