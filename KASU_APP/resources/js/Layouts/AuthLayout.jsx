import { Link } from "@inertiajs/react";
import KASU_Logo from "../../../public/storage/assets/KASU_logo.jpg"

function AuthLayout({ children, title }) {
    return (
        <div className="min-h-screen bg-gray-50 flex items-center justify-center px-4">
            <div className="w-full max-w-md bg-white shadow rounded-lg p-6">
                {/* LOGO / HEADER */}
                <div className="text-center mb-6 ">
                    <Link href={route("home")} className="text-green-700 font-bold text-xl">
                        <div className="mb-1">
                            <img
                                src={KASU_Logo}
                                alt="KASU"
                                className="mx-auto h-16 w-auto"
                            />
                        </div>

                            Kaduna State University
                    </Link>
                    {title && (
                        <h1 className="mt-2 text-lg font-semibold text-gray-800">
                            {title}
                        </h1>
                    )}
                </div>

                {/* AUTH CARD */}
                <div>
                    {children}
                </div>

                {/* FOOTER */}
                <p className="text-center text-xs text-gray-500 mt-6">
                    © {new Date().getFullYear()} Kaduna State University
                </p>
            </div>
        </div>
    );
}

export default AuthLayout;
