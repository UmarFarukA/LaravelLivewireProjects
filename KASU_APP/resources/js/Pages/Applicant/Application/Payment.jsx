import ApplicationLayout from "./../ApplicationLayout";


function Payment({ application, stages }) {
    return (
        <>

            <h1 className="text-xl font-semibold mb-4">Application Payment</h1>

            <div className="bg-green-50 border border-green-200 p-4 rounded">
                <p className="text-gray-700">
                    Application Fee
                    <strong className="ml-2 text-green-700">₦10,000.00</strong>
                </p>

                <button className="mt-4 bg-green-700 text-white px-4 py-2 rounded">
                    Pay Now
                </button>
            </div>
        </>
    );
}

Payment.layout = (page) => (
    <ApplicationLayout
        application={page.props.application}
        stages = {page.props.stages}
    >
        {page}
    </ApplicationLayout>
)

export default Payment;
