import DashboardLayout from '@/Layouts/DashboardLayout'
import ApplicationCard from '@/Components/Applicant/ApplicationCard'
import Button from '@/Components/Button'

function DashboardHome({ applications }) {
    return (
        <DashboardLayout>
            <div className="col-span-12">
                <h1 className="text-2xl font-bold mb-6">
                    My Applications
                </h1>

                {/* {applications?.length === 0 ? (
                    <p className="text-gray-600 mb-4">
                        You have not started any application yet.
                    </p>
                ) : (
                    <div className="grid md:grid-cols-3 gap-6">
                        {applications.map(app => (
                            <ApplicationCard key={app.id} application={app} />
                        ))}
                    </div>
                )} */}

                <Button className="mt-6">
                    Start New Application
                </Button>
            </div>
        </DashboardLayout>
    )
}

// DashboardHome.layout = page => <DashboardLayout>{page}</DashboardLayout>

export default DashboardHome;
