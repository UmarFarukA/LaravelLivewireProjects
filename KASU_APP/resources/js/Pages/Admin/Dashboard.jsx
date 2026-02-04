import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout'

export default function Dashboard({ stats, auth }) {
    return (
        <AuthenticatedLayout user={auth.user}>
            <h2 className="text-xl font-semibold mb-6">
                Dashboard Overview
            </h2>

            {/* Stats Cards */}
            <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
                <StatCard label="Total Applications" value={stats.total} />
                <StatCard label="Submitted" value={stats.submitted} />
                <StatCard label="Shortlisted" value={stats.shortlisted} />
                <StatCard label="Payments Verified" value={stats.payments} />
            </div>

            {/* Quick Actions */}
            <div className="bg-white rounded-lg border p-6">
                <h3 className="font-semibold mb-4">Quick Actions</h3>

                <ul className="list-disc list-inside text-sm text-gray-700 space-y-2">
                    <li>Review newly submitted applications</li>
                    <li>Verify pending payments</li>
                    <li>Shortlist qualified applicants</li>
                    <li>Manage application forms</li>
                </ul>
            </div>
        </AuthenticatedLayout>
    )
}

function StatCard({ label, value }) {
    return (
        <div className="bg-white border rounded-lg p-5">
            <p className="text-sm text-gray-500">{label}</p>
            <p className="text-2xl font-bold text-gray-800 mt-1">
                {value}
            </p>
        </div>
    )
}
