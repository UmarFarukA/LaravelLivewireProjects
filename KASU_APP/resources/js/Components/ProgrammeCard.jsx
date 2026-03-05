import { Link } from "@inertiajs/react";
import Button from "@/Components/Button";

export default function ProgrammeCard({ programme }) {
    // ---- Helpers ----
    const formatCurrency = (amount) =>
        new Intl.NumberFormat("en-NG", {
            style: "currency",
            currency: "NGN",
            minimumFractionDigits: 0,
        }).format(amount);

    // const formatDate = (date) =>
    //     new Date(date).toLocaleDateString("en-NG", {
    //         day: "numeric",
    //         month: "short",
    //         year: "numeric",
    //     });

    const isClosed = programme?.app_close_date
        ? new Date(programme.app_close_date) < new Date()
        : false;

    const formatDate = (date) =>
        date
            ? new Date(date).toLocaleDateString("en-NG", {
                day: "numeric",
                month: "short",
                year: "numeric",
            })
            : "N/A";

    return (
        <div
            className="group bg-white border border-gray-200 rounded-xl p-5 flex flex-col justify-between
                        hover:shadow-lg hover:border-green-600 transition-all duration-200"
        >
            {/* Programme Title */}
            <div>
                <h3 className="text-lg font-semibold text-gray-800 group-hover:text-green-700 transition">
                    {programme?.programme?.name ?? "Programme"}
                </h3>

                {/* Fee */}
                <p className="mt-2 text-sm font-medium text-green-700">
                    Application Fee: {formatCurrency(programme.application_fee)}
                </p>

                {/* Session */}
                <p className="text-sm text-gray-600 mt-1">
                    Academic Session: {programme.academic_session}
                </p>

                {/* Application Period */}
                <p className="text-sm text-gray-500 mt-1">
                    Closing date: <span className="text-red-500">{formatDate(programme.app_close_date)}</span>
                    {/* <span className="font-medium">
                        {formatDate(programme.app_start_date)} —{" "}

                    </span> */}
                </p>
            </div>

            {/* Action */}
            <div className="mt-5">
                {isClosed ? (
                    <span className="block text-center text-sm font-medium text-red-600 bg-red-50 py-2 rounded-md">
                        Application Closed
                    </span>
                ) : programme.has_applied ? (
                    <Link
                        // href={route('applications.show', programme.id)}
                        className="bg-blue-600 text-white px-3 py-2 rounded block text-center w-full"
                    >
                        Continue Application
                    </Link>
                ) : (
                    <Link
                        href={route("applications.start", programme.id)}
                        className="bg-green-700 text-white px-3 py-2 rounded block text-center w-full"
                    >
                        Apply Now
                    </Link>
                )}
            </div>
        </div>
    );
}
