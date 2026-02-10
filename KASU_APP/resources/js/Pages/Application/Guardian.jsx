import ApplicationLayout from '../Applicant/ApplicationLayout'

function Guardian({ application, stages }) {
    return (
        <ApplicationLayout application={application} stages={stages}>
            <h2 className="text-xl font-semibold mb-4">
                Parent / Guardian / Referee
            </h2>

            {/* Name, phone, relationship */}

            <Button className="mt-4">
                Save & Continue
            </Button>
        </ApplicationLayout>
    )
}

export default Guardian
