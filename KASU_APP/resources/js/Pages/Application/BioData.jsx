import ApplicationLayout from '../Applicant/ApplicationLayout'
import InputField from '@/Components/InputField'
import Button from '@/Components/Button'
import { useForm } from '@inertiajs/react'

function BioData({ application, stages }) {
    const { data, setData, post, processing } = useForm({
        surname: '',
        first_name: '',
        dob: '',
        gender: '',
    })

    const submit = () => {
        post(route('applications.bio-data.store', application.id))
    }

    return (
        <ApplicationLayout application={application} stages={stages}>
            <h2 className="text-xl font-semibold mb-4">Bio-Data</h2>

            <InputField label="Surname" onChange={e => setData('surname', e.target.value)} />
            <InputField label="First Name" onChange={e => setData('first_name', e.target.value)} />
            <InputField type="date" label="Date of Birth" onChange={e => setData('dob', e.target.value)} />

            <Button onClick={submit} disabled={processing} className="mt-4">
                Save & Continue
            </Button>
        </ApplicationLayout>
    )
}


export default BioData
