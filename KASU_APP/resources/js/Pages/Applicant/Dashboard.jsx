import ApplicantLayout from '@/Layouts/ApplicantLayout'
import ApplicationCard from '@/Components/Applicant/ApplicationCard'

function Dashboard({ applicant, applications }) {
    return (
        <ApplicantLayout>
            {/* WELCOME */}
            <div className="mb-8">
                <h1 className="text-2xl font-bold text-gray-800">
                    Welcome, Applicant
                    {/* Welcome, {applicant.othernames} {applicant.surname} */}
                </h1>
                <p className="text-gray-600">
                    Manage your applications and track progress
                </p>
            </div>

            {/* APPLICATIONS */}
            {applications.length === 0 ? (
                <div className="bg-white rounded-lg p-8 text-center shadow">
                    <p className="text-gray-600 mb-4">
                        You have not started any application yet.
                    </p>

                    <a
                        href="/"
                        className="inline-block bg-green-700 text-white px-6 py-2 rounded-md font-semibold hover:bg-green-800"
                    >
                        Start New Application
                    </a>
                </div>
            ) : (
                <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                    {applications.map(app => (
                        <ApplicationCard
                            key={app.id}
                            application={app}
                        />
                    ))}
                </div>
            )}
        </ApplicantLayout>
    )
}

export default Dashboard
