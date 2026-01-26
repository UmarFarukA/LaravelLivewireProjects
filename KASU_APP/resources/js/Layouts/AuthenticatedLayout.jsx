function AuthenticatedLayout({ children }) {
    const { auth } = usePage().props;

    return (
        <div className="min-h-screen bg-gray-100 flex">
            {/* SIDEBAR */}
            <aside className="w-64 bg-white border-r hidden md:block">
                <div className="p-4 border-b">
                    <h2 className="font-bold text-green-700">KASU Portal</h2>
                </div>

                <nav className="p-4 space-y-2 text-sm">
                    <Link
                        href={route("dashboard")}
                        className="block px-3 py-2 rounded hover:bg-gray-100"
                    >
                        Dashboard
                    </Link>

                    <Link
                        href={route("applications.create")}
                        className="block px-3 py-2 rounded hover:bg-gray-100"
                    >
                        Start Application
                    </Link>

                    <Link
                        href="#"
                        className="block px-3 py-2 rounded hover:bg-gray-100"
                    >
                        My Applications
                    </Link>
                </nav>
            </aside>

            {/* MAIN AREA */}
            <div className="flex-1 flex flex-col">
                {/* TOP BAR */}
                <header className="bg-white border-b px-4 py-3 flex justify-between items-center">
                    <span className="text-sm text-gray-600">
                        Welcome, {auth.user.name}
                    </span>

                    <form method="post" action={route("logout")}>
                        <button
                            type="submit"
                            className="text-sm text-red-600 hover:underline"
                        >
                            Logout
                        </button>
                    </form>
                </header>

                {/* PAGE CONTENT */}
                <main className="flex-1 p-6">{children}</main>
            </div>
        </div>
    );
}

export default AuthenticatedLayout;
