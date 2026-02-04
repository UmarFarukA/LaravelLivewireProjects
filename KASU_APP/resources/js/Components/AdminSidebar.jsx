import { Link, usePage } from '@inertiajs/react'

export default function AdminSidebar() {
    const { url } = usePage()

    const navItem = (href, label) => (
        <li>
            <Link
                href={href}
                className={`block px-4 py-2 rounded-md text-sm font-medium
                    ${url.startsWith(href)
                        ? 'bg-green-700 text-white'
                        : 'text-gray-700 hover:bg-green-50'}
                `}
            >
                {label}
            </Link>
        </li>
    )

    return (
        <aside className="w-64 bg-white border-r">
            <div className="px-6 py-4 border-b">
                <h2 className="font-bold text-green-700">
                    forms.kasu.edu.ng
                </h2>
                <p className="text-xs text-gray-500">
                    Administration
                </p>
            </div>

            <nav className="px-4 py-6">
                <ul className="space-y-1">
                    {navItem(route('admin.dashboard'), 'Dashboard')}
                    {navItem(route('admin.applications'), 'Applications')}
                    {navItem(route('admin.programmes'), 'Programmes')}
                    {navItem(route('admin.payments'), 'Payments')}
                    {navItem(route('admin.screening'), 'Screening')}
                    {navItem(route('admin.reports'), 'Reports')}
                    {navItem(route('admin.users'), 'Users & Roles')}
                </ul>
            </nav>
        </aside>
    )
}
