import ApplicationLayout from '../ApplicationLayout'
import Button from '@/Components/Button'

function BioData({ application }) {
    return (
        <ApplicationLayout {...application}>
            <h2 className="text-xl font-semibold mb-4">
                Bio-Data Information
            </h2>

            {/* Form fields go here */}

            <Button>
                Save & Continue
            </Button>
        </ApplicationLayout>
    )
}

export default BioData
