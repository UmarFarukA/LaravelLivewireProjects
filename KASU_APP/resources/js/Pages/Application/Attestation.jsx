import ApplicationLayout from '../Applicant/ApplicationLayout'

function Attestation({ application, stages }) {
    return (
        <ApplicationLayout application={application} stages={stages}>
            <h2 className="text-xl font-semibold mb-4">
                Declaration & Attestation
            </h2>

            <p className="text-sm text-gray-600 mb-4">
                I certify that the information provided is true and accurate.
            </p>

            <Button variant="danger">
                Submit Application
            </Button>
        </ApplicationLayout>
    )
}


export default Attestation
