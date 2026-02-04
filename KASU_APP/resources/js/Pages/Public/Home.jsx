import GuestLayout from "@/Layouts/GuestLayout";
import { Link } from "@inertiajs/react";

function Home({ forms, notices }) {
    return (
        <>
            {/* HERO SECTION */}
            <section className="bg-green-700 text-white py-20">
                <div className="max-w-6xl mx-auto px-4 text-center">
                    <h1 className="text-4xl md:text-5xl font-bold mb-4">
                        Apply to Kaduna State University
                    </h1>

                    <p className="text-lg md:text-xl max-w-2xl mx-auto mb-8">
                        Choose the application form you want to apply for and
                        start your journey.
                    </p>

                    <div className="flex flex-col sm:flex-row justify-center gap-4">
                        <Link
                            //href={route('register')}
                            className="bg-white text-green-700 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100"
                        >
                            Apply Now
                        </Link>

                        <Link
                            //href={route('programmes.index')}
                            className="border border-white px-6 py-3 rounded-lg font-semibold hover:bg-white hover:text-green-700"
                        >
                            Check Requirements
                        </Link>
                    </div>
                </div>
            </section>

            {/* AVAILABLE FORMS */}
            <section className="py-16 bg-gray-50">
                <div className="max-w-6xl mx-auto px-4">
                    <h2 className="text-2xl font-bold text-center mb-10">
                        Available Application Forms
                    </h2>

                    <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        {/* {forms.map(form => (
                            <Link
                                key={form.id}
                                href={route('programmes.index', { category: form.id })}
                                className="bg-white border rounded-xl p-6 text-center hover:shadow-md transition"
                            >
                                <h3 className="text-lg font-semibold mb-2">
                                    {form.name}
                                </h3>
                                <p className="text-sm text-gray-600">
                                    Click to start application
                                </p>
                            </Link>
                        ))} */}
                    </div>
                </div>
            </section>

            {/* ADMISSION NOTICES */}
            <section className="py-16">
                <div className="max-w-6xl mx-auto px-4">
                    <h2 className="text-2xl font-bold mb-6">
                        Admission Notices & Deadlines
                    </h2>

                    {/* {notices.length === 0 ? (
                        <p className="text-gray-600">No admission notices at the moment.</p>
                    ) : (
                        <div className="space-y-4">
                            {notices.map(notice => (
                                <div
                                    key={notice.id}
                                    className="border rounded-lg p-4 flex flex-col sm:flex-row sm:items-center sm:justify-between"
                                >
                                    <h4 className="font-semibold">{notice.title}</h4>
                                    <span className="text-sm text-red-600 mt-2 sm:mt-0">
                                        Deadline: {notice.deadline}
                                    </span>
                                </div>
                            ))}
                        </div>
                    )} */}
                </div>
            </section>
        </>
    );
}

export default Home
