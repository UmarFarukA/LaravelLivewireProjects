import { useForm } from "@inertiajs/react";
import { useState, useEffect } from "react";
import ApplicationLayout from "./../ApplicationLayout";
import FormField from "@/Components/FormField";
import InputField from "@/Components/InputField";
import axios from "axios";
import SelectField from "@/Components/SelectField";
import Button from "@/Components/Button";

function BioData({ application, applicant, countries }) {
    const { data, setData, post, processing, errors } = useForm({
        othernames: applicant["othernames"],
        surname: applicant["surname"],
        gender: "",
        dob: "",
        phone: "",
        address: "",
        country_id: "",
        state_id: "",
        lga_id: "",
    });

    const [states, setState] = useState([]);
    const [lgas, setLgas] = useState([]);

    //load states when country changes
    useEffect(() => {
        if (data.country_id) {
            axios.get(`/states/${data.country_id}`).then((res) => {
                setState(res.data);
                setLgas([]);
                setData("state_id", "");
                setData("lga_id", "");
            });

            console.log(data.country_id)
        }
    }, [data.country_id]);

    // load lgas if state changes
    useEffect(() => {
        if (data.state_id) {
            axios.get(`/lgas/${data.state_id}`).then((res) => {
                setLgas(res.data);
                setData("lga_id", "");
            });
        }
    }, [data.state_id]);

    function submit(e) {
        e.preventDefault();
        post(route("applications.biodata.store", application.id));
    }

    return (
        <>
            <h1 className="text-xl font-semibold mb-6">Personal Bio-Data</h1>

            {/* <form onSubmit={submit} className="grid grid-cols-2 gap-4">
                <input
                    placeholder="First Name"
                    onChange={(e) => setData("othernames", e.target.value)}
                    value={data.othernames}
                    className="border p-2 rounded"
                />

                <input
                    placeholder="Last Name"
                    onChange={(e) => setData("surname", e.target.value)}
                    value={data.surname}
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
            </form> */}
            <FormField submit={submit}>
                <InputField
                    label="Othernames"
                    name="othernames"
                    type="text"
                    value={data.othernames}
                    onChange={(e) => setData("othernames", e.target.value)}
                    error={errors.othernames}
                    required
                />

                <InputField
                    label="Surname"
                    name="surname"
                    type="text"
                    value={data.surname}
                    onChange={(e) => setData("surname", e.target.value)}
                    error={errors.surname}
                    required
                />

                <InputField
                    label="Phone"
                    name="phone"
                    type="text"
                    value={data.phone}
                    onChange={(e) => setData("phone", e.target.value)}
                    error={errors.phone}
                    required
                />

                <InputField
                    label="Gender"
                    name="gender"
                    type="text"
                    value={data.gender}
                    onChange={(e) => setData("gender", e.target.value)}
                    error={errors.gender}
                    required
                />

                <InputField
                    label="Date of Birth"
                    name="dob"
                    type="date"
                    value={data.dob}
                    onChange={(e) => setData("dob", e.target.value)}
                    error={errors.dob}
                    required
                />

                <SelectField
                    label="Country"
                    name="country"
                    value={data.country_id}
                    onChange={(e) => setData("country_id", e.target.value)}
                    required={true}
                    items={countries}
                    valueKey="id"
                    labelKey="country_name"
                    placeholder="--Select Country--"
                />

                <SelectField
                    label="State"
                    name="state"
                    value={data.state_id}
                    onChange={(e) => setData("state_id", e.target.value)}
                    required={true}
                    items={states}
                    valueKey="id"
                    labelKey="state_name"
                    placeholder="--Select State--"
                />

                <SelectField
                    label="LGA"
                    name="lga"
                    value={data.lga_id}
                    onChange={(e) => setData("lga_id", e.target.value)}
                    required={true}
                    items={lgas}
                    valueKey="id"
                    labelKey="lga_name"
                    placeholder="--Select LGA--"
                />

                <InputField
                    label="Address"
                    name="address"
                    type="text"
                    value={data.address}
                    onChange={(e) => setData("address", e.target.value)}
                    error={errors.address}
                    required
                    className="w-full"
                />

                <Button>Save & Continue</Button>
            </FormField>
        </>
    );
}

BioData.layout = (page) => (
    <ApplicationLayout application={page.props.application}>
        {page}
    </ApplicationLayout>
);

export default BioData;
