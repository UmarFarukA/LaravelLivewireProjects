import ProgrammeCard from "../../Components/ProgrammeCard";

function AvailableProgrammes({ form, available_programmes }) {

    return (
        <>
            <section className="py-16 bg-gray-50">
                <div className="max-w-6xl mx-auto px-4">
                    <h2 className="text-2xl font-bold text-center mb-10">
                        Available Programmes for {form.name}
                    </h2>
                    <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        {available_programmes.map(programme => (
                            <ProgrammeCard key={programme.id} programme={programme} />
                        ))}
                    </div>
                </div>
            </section>
        </>
    );
}

export default AvailableProgrammes;
