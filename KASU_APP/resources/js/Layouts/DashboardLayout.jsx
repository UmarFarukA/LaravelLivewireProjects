import ApplicantLayout from '@/Layouts/ApplicantLayout'
// import ApplicationCard from '@/Components/Applicant/ApplicationCard'

function DashboardLayout({ children }) {
    return (
        <ApplicantLayout>
            <div className="grid grid-cols-12 gap-6">
                {children}
            </div>
        </ApplicantLayout>
    )
}

// DashboardLayout.layout = (page) => (
//     <ApplicantLayout title="Dashboard">{page}</ApplicantLayout>
// );

export default DashboardLayout
