import { Link } from '@inertiajs/react'

export default function ProgrammeCard({ programme }) {
    return (
        <div className="bg-white border rounded-xl p-6 flex flex-col justify-between hover:shadow-md transition">
            {/* HEADER */}
            <div>
                <h3 className="text-lg font-semibold text-gray-800 mb-1">
                    {programme.name}
                </h3>

                <p className="text-sm text-gray-600">
                    {programme.award_type}
                </p>
            </div>

            {/* META */}
            <div className="mt-4 space-y-2 text-sm">
                <div className="flex justify-between">
                    <span className="text-gray-500">Application Fee</span>
                    <span className="font-medium">
                        ₦{programme.application_fee.toLocaleString()}
                    </span>
                </div>

                <div className="flex justify-between">
                    <span className="text-gray-500">Status</span>
                    <span
                        className={`px-2 py-0.5 rounded text-xs font-semibold ${
                            programme.status === 'open'
                                ? 'bg-green-100 text-green-700'
                                : 'bg-red-100 text-red-700'
                        }`}
                    >
                        {programme.status === 'open' ? 'Open' : 'Closed'}
                    </span>
                </div>
            </div>

            {/* ACTION */}
            <div className="mt-6">
                <Link
                    href={route('programmes.show', programme.slug)}
                    className="block text-center bg-green-700 text-white py-2 rounded-md text-sm font-semibold hover:bg-green-800"
                >
                    View Details
                </Link>
            </div>
        </div>
    )
}
