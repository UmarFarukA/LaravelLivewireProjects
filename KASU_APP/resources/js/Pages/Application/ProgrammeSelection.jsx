import ApplicationLayout from '../Applicant/ApplicationLayout'
import Button from '@/Components/Button'
import { useForm } from '@inertiajs/react'

function ProgrammeSelection({ application, stages, programmes }) {
    const { data, setData, post, processing } = useForm({
        programme_id: '',
    })

    const submit = () => {
        post(route('applications.programme.store', application.id))
    }

    return (
        <ApplicationLayout application={application} stages={stages}>
            <h2 className="text-xl font-semibold mb-4">Select Programme</h2>

            {/* <select
                className="w-full border rounded p-2"
                onChange={e => setData('programme_id', e.target.value)}
            >
                <option value="">-- Select Programme --</option>
                {programmes.map(p => (
                    <option key={p.id} value={p.id}>{p.name}</option>
                ))}
            </select> */}

            <Button
                disabled={processing || !data.programme_id}
                className="mt-4"
            >
                Save & Continue
            </Button>
        </ApplicationLayout>
    )
}

export default ProgrammeSelection
