import DashboardLayout from '@/Layouts/DashboardLayout'
import ApplicationCard from '@/Components/Applicant/ApplicationCard'
import Button from '@/Components/Button'
import { Link } from '@inertiajs/react';

function DashboardHome({ applications }) {
    return (
        <DashboardLayout>
            <div className="col-span-12">
                <h1 className="text-2xl font-bold mb-6">
                    My Applications
                </h1>

                {applications?.length === 0 ? (
                    <p className="text-gray-600 mb-4">
                        You have not started any application yet.
                    </p>
                ) : (
                    <div className="grid md:grid-cols-3 gap-6">
                        {applications.map(app => (
                            <ApplicationCard key={app.id} application={app} />
                        ))}
                    </div>
                )}

                <Link href='/dashboard/programme' className="mt-6 p-2 rounded-md bg-green-700 text-white hover:bg-green-800 focus:ring-green-600">
                    Start New Application
                </Link>
            </div>
        </DashboardLayout>
    )
}

export default DashboardHome;
