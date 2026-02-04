import { route } from "../../../vendor/tightenco/ziggy";
import { Link } from "@inertiajs/react";
import KASULogo from '../../../public/storage/KASU_Logo.jpg';

function GuestLayout({ children }) {
    return (
        <div className="min-h-screen flex flex-col bg-white">
            {/* HEADER */}
            <header className="border-b bg-white">
                <div className="max-w-7xl mx-auto px-4 py-4 flex items-center justify-between">
                    <Link href={route("home")} className="flex items-center gap-2">
                        {/* Replace with logo image if available */}
                        <img src={KASULogo} alt="KASU" className="mx-auto h-8 w-auto" />
                        <span className="text-green-700 font-bold text-lg">
                            Kaduna State University
                        </span>
                    </Link>

                    <nav className="flex items-center gap-6">
                        <Link
                            //href={route("programmes.index")}
                            className="text-sm font-medium text-gray-700 hover:text-green-700"
                        >
                            Available Programmes
                        </Link>

                        <Link
                            href={route("staff.login")}
                            className="text-sm font-medium text-gray-700 hover:text-green-700"
                        >
                            Staff
                        </Link>

                        <Link
                            href={route('login')}
                            className="text-sm font-medium text-gray-700 hover:text-green-700"
                        >
                            Login
                        </Link>

                        <Link
                            href={route("applicant.register")}
                            className="bg-green-700 text-white px-4 py-2 rounded-md text-sm font-semibold hover:bg-green-800"
                        >
                            Apply Now
                        </Link>
                    </nav>
                </div>
            </header>

            {/* MAIN CONTENT */}
            <main className="flex-1">{children}</main>

            {/* FOOTER */}
            <footer className="bg-gray-100 border-t mt-10">
                <div className="max-w-7xl mx-auto px-4 py-6 text-sm text-gray-600 flex flex-col sm:flex-row justify-between gap-4">
                    <p>© {new Date().getFullYear()} Kaduna State University</p>

                    <div className="flex gap-4">
                        <span>Privacy Policy</span>
                        <span>Help & Support</span>
                    </div>
                </div>
            </footer>
        </div>
    );
}
export default GuestLayout;
