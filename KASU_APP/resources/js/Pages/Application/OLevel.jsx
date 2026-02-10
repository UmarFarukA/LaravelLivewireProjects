import ApplicationLayout from '../Applicant/ApplicationLayout'

function OLevel({ application, stages }) {
    return (
        <ApplicationLayout application={application} stages={stages}>
            <h2 className="text-xl font-semibold mb-4">O-Level Results</h2>

            {/* Subjects + grades (WAEC/NECO) */}

            <Button className="mt-4">
                Save & Continue
            </Button>
        </ApplicationLayout>
    )
}

export default OLevel
