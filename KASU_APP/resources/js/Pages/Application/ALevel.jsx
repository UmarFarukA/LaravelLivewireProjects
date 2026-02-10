import ApplicationLayout from '../Applicant/ApplicationLayout'

function ALevel({ application, stages }) {
    return (
        <ApplicationLayout application={application} stages={stages}>
            <h2 className="text-xl font-semibold mb-4">A-Level / IJMB</h2>

            {/* Only shown if required by form */}

            <Button className="mt-4">
                Save & Continue
            </Button>
        </ApplicationLayout>
    )
}

export default ALevel
