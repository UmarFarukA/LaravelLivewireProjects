import { useForm } from "@inertiajs/react";
import ApplicationLayout from '../ApplicationLayout'

function Biodata({ application }) {
    const { data, setData, post, processing } = useForm({
        first_name: "",
        last_name: "",
        gender: "",
        dob: "",
        phone: "",
        address: "",
    });

    function submit(e) {
        e.preventDefault();
        post(route("applications.biodata.store", application.id));
    }

    return (
        <ApplicationLayout application={application}>
            <h1 className="text-xl font-semibold mb-6">Personal Bio-Data</h1>

            <form onSubmit={submit} className="grid grid-cols-2 gap-4">
                <input
                    placeholder="First Name"
                    onChange={(e) => setData("first_name", e.target.value)}
                    className="border p-2 rounded"
                />

                <input
                    placeholder="Last Name"
                    onChange={(e) => setData("last_name", e.target.value)}
                    className="border p-2 rounded"
                />

                <select
                    onChange={(e) => setData("gender", e.target.value)}
                    className="border p-2 rounded"
                >
                    <option>Gender</option>
                    <option>Male</option>
                    <option>Female</option>
                </select>

                <input
                    type="date"
                    onChange={(e) => setData("dob", e.target.value)}
                    className="border p-2 rounded"
                />

                <input
                    placeholder="Phone"
                    onChange={(e) => setData("phone", e.target.value)}
                    className="border p-2 rounded"
                />

                <textarea
                    placeholder="Address"
                    onChange={(e) => setData("address", e.target.value)}
                    className="border p-2 rounded col-span-2"
                />

                <button className="bg-green-700 text-white px-4 py-2 rounded col-span-2">
                    Save & Continue
                </button>
            </form>
        </ApplicationLayout>
    );
}

export default Biodata;
