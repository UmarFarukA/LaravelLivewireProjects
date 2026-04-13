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
        id: applicant['id'],
        othernames: applicant["othernames"],
        surname: applicant["surname"],
        gender: applicant["gender"],
        date_of_birth: applicant["date_of_birth"],
        phone: applicant["phone"],
        address: applicant["address"],
        nationality_id: applicant["country"],
        state_id: applicant["state"],
        lga_id: applicant["lga"],
        picture: null,
    });

    const [states, setState] = useState([]);
    const [lgas, setLgas] = useState([]);

    //load states when country changes
    useEffect(() => {
        if (data.nationality_id) {
            axios.get(`/states/${data.nationality_id}`).then((res) => {
                setState(res.data);
                setLgas([]);
                setData("state_id", "");
                setData("lga_id", "");
            });
        }
    }, [data.nationality_id]);

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
        post(route("applications.biodata.store", data.id));
    }

    return (
        <>
            <h1 className="text-xl font-semibold mb-6">Personal Bio-Data</h1>

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
                    name="date_of_birth"
                    type="date"
                    value={data.date_of_birth}
                    onChange={(e) => setData("date_of_birth", e.target.value)}
                    error={errors.date_of_birth}
                    required
                />

                <SelectField
                    label="Country"
                    name="country"
                    value={data.nationality_id}
                    onChange={(e) => setData("nationality_id", e.target.value)}
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

                <div>
                    <InputField
                        label="Profile Picture"
                        name="picture"
                        type="file"
                        onChange={(e) => setData("picture", e.target.files[0])}
                        error={errors.picture}
                        required
                        className=""
                    />

                    <img
                        src={data.picture ? URL.createObjectURL(data.picture) : ""}
                        alt="" className="mt-2 max-h-32"
                    />
                </div>

                <div className="md:col-span-2">
                    <Button type="submit" className="w-full">Save & Continue</Button>
                </div>
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
