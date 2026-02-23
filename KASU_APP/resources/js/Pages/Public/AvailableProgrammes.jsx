import ProgrammeCard from "@/Components/ProgrammeCard";
import Pagination from "@/Components/Pagination";
import { useForm } from "@inertiajs/react";

import { useEffect } from "react";
import debounce from "lodash/debounce";

function AvailableProgrammes({ form, available_programmes }) {
    const { data, setData, get } = useForm({
        // search: "",
        search: route().params.search || ""
    });

    useEffect(() => {

        if (data.search === undefined) return;

        const delayedSearch = debounce(() => {
            get(
                route("available.programmes", {
                    application_form_id: form.id,
                    search: data.search,
                    page: route().params.page ?? 1, // reset only when searching
                }),
                {
                    preserveState: true,
                    replace: true,
                    preserveScroll: true,
                },
            );
        }, 400);

        delayedSearch();

        return () => delayedSearch.cancel();
    }, [data.search]);


    return (
        <section className="py-16 bg-gray-50">
            <div className="max-w-6xl mx-auto px-4">
                <h2 className="text-2xl font-bold text-center mb-10">
                    Available Programmes for {form.name}
                </h2>

                {/* Search */}
                <div className="mt-3 mb-6 mx-auto text-center">
                    <input
                        type="search"
                        className="w-full md:w-2/3 p-3 rounded-lg border focus:ring-2 focus:ring-green-600"
                        placeholder="Search by programme name or code..."
                        value={data.search}
                        onChange={(e) => setData("search", e.target.value)}
                    />
                </div>

                {/* Programme Grid */}
                <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    {available_programmes.data.map((programme) => (
                        <ProgrammeCard
                            key={programme.id}
                            programme={programme}
                        />
                    ))}

                    {available_programmes.data.length === 0 && (
                        <p className="text-center text-gray-500 col-span-full">
                            No Available Programmes for this Application.
                        </p>
                    )}
                </div>

                <div className="mt-6">
                    <Pagination paginator={available_programmes} />
                </div>
            </div>
        </section>
    );
}

export default AvailableProgrammes;
