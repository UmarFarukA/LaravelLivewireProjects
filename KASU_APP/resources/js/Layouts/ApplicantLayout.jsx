import { Link, usePage } from '@inertiajs/react'

function ApplicantLayout({ children }) {
    // const { auth } = usePage().props

    return (
        <div className="min-h-screen bg-gray-100">
            {/* TOP BAR */}
            <header className="bg-white shadow-sm">
                <div className="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
                    <Link href="/" className="font-bold text-green-700">
                        KASU Admissions
                    </Link>

                    <div className="flex items-center gap-4">
                        <span className="text-sm text-gray-600">
                            {/* {auth.applicant.first_name} */}
                            Applicant Name
                        </span>

                        <Link
                            href={route('logout')}
                            method="post"
                            as="button"
                            className="text-sm text-red-600"
                        >
                            Logout
                        </Link>
                    </div>
                </div>
            </header>

            {/* MAIN */}
            <main className="max-w-7xl mx-auto px-4 py-8">
                {children}
            </main>
        </div>
    )
}

export default ApplicantLayout
