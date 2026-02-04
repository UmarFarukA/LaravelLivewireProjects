import AdminSidebar from '@/Components/AdminSidebar'

function AuthenticatedLayout({ user, children }) {
    return (
        <div className="min-h-screen bg-gray-100 flex">
            {/* Sidebar */}
            <AdminSidebar />

            {/* Main content */}
            <div className="flex-1 flex flex-col">
                {/* Top Bar */}
                <header className="bg-white border-b px-6 py-4 flex justify-between items-center">
                    <h1 className="text-lg font-semibold text-gray-800">
                        KASU Admin Portal
                    </h1>

                    <div className="flex items-center gap-4">
                        <span className="text-sm text-gray-600">
                            {user?.name}
                        </span>
                        <form method="post" action={route('admin.logout')}>
                            <button className="text-sm text-red-600 hover:underline">
                                Logout
                            </button>
                        </form>
                    </div>
                </header>

                {/* Page content */}
                <main className="p-6">
                    {children}
                </main>
            </div>
        </div>
    )
}

export default AuthenticatedLayout;
