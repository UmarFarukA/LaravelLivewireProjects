import { Link } from '@inertiajs/react'
import ApplicationProgress from './ApplicationProgress'

function ApplicationCard({ application }) {
    return (
        <div className="bg-white rounded-xl shadow-sm border p-6 flex flex-col justify-between">
            <div>
                <h3 className="font-semibold text-lg text-gray-800">
                    {application.programme.name}
                </h3>

                <p className="text-sm text-gray-600">
                    {application.form.name}
                </p>

                <p className="text-sm text-gray-500 mt-1">
                    Application No: {application.application_number}
                </p>

                {/* STATUS */}
                <span
                    className={`inline-block mt-3 px-3 py-1 rounded-full text-xs font-semibold
                        ${
                            application.status === 'submitted'
                                ? 'bg-blue-100 text-blue-700'
                                : application.status === 'shortlisted'
                                ? 'bg-green-100 text-green-700'
                                : 'bg-yellow-100 text-yellow-700'
                        }
                    `}
                >
                    {application.status.toUpperCase()}
                </span>

                {/* PROGRESS */}
                <ApplicationProgress stages={application.stages} />
            </div>

            {/* ACTION */}
            <div className="mt-6">
                <Link
                    href={route('applications.show', application.id)}
                    className="block text-center bg-green-700 text-white py-2 rounded-md font-semibold hover:bg-green-800"
                >
                    {application.status === 'draft'
                        ? 'Continue Application'
                        : 'View Application'}
                </Link>
            </div>
        </div>
    )
}


export default ApplicationCard;
