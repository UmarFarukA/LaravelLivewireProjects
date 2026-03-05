import DashboardLayout from '@/Layouts/DashboardLayout'
import ApplicationCard from '@/Components/Applicant/ApplicationCard'
import Button from '@/Components/Button'
import { Link } from '@inertiajs/react';

function DashboardHome({ applications }) {
    return (
        <DashboardLayout>
            <div className="grid grid-cols-12 gap-6">

                <div className="col-span-12">
                    <h1 className="text-2xl font-bold mb-6">
                        My Applications
                    </h1>
                </div>

                <div className="col-span-12 grid md:grid-cols-3 gap-6">
                    {applications.map(app => (
                        <ApplicationCard key={app.id} application={app} />
                    ))}
                </div>

            </div>
        </DashboardLayout>
    );
}

export default DashboardHome;
